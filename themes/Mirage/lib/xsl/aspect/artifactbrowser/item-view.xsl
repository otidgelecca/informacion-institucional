<!--

    The contents of this file are subject to the license and copyright
    detailed in the LICENSE and NOTICE files at the root of the source
    tree and available online at

    http://www.dspace.org/license/

-->
<!--
    Rendering specific to the item display page.

    Author: art.lowel at atmire.com
    Author: lieven.droogmans at atmire.com
    Author: ben at atmire.com
    Author: Alexey Maslov

-->

<xsl:stylesheet
    xmlns:i18n="http://apache.org/cocoon/i18n/2.1"
    xmlns:dri="http://di.tamu.edu/DRI/1.0/"
    xmlns:mets="http://www.loc.gov/METS/"
    xmlns:dim="http://www.dspace.org/xmlns/dspace/dim"
    xmlns:xlink="http://www.w3.org/TR/xlink/"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"
    xmlns:atom="http://www.w3.org/2005/Atom"
    xmlns:ore="http://www.openarchives.org/ore/terms/"
    xmlns:oreatom="http://www.openarchives.org/ore/atom/"
    xmlns="http://www.w3.org/1999/xhtml"
    xmlns:xalan="http://xml.apache.org/xalan"
    xmlns:encoder="xalan://java.net.URLEncoder"
    xmlns:util="org.dspace.app.xmlui.utils.XSLUtils"
    xmlns:jstring="java.lang.String"
    xmlns:rights="http://cosimo.stanford.edu/sdr/metsrights/"
    xmlns:confman="org.dspace.core.ConfigurationManager"
    exclude-result-prefixes="xalan encoder i18n dri mets dim xlink xsl util jstring rights confman">

    <xsl:output indent="yes"/>

    <xsl:template name="itemSummaryView-DIM">       
        
        <!-- optional: Altmeric.com badge and PlumX widget -->
        <xsl:if test='confman:getProperty("altmetrics", "altmetric.enabled") and ($identifier_doi or $identifier_handle)'>
            <xsl:call-template name='impact-altmetric'/>
        </xsl:if>
        <xsl:if test='confman:getProperty("altmetrics", "plumx.enabled") and $identifier_doi'>
            <xsl:call-template name='impact-plumx'/>
        </xsl:if>

        <!-- Generate the info about the item from the metadata section -->
        <xsl:apply-templates select="./mets:dmdSec/mets:mdWrap[@OTHERMDTYPE='DIM']/mets:xmlData/dim:dim"
        mode="itemSummaryView-DIM"/>

        <xsl:copy-of select="$SFXLink" />
        <!-- Generate the bitstream information from the file section -->
        <xsl:choose>
            <xsl:when test="./mets:fileSec/mets:fileGrp[@USE='CONTENT' or @USE='ORIGINAL']/mets:file">
                <xsl:apply-templates select="./mets:fileSec/mets:fileGrp[@USE='CONTENT' or @USE='ORIGINAL']">
                    <xsl:with-param name="context" select="."/>
                    <xsl:with-param name="primaryBitstream" select="./mets:structMap[@TYPE='LOGICAL']/mets:div[@TYPE='DSpace Item']/mets:fptr/@FILEID"/>
                </xsl:apply-templates>
            </xsl:when>
            <!-- Special case for handling ORE resource maps stored as DSpace bitstreams -->
            <xsl:when test="./mets:fileSec/mets:fileGrp[@USE='ORE']">
                <xsl:apply-templates select="./mets:fileSec/mets:fileGrp[@USE='ORE']"/>
            </xsl:when>
            <xsl:otherwise>
                <h2><i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-head</i18n:text></h2>
                <table class="ds-table file-list">
                    <tr class="ds-table-header-row">
                        <th><i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-file</i18n:text></th>
                        <th><i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-size</i18n:text></th>
                        <th><i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-format</i18n:text></th>
                        <th><i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-view</i18n:text></th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p><i18n:text>xmlui.dri2xhtml.METS-1.0.item-no-files</i18n:text></p>
                        </td>
                    </tr>
                </table>
            </xsl:otherwise>
        </xsl:choose>

        <!-- Generate the Creative Commons license information from the file section (DSpace deposit license hidden by default)-->
        <xsl:apply-templates select="./mets:fileSec/mets:fileGrp[@USE='CC-LICENSE']"/>

    </xsl:template>


    <xsl:template match="dim:dim" mode="itemSummaryView-DIM">
        <!-- <div class="item-summary-view-metadata">
            <xsl:call-template name="itemSummaryView-DIM-fields"/>
        </div> -->
        <xsl:choose>
            <xsl:when test="descendant::text() and (count(dim:field[@element='title'][not(@qualifier)]) &gt; 1)">
                <!-- display first title as h1 -->
                <h2 class="ds-div-head">
                    <xsl:value-of select="dim:field[@element='title'][not(@qualifier)][1]/node()"/> &#160;
                </h2>
                <div class="simple-item-view-other">
                    <span class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-title</i18n:text>:</span>
                    <span>
                        <xsl:for-each select="dim:field[@element='title'][not(@qualifier)]">
                            <xsl:value-of select="./node()"/>
                            <xsl:if test="count(following-sibling::dim:field[@element='title'][not(@qualifier)]) != 0">
                                <xsl:text>; </xsl:text>
                                <br/>
                            </xsl:if>
                        </xsl:for-each>
                    </span>
                </div>
            </xsl:when>
            <xsl:when test="dim:field[@element='title'][descendant::text()] and count(dim:field[@element='title'][not(@qualifier)]) = 1">
                <h2 class="ds-div-head">
                    <xsl:value-of select="dim:field[@element='title'][not(@qualifier)][1]/node()"/>
                </h2>
            </xsl:when>
            <xsl:otherwise>
                <h2 class="ds-div-head">
                    <i18n:text>xmlui.dri2xhtml.METS-1.0.no-title</i18n:text>
                </h2>
            </xsl:otherwise>
        </xsl:choose>
        <!-- <xsl:call-template name="itemSummaryView-DIM-fields">
          <xsl:with-param name="clause" select="($clause + 1)"/>
          <xsl:with-param name="phase" select="$otherPhase"/>
        </xsl:call-template> -->
      
        <div class="item-summary-view-metadata" style="min-width: 100px;">
            <xsl:call-template name="itemSummaryView-DIM-fields"/>
        </div>
    </xsl:template>

    <xsl:template name="itemSummaryView-DIM-fields">
      <xsl:param name="clause" select="'2'"/>
      <xsl:param name="phase" select="'even'"/>
      <xsl:variable name="otherPhase">
            <xsl:choose>
              <xsl:when test="$phase = 'even'">
                <xsl:text>odd</xsl:text>
              </xsl:when>
              <xsl:otherwise>
                <xsl:text>even</xsl:text>
              </xsl:otherwise>
            </xsl:choose>
      </xsl:variable>

      <xsl:choose>
          <!-- Title row -->
          <!-- NO QUIERO QU EL TITULO APAREZCA DENTRO DEL CUERPO, LO PUSE EN VIEW-DIM 3:)
          <xsl:when test="$clause = 1">

              <xsl:choose>
                  <xsl:when test="descendant::text() and (count(dim:field[@element='title'][not(@qualifier)]) &gt; 1)">
                      <h1>
                          <xsl:value-of select="dim:field[@element='title'][not(@qualifier)][1]/node()"/>
                      </h1>
                      <div class="simple-item-view-other">
                          <span class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-title</i18n:text>:</span>
                          <span>
                              <xsl:for-each select="dim:field[@element='title'][not(@qualifier)]">
                                  <xsl:value-of select="./node()"/>
                                  <xsl:if test="count(following-sibling::dim:field[@element='title'][not(@qualifier)]) != 0">
                                      <xsl:text>; </xsl:text>
                                      <br/>
                                  </xsl:if>
                              </xsl:for-each>
                          </span>
                      </div>
                  </xsl:when>
                  <xsl:when test="dim:field[@element='title'][descendant::text()] and count(dim:field[@element='title'][not(@qualifier)]) = 1">
                      <h1>
                          <xsl:value-of select="dim:field[@element='title'][not(@qualifier)][1]/node()"/>
                      </h1>
                  </xsl:when>
                  <xsl:otherwise>
                      <h1>
                          <i18n:text>xmlui.dri2xhtml.METS-1.0.no-title</i18n:text>
                      </h1>
                  </xsl:otherwise>
              </xsl:choose>
            <xsl:call-template name="itemSummaryView-DIM-fields">
              <xsl:with-param name="clause" select="($clause + 1)"/>
              <xsl:with-param name="phase" select="$otherPhase"/>
            </xsl:call-template>
          </xsl:when>
          -->
          
          <!-- Abstract row -->
          <xsl:when test="$clause = 2 and (dim:field[@element='description' and @qualifier='abstract' and descendant::text()])">
              <div class="simple-item-view-description">
                  <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-abstract</i18n:text>:</h3>
                  <div>
                    <xsl:if test="count(dim:field[@element='description' and @qualifier='abstract']) &gt; 1">
                      <div class="spacer">&#160;</div>
                    </xsl:if>
                    <xsl:for-each select="dim:field[@element='description' and @qualifier='abstract']">
                          <xsl:choose>
                              <xsl:when test="node()">
                                  <p>
                                    <xsl:copy-of select="node()"/>
                                  </p>
                              </xsl:when>
                              <xsl:otherwise>
                                  <xsl:text>&#160;</xsl:text>
                              </xsl:otherwise>
                          </xsl:choose>
                          <xsl:if test="count(following-sibling::dim:field[@element='description' and @qualifier='abstract']) != 0">
                              <div class="spacer">&#160;</div>
                        </xsl:if>
                    </xsl:for-each>
                    <xsl:if test="count(dim:field[@element='description' and @qualifier='abstract']) &gt; 1">
                            <div class="spacer">&#160;</div>
                    </xsl:if>
                  </div>
              </div>
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>

          <!-- Description row -->
          <xsl:when test="$clause = 3 and (dim:field[@element='description' and not(@qualifier) and descendant::text()])">
              <div class="simple-item-view-description">
                  <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-description</i18n:text>:</h3>
                  <div>
                  <xsl:if test="count(dim:field[@element='description' and not(@qualifier)]) &gt; 1 and not(count(dim:field[@element='description' and @qualifier='abstract']) &gt; 1)">
                        <div class="spacer">&#160;</div>
                  </xsl:if>
                  <xsl:for-each select="dim:field[@element='description' and not(@qualifier)]">
                    <xsl:copy-of select="./node()"/>
                    <xsl:if test="count(following-sibling::dim:field[@element='description' and not(@qualifier)]) != 0">
                            <div class="spacer">&#160;</div>
                      </xsl:if>
                  </xsl:for-each>
                  <xsl:if test="count(dim:field[@element='description' and not(@qualifier)]) &gt; 1">
                           <div class="spacer">&#160;</div>
                  </xsl:if>
                  </div>
              </div>
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>
          
          <!-- Editor(s) row -->
          <xsl:when test="$clause = 4 and dim:field[@element='contributor'][@qualifier='editor' and descendant::text()]">
              <!-- 
              <div class="simple-item-view-authors">
                  <xsl:choose>
                      <xsl:when test="count(dim:field[@element='contributor'][@qualifier='editor']) > 1">
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-editors</i18n:text>:</h3>                      
                      </xsl:when>
                      <xsl:otherwise>
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-editor</i18n:text>:</h3>                      
                      </xsl:otherwise>
                  </xsl:choose>
                  <xsl:for-each select="dim:field[@element='contributor'][@qualifier='editor']">
                      <span>
                          <xsl:if test="@authority">
                              <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                          </xsl:if>
                          <xsl:copy-of select="node()"/>
                      </span>
                      <xsl:if test="count(following-sibling::dim:field[@element='contributor'][@qualifier='editor']) != 0">
                          <xsl:text>; </xsl:text>
                      </xsl:if>
                  </xsl:for-each>
                      
              </div>
              -->
              <div class="simple-item-view-authors">
                  <xsl:variable name="fichero" select="document('../../../../../../static/researchersIGP.xml')/researchers"/>
                  <xsl:choose>
                      <xsl:when test="count(dim:field[@element='contributor'][@qualifier='editor']) > 1">
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-editors</i18n:text>:</h3>                      
                      </xsl:when>
                      <xsl:otherwise>
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-editor</i18n:text>:</h3>                      
                      </xsl:otherwise>
                  </xsl:choose>
                  <xsl:choose>
                      <xsl:when test="dim:field[@element='contributor'][@qualifier='editor']">

                          <xsl:for-each select="dim:field[@element='contributor'][@qualifier='editor']">
                              <xsl:variable name="autor" select="node()" />
                              
                                <xsl:choose>

                                  <xsl:when test="$fichero/researcher[@name=$autor] or $fichero/researcher/altname/text()=$autor">
                                    
                                    <div class="investigador">
                                    
                                    <xsl:variable name="investigador" select="$fichero/researcher[altname/text()=$autor or @name=$autor]" />
                                    
                                      
                                        <span class="investigadorigp">
                                          <xsl:if test="@authority">
                                            <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                          </xsl:if>
                                          
                                          <a>
                                            <xsl:attribute name="href">
                                              <xsl:value-of select="concat('/discover?filtertype=author&amp;filter_relational_operator=equals&amp;filter&#61;', $autor)" />
                                            </xsl:attribute>
                                            <xsl:copy-of select="node()"/>
                                          </a>
                                          <a class="iconcard">
                                            <xsl:attribute name="onclick">
                                              <xsl:text>actionResearcherCard&#40;&#39;</xsl:text>
                                              <xsl:value-of select="$investigador/@id"/>
                                              <xsl:text>&#39;&#41;</xsl:text>                                          
                                            </xsl:attribute>
                                            <i class="far fa-address-card">&#160;</i>
                                          </a>
                                        </span>                                      
                                    
                                    <div class="ficha-investigador">                                       
                                        <xsl:attribute name="id">
                                          <xsl:value-of select="$investigador/@id"/>
                                        </xsl:attribute>
                                        <span class="close" style="position:absolute; right:3px; top:3px; font-size:14px;">
                                          <xsl:attribute name="onclick">
                                          <xsl:text>actionResearcherCard&#40;&#39;</xsl:text>
                                          <xsl:value-of select="$investigador/@id"/>
                                          <xsl:text>&#39;&#41;</xsl:text>                                          
                                        </xsl:attribute>
                                        <i class="fas fa-times">&#160;</i></span>
                            
                                        <div class="inv-info">

                                            <div class="inv-foto">                                         
                                              
                                                <xsl:choose>
                                                  <xsl:when test="$investigador/photo/text()">
                                                    <img>
                                                      <xsl:attribute name="src">         
                                                        <xsl:value-of select="$investigador/photo/text()"/>
                                                      </xsl:attribute>
                                                    </img>
                                                  </xsl:when>
                                                  <xsl:otherwise>
                                                    <img>
                                                      <xsl:attribute name="src">         
                                                        <xsl:text>/themes/Mirage/images/defaultphoto.png</xsl:text>
                                                      </xsl:attribute>
                                                    </img>
                                                  </xsl:otherwise>
                                                </xsl:choose>                                              
                                                
                                            </div>

                                            <div class="inv-denominaciones">
                                                <h4>
                                                  <a>
                                                    <xsl:attribute name="href">
                                                      <xsl:value-of select="concat('/discover?filtertype=author&amp;filter_relational_operator=equals&amp;filter&#61;', $autor)" />
                                                    </xsl:attribute>
                                                  <xsl:value-of select="$investigador/@grade"/>&#160;<xsl:value-of select="$investigador/@name" />
                                                  </a>
                                                </h4>
                                                <h5>
                                                  Investigador del 
                                                  <a target="_blank" href="https://www.igp.gob.pe">
                                                    <span class="spanlargeigp">Instituto Geofísico del Perú</span>
                                                    <span class="spanshortigp">IGP</span>
                                                  </a>
                                                </h5>
                                                <xsl:if test="$investigador/email[@visible='true']">
                                                  <a href="mailto:htvare@igp.gob.pe">
                                                    <xsl:value-of select="$investigador/email/text()" />
                                                  </a>
                                                </xsl:if>                                                
                                            </div>                                           
                                            
                                        </div>  
                                        
                                        <xsl:if test="$investigador/orcidid[@visible='true'] or $investigador/dinaid[@visible='true'] or $investigador/scopusid[@visible='true']">

                                          <div class="inv-enlaces">
                                            <span>Perfiles oficiales: </span>
                                            <xsl:if test="$investigador/orcidid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  http://orcid.org/<xsl:value-of select="$investigador/orcidid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/orcid.png" alt=""/>
                                              </a>
                                            </xsl:if>

                                            <xsl:if test="$investigador/dinaid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  https://dina.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do?id_investigador=<xsl:value-of select="$investigador/dinaid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/ctivitae.png" alt=""/>
                                              </a>
                                            </xsl:if>

                                            <xsl:if test="$investigador/scopusid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  https://www.scopus.com/authid/detail.uri?authorId=<xsl:value-of select="$investigador/scopusid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/scopus.png" alt=""/>
                                              </a>
                                            </xsl:if> 
                                            &#160;                                           
                                            
                                          </div>  

                                        </xsl:if>

                                            
                                    </div>
                                    
                                  </div>
                                  </xsl:when> 

                                  <xsl:otherwise>
                                    <span>
                                      <xsl:if test="@authority">
                                        <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                      </xsl:if>
                                      <xsl:copy-of select="node()"/>
                                    </span>
                                  </xsl:otherwise>

                                </xsl:choose>

                              <xsl:if test="count(following-sibling::dim:field[@element='contributor'][@qualifier='author']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>

                      </xsl:when>
                      <xsl:when test="dim:field[@element='creator']">
                          <xsl:for-each select="dim:field[@element='creator']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='creator']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:when test="dim:field[@element='contributor']">
                          <xsl:for-each select="dim:field[@element='contributor']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='contributor']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:otherwise>
                          <i18n:text>xmlui.dri2xhtml.METS-1.0.no-author</i18n:text>
                      </xsl:otherwise>
                  </xsl:choose>
              </div>
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>

          <!-- Advisor(s) row -->
          <xsl:when test="$clause = 5 and dim:field[@element='contributor'][@qualifier='advisor' and descendant::text()]">
            <!--
              <div class="simple-item-view-authors">
                  <xsl:choose>
                      <xsl:when test="count(dim:field[@element='contributor'][@qualifier='advisor']) > 1">
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-advisors</i18n:text>:</h3>                      
                      </xsl:when>
                      <xsl:otherwise>
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-advisor</i18n:text>:</h3>                      
                      </xsl:otherwise>
                  </xsl:choose>
                  <xsl:for-each select="dim:field[@element='contributor'][@qualifier='advisor']">
                      <span>
                          <xsl:if test="@authority">
                              <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                          </xsl:if>
                          <xsl:copy-of select="node()"/>
                      </span>
                      <xsl:if test="count(following-sibling::dim:field[@element='contributor'][@qualifier='advisor']) != 0">
                          <xsl:text>; </xsl:text>
                      </xsl:if>
                  </xsl:for-each>
                      
              </div>
            -->

              <div class="simple-item-view-authors">
                  <xsl:variable name="fichero" select="document('../../../../../../static/researchersIGP.xml')/researchers"/>
                  <xsl:choose>
                      <xsl:when test="count(dim:field[@element='contributor'][@qualifier='advisor']) > 1">
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-advisors</i18n:text>:</h3>                      
                      </xsl:when>
                      <xsl:otherwise>
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-advisor</i18n:text>:</h3>                      
                      </xsl:otherwise>
                  </xsl:choose>
                  <xsl:choose>
                      <xsl:when test="dim:field[@element='contributor'][@qualifier='advisor']">

                          <xsl:for-each select="dim:field[@element='contributor'][@qualifier='advisor']">
                              <xsl:variable name="autor" select="node()" />
                              
                                <xsl:choose>

                                  <xsl:when test="$fichero/researcher[@name=$autor] or $fichero/researcher/altname/text()=$autor">
                                    
                                    <div class="investigador">
                                    
                                    <xsl:variable name="investigador" select="$fichero/researcher[altname/text()=$autor or @name=$autor]" />
                                    
                                      
                                        <span class="investigadorigp">
                                          <xsl:if test="@authority">
                                            <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                          </xsl:if>
                                          
                                          <a>
                                            <xsl:attribute name="href">
                                              <xsl:value-of select="concat('/discover?filtertype=author&amp;filter_relational_operator=equals&amp;filter&#61;', $autor)" />
                                            </xsl:attribute>
                                            <xsl:copy-of select="node()"/>
                                          </a>
                                          <a class="iconcard">
                                            <xsl:attribute name="onclick">
                                              <xsl:text>actionResearcherCard&#40;&#39;</xsl:text>
                                              <xsl:value-of select="$investigador/@id"/>
                                              <xsl:text>&#39;&#41;</xsl:text>                                          
                                            </xsl:attribute>
                                            <i class="far fa-address-card">&#160;</i>
                                          </a>
                                        </span>                                      
                                    
                                    <div class="ficha-investigador">                                       
                                        <xsl:attribute name="id">
                                          <xsl:value-of select="$investigador/@id"/>
                                        </xsl:attribute>
                                        <span class="close" style="position:absolute; right:3px; top:3px; font-size:14px;">
                                          <xsl:attribute name="onclick">
                                          <xsl:text>actionResearcherCard&#40;&#39;</xsl:text>
                                          <xsl:value-of select="$investigador/@id"/>
                                          <xsl:text>&#39;&#41;</xsl:text>                                          
                                        </xsl:attribute>
                                        <i class="fas fa-times">&#160;</i></span>
                            
                                        <div class="inv-info">

                                            <div class="inv-foto">                                         
                                              
                                                <xsl:choose>
                                                  <xsl:when test="$investigador/photo/text()">
                                                    <img>
                                                      <xsl:attribute name="src">         
                                                        <xsl:value-of select="$investigador/photo/text()"/>
                                                      </xsl:attribute>
                                                    </img>
                                                  </xsl:when>
                                                  <xsl:otherwise>
                                                    <img>
                                                      <xsl:attribute name="src">         
                                                        <xsl:text>/themes/Mirage/images/defaultphoto.png</xsl:text>
                                                      </xsl:attribute>
                                                    </img>
                                                  </xsl:otherwise>
                                                </xsl:choose>                                              
                                                
                                            </div>

                                            <div class="inv-denominaciones">
                                                <h4>
                                                  <a>
                                                    <xsl:attribute name="href">
                                                      <xsl:value-of select="concat('/discover?filtertype=author&amp;filter_relational_operator=equals&amp;filter&#61;', $autor)" />
                                                    </xsl:attribute>
                                                  <xsl:value-of select="$investigador/@grade"/>&#160;<xsl:value-of select="$investigador/@name" />
                                                  </a>
                                                </h4>
                                                <h5>
                                                  Investigador del 
                                                  <a target="_blank" href="https://www.igp.gob.pe">
                                                    <span class="spanlargeigp">Instituto Geofísico del Perú</span>
                                                    <span class="spanshortigp">IGP</span>
                                                  </a>
                                                </h5>
                                                <xsl:if test="$investigador/email[@visible='true']">
                                                  <a href="mailto:htvare@igp.gob.pe">
                                                    <xsl:value-of select="$investigador/email/text()" />
                                                  </a>
                                                </xsl:if>                                                
                                            </div>                                           
                                            
                                        </div>  
                                        
                                        <xsl:if test="$investigador/orcidid[@visible='true'] or $investigador/dinaid[@visible='true'] or $investigador/scopusid[@visible='true']">

                                          <div class="inv-enlaces">
                                            <span>Perfiles oficiales: </span>
                                            <xsl:if test="$investigador/orcidid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  http://orcid.org/<xsl:value-of select="$investigador/orcidid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/orcid.png" alt=""/>
                                              </a>
                                            </xsl:if>

                                            <xsl:if test="$investigador/dinaid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  https://dina.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do?id_investigador=<xsl:value-of select="$investigador/dinaid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/ctivitae.png" alt=""/>
                                              </a>
                                            </xsl:if>

                                            <xsl:if test="$investigador/scopusid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  https://www.scopus.com/authid/detail.uri?authorId=<xsl:value-of select="$investigador/scopusid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/scopus.png" alt=""/>
                                              </a>
                                            </xsl:if> 
                                            &#160;                                           
                                            
                                          </div>  

                                        </xsl:if>

                                            
                                    </div>
                                    
                                  </div>
                                  </xsl:when> 

                                  <xsl:otherwise>
                                    <span>
                                      <xsl:if test="@authority">
                                        <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                      </xsl:if>
                                      <xsl:copy-of select="node()"/>
                                    </span>
                                  </xsl:otherwise>

                                </xsl:choose>

                              <xsl:if test="count(following-sibling::dim:field[@element='contributor'][@qualifier='author']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>

                      </xsl:when>
                      <xsl:when test="dim:field[@element='creator']">
                          <xsl:for-each select="dim:field[@element='creator']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='creator']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:when test="dim:field[@element='contributor']">
                          <xsl:for-each select="dim:field[@element='contributor']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='contributor']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:otherwise>
                          <i18n:text>xmlui.dri2xhtml.METS-1.0.no-author</i18n:text>
                      </xsl:otherwise>
                  </xsl:choose>
              </div>


              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>              

          <!-- Author(s) row -->
          <xsl:when test="$clause = 6 and (dim:field[@element='contributor'][@qualifier='author' and descendant::text()] or dim:field[@element='creator' and descendant::text()] or dim:field[@element='contributor' and@qualifier!='editor' and descendant::text()])">

              <div class="simple-item-view-authors">
                  <xsl:variable name="fichero" select="document('../../../../../../static/researchersIGP.xml')/researchers"/>
                  <!--
                  <xsl:if test="$fichero">
                    <xsl:value-of select="$fichero" />
                  </xsl:if>
                  -->
                  <xsl:choose>
                      <xsl:when test="count(dim:field[@element='contributor'][@qualifier='author']) > 1">
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-authors</i18n:text>:</h3>                      
                      </xsl:when>
                      <xsl:otherwise>
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-author</i18n:text>:</h3>                      
                      </xsl:otherwise>
                  </xsl:choose>
                  <xsl:choose>
                      <xsl:when test="dim:field[@element='contributor'][@qualifier='author']">

                          <xsl:for-each select="dim:field[@element='contributor'][@qualifier='author']">
                              <xsl:variable name="autor" select="node()" />
                              
                                <xsl:choose>

                                  <xsl:when test="$fichero/researcher[@name=$autor] or $fichero/researcher/altname/text()=$autor">
                                    
                                    <div class="investigador">
                                    
                                    <xsl:variable name="investigador" select="$fichero/researcher[altname/text()=$autor or @name=$autor]" />
                                    
                                      
                                        <span class="investigadorigp">
                                          <xsl:if test="@authority">
                                            <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                          </xsl:if>
                                          
                                          <a>
                                            <xsl:attribute name="href">
                                              <xsl:value-of select="concat('/discover?filtertype=author&amp;filter_relational_operator=equals&amp;filter&#61;', $autor)" />
                                            </xsl:attribute>
                                            <xsl:copy-of select="node()"/>
                                          </a>
                                          <a class="iconcard">
                                            <xsl:attribute name="onclick">
                                              <xsl:text>actionResearcherCard&#40;&#39;</xsl:text>
                                              <xsl:value-of select="$investigador/@id"/>
                                              <xsl:text>&#39;&#41;</xsl:text>                                          
                                            </xsl:attribute>
                                            <i class="far fa-address-card">&#160;</i>
                                          </a>
                                        </span>
                                      
                                      

                                      
                                    
                                    <div class="ficha-investigador">                                       
                                        <xsl:attribute name="id">
                                          <xsl:value-of select="$investigador/@id"/>
                                        </xsl:attribute>
                                        <span class="close" style="position:absolute; right:3px; top:3px; font-size:14px;">
                                          <xsl:attribute name="onclick">
                                          <xsl:text>actionResearcherCard&#40;&#39;</xsl:text>
                                          <xsl:value-of select="$investigador/@id"/>
                                          <xsl:text>&#39;&#41;</xsl:text>                                          
                                        </xsl:attribute>
                                        <i class="fas fa-times">&#160;</i></span>
                            
                                        <div class="inv-info">

                                            <div class="inv-foto">                                         
                                              
                                                <xsl:choose>
                                                  <xsl:when test="$investigador/photo/text()">
                                                    <img>
                                                      <xsl:attribute name="src">         
                                                        <xsl:value-of select="$investigador/photo/text()"/>
                                                      </xsl:attribute>
                                                    </img>
                                                  </xsl:when>
                                                  <xsl:otherwise>
                                                    <img>
                                                      <xsl:attribute name="src">         
                                                        <xsl:text>/themes/Mirage/images/defaultphoto.png</xsl:text>
                                                      </xsl:attribute>
                                                    </img>
                                                  </xsl:otherwise>
                                                </xsl:choose>                                              
                                                
                                            </div>

                                            <div class="inv-denominaciones">
                                                <h4>
                                                  <a>
                                                    <xsl:attribute name="href">
                                                      <xsl:value-of select="concat('/discover?filtertype=author&amp;filter_relational_operator=equals&amp;filter&#61;', $autor)" />
                                                    </xsl:attribute>
                                                  <xsl:value-of select="$investigador/@grade"/>&#160;<xsl:value-of select="$investigador/@name" />
                                                  </a>
                                                </h4>
                                                <h5>
                                                  Investigador del 
                                                  <a target="_blank" href="https://www.igp.gob.pe">
                                                    <span class="spanlargeigp">Instituto Geofísico del Perú</span>
                                                    <span class="spanshortigp">IGP</span>
                                                  </a>
                                                </h5>
                                                <xsl:if test="$investigador/email[@visible='true']">
                                                  <a href="mailto:htvare@igp.gob.pe">
                                                    <xsl:value-of select="$investigador/email/text()" />
                                                  </a>
                                                </xsl:if>                                                
                                            </div>                                           
                                            
                                        </div>  
                                        
                                        <xsl:if test="$investigador/orcidid[@visible='true'] or $investigador/dinaid[@visible='true'] or $investigador/scopusid[@visible='true']">

                                          <div class="inv-enlaces">
                                            <span>Perfiles oficiales: </span>
                                            <xsl:if test="$investigador/orcidid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  http://orcid.org/<xsl:value-of select="$investigador/orcidid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/orcid.png" alt=""/>
                                              </a>
                                            </xsl:if>

                                            <xsl:if test="$investigador/dinaid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  https://dina.concytec.gob.pe/appDirectorioCTI/VerDatosInvestigador.do?id_investigador=<xsl:value-of select="$investigador/dinaid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/ctivitae.png" alt=""/>
                                              </a>
                                            </xsl:if>

                                            <xsl:if test="$investigador/scopusid[@visible='true']">
                                              <a target="_blank">
                                                <xsl:attribute name="href">
                                                  https://www.scopus.com/authid/detail.uri?authorId=<xsl:value-of select="$investigador/scopusid/text()" />
                                                </xsl:attribute>
                                                <img src="/themes/Mirage/images/scopus.png" alt=""/>
                                              </a>
                                            </xsl:if> 
                                            &#160;                                           
                                            
                                          </div>  

                                        </xsl:if>

                                            
                                    </div>
                                    
                                  </div>
                                  </xsl:when> 

                                  <xsl:otherwise>
                                    <span>
                                      <xsl:if test="@authority">
                                        <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                      </xsl:if>
                                      <xsl:copy-of select="node()"/>
                                    </span>
                                  </xsl:otherwise>

                                </xsl:choose>

                              <xsl:if test="count(following-sibling::dim:field[@element='contributor'][@qualifier='author']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>

                      </xsl:when>
                      <xsl:when test="dim:field[@element='creator']">
                          <xsl:for-each select="dim:field[@element='creator']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='creator']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:when test="dim:field[@element='contributor']">
                          <xsl:for-each select="dim:field[@element='contributor']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='contributor']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:otherwise>
                          <i18n:text>xmlui.dri2xhtml.METS-1.0.no-author</i18n:text>
                      </xsl:otherwise>
                  </xsl:choose>
              </div>
              <!--
              <div class="simple-item-view-authors">
                  <xsl:choose>
                      <xsl:when test="count(dim:field[@element='contributor'][@qualifier='author']) > 1">
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-authors</i18n:text>:</h3>                      
                      </xsl:when>
                      <xsl:otherwise>
                          <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-author</i18n:text>:</h3>                      
                      </xsl:otherwise>
                  </xsl:choose>
                  <xsl:choose>
                      <xsl:when test="dim:field[@element='contributor'][@qualifier='author']">
                          <xsl:for-each select="dim:field[@element='contributor'][@qualifier='author']">
                                    <span>
                                      <xsl:if test="@authority">
                                        <xsl:attribute name="class"><xsl:text>ds-dc_contributor_author-authority</xsl:text></xsl:attribute>
                                      </xsl:if>
                              <xsl:copy-of select="node()"/>
                                    </span>
                              <xsl:if test="count(following-sibling::dim:field[@element='contributor'][@qualifier='author']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:when test="dim:field[@element='creator']">
                          <xsl:for-each select="dim:field[@element='creator']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='creator']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:when test="dim:field[@element='contributor']">
                          <xsl:for-each select="dim:field[@element='contributor']">
                              <xsl:copy-of select="node()"/>
                              <xsl:if test="count(following-sibling::dim:field[@element='contributor']) != 0">
                                  <xsl:text>; </xsl:text>
                              </xsl:if>
                          </xsl:for-each>
                      </xsl:when>
                      <xsl:otherwise>
                          <i18n:text>xmlui.dri2xhtml.METS-1.0.no-author</i18n:text>
                      </xsl:otherwise>
                  </xsl:choose>
              </div>
              -->
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>            
          
          <!-- date.issued row -->
          <xsl:when test="$clause = 7 and (dim:field[@element='date' and @qualifier='issued' and descendant::text()])">
                    <!--
              <div class="simple-item-view-other">
                  <span class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-date</i18n:text>:</span>
                  <span>
                    <xsl:for-each select="dim:field[@element='date' and @qualifier='issued']">
                      <xsl:copy-of select="substring(./node(),1,10)"/>
                       <xsl:if test="count(following-sibling::dim:field[@element='date' and @qualifier='issued']) != 0">
                        <br/>
                      </xsl:if>
                    </xsl:for-each>
                  </span>
              </div>-->
              <div class="simple-item-view-other">
                  <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-date</i18n:text>:</h3>
                  <span>
                    <xsl:for-each select="dim:field[@element='date' and @qualifier='issued']">
                      <xsl:copy-of select="substring(./node(),1,10)"/>
                       <xsl:if test="count(following-sibling::dim:field[@element='date' and @qualifier='issued']) != 0">
                        <br/>
                      </xsl:if>
                    </xsl:for-each>
                  </span>
              </div>
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>

          <!-- identifier.citation row -->
          <xsl:when test="$clause = 8 and (dim:field[@element='identifier' and @qualifier='citation' and descendant::text()])">
              <div class="simple-item-view-other citation">
                  <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-citation</i18n:text>:</h3>
                    
                    <!--
                    <xsl:for-each select="dim:field[@element='identifier' and @qualifier='citation']">
                      <xsl:copy-of select="node()"/>
                       <xsl:if test="count(following-sibling::dim:field[@element='identifier' and @qualifier='citation']) != 0">
                        <br/>
                      </xsl:if>
                    </xsl:for-each>
                    -->
                    <xsl:for-each select="dim:field[@element='identifier' and @qualifier='citation']">
                        <xsl:call-template name="splitCitation">
                            <xsl:with-param name="citation" select="./text()" />
                            <xsl:with-param name="begDel" select="'==$'" />
                            <xsl:with-param name="endDel" select="'$=='" />
                            <xsl:with-param name="pubtype" select="dim:field[@element='degree']"/>
                        </xsl:call-template>
                        <xsl:if test="count(following-sibling::dim:field[@element='identifier' and @qualifier='citation']) != 0">
                          <br/>
                        </xsl:if>
                    </xsl:for-each>

              </div>
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>       

          <!-- identifier.uri row -->
          <xsl:when test="$clause = 9 and (dim:field[@element='identifier' and @qualifier='uri' and descendant::text()])">
              <!--
                    <div class="simple-item-view-other">
                  <span class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-uri</i18n:text>:</span>
                  <span>
                    <xsl:for-each select="dim:field[@element='identifier' and @qualifier='uri']">
                        <a>
                            <xsl:attribute name="href">
                                <xsl:copy-of select="./node()"/>
                            </xsl:attribute>
                            <xsl:copy-of select="./node()"/>
                        </a>
                        <xsl:if test="count(following-sibling::dim:field[@element='identifier' and @qualifier='uri']) != 0">
                          <br/>
                        </xsl:if>
                      </xsl:for-each>
                  </span>
              </div>
            -->
              <div class="simple-item-view-other">
                  <h3 class="bold"><i18n:text>xmlui.dri2xhtml.METS-1.0.item-uri</i18n:text>:</h3>
                  <span>
                    <xsl:for-each select="dim:field[@element='identifier' and @qualifier='uri']">
                        <a>
                            <xsl:attribute name="href">
                                <xsl:copy-of select="./node()"/>
                            </xsl:attribute>
                            <xsl:copy-of select="./node()"/>
                        </a>
                        <xsl:if test="count(following-sibling::dim:field[@element='identifier' and @qualifier='uri']) != 0">
                          <br/>
                        </xsl:if>
                      </xsl:for-each>
                  </span>
              </div>           
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$otherPhase"/>
              </xsl:call-template>
          </xsl:when>

          
          <xsl:when test="$clause = 10 and $ds_item_view_toggle_url != ''">
              <!-- <p class="ds-paragraph item-view-toggle item-view-toggle-bottom">
                  <a>
                      <xsl:attribute name="href"><xsl:value-of select="$ds_item_view_toggle_url"/></xsl:attribute>
                      <i18n:text>xmlui.ArtifactBrowser.ItemViewer.show_full</i18n:text>
                  </a>
              </p> -->
               <div class="simple-item-view-other">
                  <h3 class="bold"><i18n:text>xmlui.ArtifactBrowser.ItemViewer.dublin_core</i18n:text>:</h3>
                  <a>
                      <xsl:attribute name="href"><xsl:value-of select="$ds_item_view_toggle_url"/></xsl:attribute>
                      <i18n:text>xmlui.ArtifactBrowser.ItemViewer.show_full</i18n:text>
                  </a>
              </div>
          </xsl:when>

          <!-- recurse without changing phase if we didn't output anything -->
          <xsl:otherwise>
            <!-- IMPORTANT: This test should be updated if clauses are added! -->
            <xsl:if test="$clause &lt; 11">
              <xsl:call-template name="itemSummaryView-DIM-fields">
                <xsl:with-param name="clause" select="($clause + 1)"/>
                <xsl:with-param name="phase" select="$phase"/>
              </xsl:call-template>
            </xsl:if>
          </xsl:otherwise>
        </xsl:choose>

         <!-- Generate the Creative Commons license information from the file section (DSpace deposit license hidden by default) -->
        <xsl:apply-templates select="mets:fileSec/mets:fileGrp[@USE='CC-LICENSE']"/>
    </xsl:template>

    <!-- separar identifier.citation en spans por cada "delimiter" encontrado -->
    <xsl:template name="splitCitation">
      <xsl:param name="order" select="1" />
      <xsl:param name="citation" />
      <xsl:param name="begDel" />
      <xsl:param name="endDel" />
      <xsl:choose>
          <xsl:when test="contains($citation, $endDel)">
              <xsl:if test="substring-before($citation, $begDel)">
                  <span class="ncitation"><xsl:value-of select="substring-before($citation, $begDel)"/></span>
              </xsl:if>
              <span class="icitation">
                  <xsl:value-of select="substring-after(substring-before($citation, $endDel), $begDel)"/>
              </span>
              <xsl:call-template name="splitCitation">
                  <xsl:with-param name="citation" select="substring-after($citation, $endDel)" />
                  <xsl:with-param name="begDel" select="$begDel" />
                  <xsl:with-param name="endDel" select="$endDel" />
              </xsl:call-template>
          </xsl:when>
          <xsl:otherwise>
              <span class="ncitation"><xsl:value-of select="$citation"/></span>
          </xsl:otherwise>
      </xsl:choose>
    </xsl:template>


    <xsl:template match="dim:dim" mode="itemDetailView-DIM">
        <table class="ds-includeSet-table detailtable">
            <xsl:apply-templates mode="itemDetailView-DIM"/>
        </table>
        <span class="Z3988">
            <xsl:attribute name="title">
                 <xsl:call-template name="renderCOinS"/>
            </xsl:attribute>
            &#xFEFF; <!-- non-breaking space to force separating the end tag -->
        </span>
        <xsl:copy-of select="$SFXLink" />
    </xsl:template>

    <xsl:template match="dim:field" mode="itemDetailView-DIM">
            <tr>
                <xsl:attribute name="class">
                    <xsl:text>ds-table-row </xsl:text>
                    <xsl:if test="(position() div 2 mod 2 = 0)">even </xsl:if>
                    <xsl:if test="(position() div 2 mod 2 = 1)">odd </xsl:if>
                </xsl:attribute>
                <td class="label-cell">
                    <xsl:value-of select="./@mdschema"/>
                    <xsl:text>.</xsl:text>
                    <xsl:value-of select="./@element"/>
                    <xsl:if test="./@qualifier">
                        <xsl:text>.</xsl:text>
                        <xsl:value-of select="./@qualifier"/>
                    </xsl:if>
                </td>
                <td>
                  <xsl:copy-of select="./node()"/>
                  <xsl:if test="./@authority and ./@confidence">
                    <xsl:call-template name="authorityConfidenceIcon">
                      <xsl:with-param name="confidence" select="./@confidence"/>
                    </xsl:call-template>
                  </xsl:if>
                </td>
                <td><xsl:value-of select="./@language"/></td>
            </tr>
    </xsl:template>

    <!-- don't render the item-view-toggle automatically in the summary view, only when it gets called -->
    <xsl:template match="dri:p[contains(@rend , 'item-view-toggle') and
        (preceding-sibling::dri:referenceSet[@type = 'summaryView'] or following-sibling::dri:referenceSet[@type = 'summaryView'])]">
    </xsl:template>

    <!-- don't render the head on the item view page -->
    <xsl:template match="dri:div[@n='item-view']/dri:head" priority="5">
    </xsl:template>

        <xsl:template match="mets:fileGrp[@USE='CONTENT']">
        <xsl:param name="context"/>
        <xsl:param name="primaryBitstream" select="-1"/>

        <!-- <h2><i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-head</i18n:text></h2> NO NECESITO ESTE TITULO-->
        <div class="file-list">
            <xsl:choose>
                <!-- If one exists and it's of text/html MIME type, only display the primary bitstream -->
                <xsl:when test="mets:file[@ID=$primaryBitstream]/@MIMETYPE='text/html'">
                    <xsl:apply-templates select="mets:file[@ID=$primaryBitstream]">
                        <xsl:with-param name="context" select="$context"/>
                    </xsl:apply-templates>
                </xsl:when>
                <!-- Otherwise, iterate over and display all of them -->
                <xsl:otherwise>
                    <xsl:apply-templates select="mets:file">
                      <!--Do not sort any more bitstream order can be changed-->
                        <!--<xsl:sort data-type="number" select="boolean(./@ID=$primaryBitstream)" order="descending" />-->
                        <!--<xsl:sort select="mets:FLocat[@LOCTYPE='URL']/@xlink:title"/>-->
                        <xsl:with-param name="context" select="$context"/>
                    </xsl:apply-templates>
                </xsl:otherwise>
            </xsl:choose>
            <div class="compartir">
                <ul class="buttonlist addthis_toolbox addthis_default_style ">                          
                    <xsl:attribute name="addthis:url">
                        <xsl:value-of select="//dim:field[@element='identifier' and @qualifier='uri']" />
                    </xsl:attribute>

                    <li><a class="addthis_button_facebook">&#160;</a></li>
                    <li><a class="addthis_button_linkedin">&#160;</a></li>
                    <li><a class="addthis_button_gmail">&#160;</a></li>
                    <li><a class="addthis_button_twitter">&#160;</a></li>
                    <li><a class="addthis_button_messenger">&#160;</a></li>
                    <li><a class="addthis_button_whatsapp">&#160;</a></li>
                    <li><a class="addthis_button_mailto">&#160;</a></li>
                    <li><a class="addthis_button_compact">&#160;</a></li>
                </ul>
            </div> 
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cb4f29bd2c034fb">&#160;</script>
        </div>
    </xsl:template>

    <xsl:template match="mets:file">
        <xsl:param name="context" select="."/>
        
        
        <div class="file-wrapper" style="margin-top: 36px;">
            <!-- <div class="thumbnail-wrapper" style="width: {$thumbnail.maxwidth}px;"> -->
            <div class="thumbnail-wrapper">
                <!-- <h3>&#160;</h3> -->
                <a class="image-link" target="_blank">
                    

                    <xsl:choose>
                        <xsl:when test="contains(mets:FLocat[@LOCTYPE='URL']/@xlink:href,'isAllowed=n')">                          
                            <xsl:choose>
                                <!-- SE HA CONVENIDO USAR EL CAMPO dc.relation.uri PARA AGREGAR EL ENLACE DE LA REVISTA QUE POSEE LOS DERECHOS DE LA PUBLICACIÓN -->
                                <xsl:when test="//dim:field[@element='relation' and @qualifier='uri'][1]">
                                    <xsl:attribute name="href">
                                        <xsl:value-of select="//dim:field[@element='relation' and @qualifier='uri'][1]"/>
                                    </xsl:attribute>
                                </xsl:when>
                                <!-- SI NO SE HA REGISTRADO EL dc.relation.uri -->
                                <xsl:otherwise>
                                    <xsl:attribute name="href">
                                        <xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:href"/>
                                    </xsl:attribute>
                                </xsl:otherwise>
                            </xsl:choose>                                
                        </xsl:when>
                        <xsl:otherwise>
                            <xsl:attribute name="href">
                                <xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:href"/>
                            </xsl:attribute>
                        </xsl:otherwise>
                    </xsl:choose>

                    
                    <xsl:choose>
                        <xsl:when test="$context/mets:fileSec/mets:fileGrp[@USE='THUMBNAIL']/
                        mets:file[@GROUPID=current()/@GROUPID]">
                            <img alt="Thumbnail" class="item-thumbnail">
                                <xsl:attribute name="src">
                                    <xsl:value-of select="$context/mets:fileSec/mets:fileGrp[@USE='THUMBNAIL']/
                                    mets:file[@GROUPID=current()/@GROUPID]/mets:FLocat[@LOCTYPE='URL']/@xlink:href"/>
                                </xsl:attribute>
                            </img>
                        </xsl:when>
                        <xsl:otherwise>
                          
                          <xsl:variable name="doctype">
                            <xsl:value-of select="substring-after(@MIMETYPE,'/')"/>
                          </xsl:variable>                          
                          <xsl:choose>
                            <xsl:when test="$doctype = 'pdf'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/pdf.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'xml'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/xml.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'plain'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/txt.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'html'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/html.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'css'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/css.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'msword'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/doc.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'vnd.ms-powerpoint'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/ppt.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'vnd.ms-excel'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/xls.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'marc'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/search.png')}" class="item-thumbnail"/>
                            </xsl:when>                            
                            <xsl:when test="$doctype = 'png'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/png.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'mpeg'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/mp3.png')}" class="item-thumbnail"/>
                            </xsl:when>
                            <xsl:when test="$doctype = 'x-photoshop'">
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/pdf.png')}" class="item-thumbnail"/>
                            </xsl:when>                           

                            <xsl:otherwise>
                              <img alt="Icon" src="{concat($theme-path, '/images/doc_types/pdf.png')}" class="item-thumbnail"/>
                            </xsl:otherwise>
                          </xsl:choose>
                          <!-- PARA AGREGAR CRÉDITOS POR USO / FLATICON XD
                          <div>Iconos diseñados por <a href="https://smashicons.com/" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.es/"         title="Flaticon">www.flaticon.com</a> con licencia <a href="http://creativecommons.org/licenses/by/3.0/"        title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
                        </xsl:otherwise>
                    </xsl:choose>
                    
                    <!-- 
                    <xsl:if test="contains(mets:FLocat[@LOCTYPE='URL']/@xlink:href,'isAllowed=n')">
                        <div> <span> </div>
                        <p>
                            <i18n:text>xmlui.dri2xhtml.METS-1.0.blocked</i18n:text>
                            <xsl:attribute name="src">
                                <xsl:text>color: red; font-weight:bold;</xsl:text>
                            </xsl:attribute>
                        </p>
                        <img>
                            <xsl:attribute name="src">
                                <xsl:value-of select="$context-path"/>
                                <xsl:text>/static/icons/lock24.png</xsl:text>
                            </xsl:attribute>
                           <xsl:attribute name="alt">xmlui.dri2xhtml.METS-1.0.blocked</xsl:attribute>
                           <xsl:attribute name="attr" namespace="http://apache.org/cocoon/i18n/2.1">alt</xsl:attribute>
                        </img>
                     </xsl:if> -->
                </a>
                <xsl:choose>
                    <xsl:when test="contains(mets:FLocat[@LOCTYPE='URL']/@xlink:href,'isAllowed=n')">
                        <p class="bloqueado" style="text-align: center;"><i class="fas fa-lock">&#160;</i><i18n:text>xmlui.dri2xhtml.METS-1.0.blocked</i18n:text></p>                        
                    </xsl:when>
                    <xsl:otherwise>
                        <p class="disponible" style="text-align: center;"><i class="fas fa-lock-open">&#160;</i><i18n:text>xmlui.dri2xhtml.METS-1.0.available</i18n:text></p>                
                    </xsl:otherwise>
                </xsl:choose>
            </div>
            <div class="file-metadata" style="margin-top: 20px;">
                <div>
                    <span class="bold">
                        <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-name</i18n:text>
                        <xsl:text>:</xsl:text>
                    </span>
                    <span>
                        <xsl:attribute name="title"><xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:title"/></xsl:attribute>
                        <xsl:value-of select="util:shortenString(mets:FLocat[@LOCTYPE='URL']/@xlink:title, 17, 5)"/>
                    </span>
                </div>
                <!-- File size always comes in bytes and thus needs conversion -->
                <div>
                    <span class="bold">
                        <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-size</i18n:text>
                        <xsl:text>:</xsl:text>
                    </span>
                    <span>
                        <xsl:choose>
                            <xsl:when test="@SIZE &lt; 1024">
                                <xsl:value-of select="@SIZE"/>
                                <i18n:text>xmlui.dri2xhtml.METS-1.0.size-bytes</i18n:text>
                            </xsl:when>
                            <xsl:when test="@SIZE &lt; 1024 * 1024">
                                <xsl:value-of select="substring(string(@SIZE div 1024),1,5)"/>
                                <i18n:text>xmlui.dri2xhtml.METS-1.0.size-kilobytes</i18n:text>
                            </xsl:when>
                            <xsl:when test="@SIZE &lt; 1024 * 1024 * 1024">
                                <xsl:value-of select="substring(string(@SIZE div (1024 * 1024)),1,5)"/>
                                <i18n:text>xmlui.dri2xhtml.METS-1.0.size-megabytes</i18n:text>
                            </xsl:when>
                            <xsl:otherwise>
                                <xsl:value-of select="substring(string(@SIZE div (1024 * 1024 * 1024)),1,5)"/>
                                <i18n:text>xmlui.dri2xhtml.METS-1.0.size-gigabytes</i18n:text>
                            </xsl:otherwise>
                        </xsl:choose>
                    </span>
                </div>
                <!-- Lookup File Type description in local messages.xml based on MIME Type.
         In the original DSpace, this would get resolved to an application via
         the Bitstream Registry, but we are constrained by the capabilities of METS
         and can't really pass that info through. -->
                <div>
                    <span class="bold">
                        <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-format</i18n:text>
                        <xsl:text>:</xsl:text>
                    </span>
                    <span>
                        <xsl:call-template name="getFileTypeDesc">
                            <xsl:with-param name="mimetype">
                                <xsl:value-of select="substring-before(@MIMETYPE,'/')"/>
                                <xsl:text>/</xsl:text>
                                <xsl:value-of select="substring-after(@MIMETYPE,'/')"/>
                            </xsl:with-param>
                        </xsl:call-template>
                    </span>
                </div>
                <!---->
                <!-- Display the contents of 'Description' only if bitstream contains a description -->
                <xsl:if test="mets:FLocat[@LOCTYPE='URL']/@xlink:label != ''">
                    <div>
                        <span class="bold">
                            <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-description</i18n:text>
                            <xsl:text>:</xsl:text>
                        </span>
                        <span>
                            <xsl:attribute name="title"><xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:label"/></xsl:attribute>
                            <!--<xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:label"/>-->
                            <xsl:value-of select="util:shortenString(mets:FLocat[@LOCTYPE='URL']/@xlink:label, 17, 5)"/>
                        </span>
                    </div>
                </xsl:if>
            </div>
            <div class="file-link" style="margin-top: 20px;">

                <xsl:choose>

                    <!-- <xsl:when test="@ADMID"> -->
                    <xsl:when test="contains(mets:FLocat[@LOCTYPE='URL']/@xlink:href,'isAllowed=n')">
                        <xsl:call-template name="view-restrict"/>
                    </xsl:when>
                    <xsl:otherwise>
                        <xsl:call-template name="view-open" />
                        <xsl:call-template name="display-admin-rights" />
                    </xsl:otherwise>
                </xsl:choose>
            </div>
        </div>
    </xsl:template>

    <xsl:template name="view-open">
      <xsl:variable name="nombre_fichero" select="mets:FLocat[@LOCTYPE='URL']/@xlink:title"/>
        <a class="ds-button-field btn-green" style="width: 100%;" >
            <xsl:attribute name="download">
                <xsl:text>reciigp_</xsl:text>
                <xsl:value-of select="$nombre_fichero"/>
            </xsl:attribute>
            <xsl:attribute name="href">
                <xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:href"/>
            </xsl:attribute>
            <i class="fas fa-download">&#160;</i> &#160;
            <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-viewOpen</i18n:text>
        </a>
    </xsl:template>   

    <xsl:template name="view-restrict">
        <a class="ds-button-field btn-red" style="width: 100%;" target="_blank">
            <xsl:choose>
                <!-- SE HA CONVENIDO USAR EL CAMPO dc.relation.uri PARA AGREGAR EL ENLACE DE LA REVISTA QUE POSEE LOS DERECHOS DE LA PUBLICACIÓN -->
                <xsl:when test="//dim:field[@element='relation' and @qualifier='uri'][1]">
                    <xsl:attribute name="href">
                        <xsl:value-of select="//dim:field[@element='relation' and @qualifier='uri'][1]"/>
                    </xsl:attribute>
                    <i class="fas fa-paper-plane">&#160;</i> &#160;                    
                    <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-viewJournal</i18n:text>
                </xsl:when>
                <!-- SI NO SE HA REGISTRADO EL dc.relation.uri -->
                <xsl:otherwise>
                    <xsl:attribute name="href">
                        <xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:href"/>
                    </xsl:attribute>
                    <i class="fas fa-copy">&#160;</i> &#160;                    
                    <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-viewRestricted</i18n:text>
                </xsl:otherwise>
            </xsl:choose>
            
        </a>
    </xsl:template> 

    <!-- FUNCIONALIDAD SOLICITADA POR LA BIBLIOTECARIA PARA FACILITAR LA IDENTIFICACIÓN DE ITEMS CON BITSTREAMS RESTRINGIDOS --> 
    <xsl:template name="display-admin-rights">
        <xsl:variable name="file_id" select="jstring:replaceAll(jstring:replaceAll(string(@ADMID), '_METSRIGHTS', ''), 'rightsMD_', '')"/>
        <xsl:variable name="rights_declaration" select="../../../mets:amdSec/mets:rightsMD[@ID = concat('rightsMD_', $file_id, '_METSRIGHTS')]/mets:mdWrap/mets:xmlData/rights:RightsDeclarationMD"/>
        <xsl:variable name="rights_context" select="$rights_declaration/rights:Context"/>
        <!--
          FILE_ID:
          <xsl:value-of select="$file_id"/>
          RIGHTS_DECLARATION:
          <xsl:value-of select="$rights_declaration"/>
          RIGHTS_CONTEXT:
          <xsl:value-of select="$rights_context/@CONTEXTCLASS"/>
        -->
        <xsl:variable name="users">
              <xsl:choose>
                  <xsl:when test="not ($rights_context)">
                     <xsl:text>administrators only</xsl:text>
                  </xsl:when>
                  <xsl:otherwise>
                    <xsl:choose>
                        <xsl:when test="$rights_context/@CONTEXTCLASS = 'REPOSITORY MGR'">
                            <xsl:text>administrators only</xsl:text>                          
                        </xsl:when>

                        <xsl:otherwise>
                            <xsl:for-each select="$rights_declaration/*">                                            
                              <xsl:value-of select="rights:UserName"/>
                              <xsl:choose>
                                  <xsl:when test="rights:UserName/@USERTYPE = 'GROUP'">
                                     <xsl:text> (group)</xsl:text>
                                  </xsl:when>
                                  <xsl:when test="rights:UserName/@USERTYPE = 'INDIVIDUAL'">
                                     <xsl:text> (individual)</xsl:text>
                                  </xsl:when>
                              </xsl:choose>
                              <xsl:if test="position() != last()">, </xsl:if> <!-- TODO fix ending comma -->
                            </xsl:for-each>
                        </xsl:otherwise>
                      
                    </xsl:choose>
                    
                  </xsl:otherwise>
              </xsl:choose>
        </xsl:variable> 

        <xsl:choose>
            <xsl:when test="$users != ''">
                <p class="bloqueado" style="text-align: center;"><i class="fas fa-lock-open">&#160;</i>
                    <xsl:value-of select="$users" />
                </p> 
            </xsl:when>
        </xsl:choose>

    </xsl:template>   


    <xsl:template name="display-rights">
                          
        <xsl:variable name="file_id" select="jstring:replaceAll(jstring:replaceAll(string(@ADMID), '_METSRIGHTS', ''), 'rightsMD_', '')"/>
        <xsl:variable name="rights_declaration" select="../../../mets:amdSec/mets:rightsMD[@ID = concat('rightsMD_', $file_id, '_METSRIGHTS')]/mets:mdWrap/mets:xmlData/rights:RightsDeclarationMD"/>
        <xsl:variable name="rights_context" select="$rights_declaration/rights:Context"/>

        <xsl:variable name="users">
              <xsl:choose>
                  <xsl:when test="not ($rights_context)">
                     <xsl:text>administrators only</xsl:text>
                  </xsl:when>
                  <xsl:otherwise>
                    <xsl:for-each select="$rights_declaration/*">                      
                      <xsl:value-of select="rights:UserName"/>
                      <xsl:choose>
                          <xsl:when test="rights:UserName/@USERTYPE = 'GROUP'">
                             <xsl:text> (group)</xsl:text>
                          </xsl:when>
                          <xsl:when test="rights:UserName/@USERTYPE = 'INDIVIDUAL'">
                             <xsl:text> (individual)</xsl:text>
                          </xsl:when>
                      </xsl:choose>
                      <xsl:if test="position() != last()">, </xsl:if> <!-- TODO fix ending comma -->
                    </xsl:for-each>
                  </xsl:otherwise>
              </xsl:choose>
        </xsl:variable>        

        <xsl:choose>
            <xsl:when test="(not ($rights_context/@CONTEXTCLASS = 'GENERAL PUBLIC') and ($rights_context/rights:Permissions/@DISPLAY = 'true')) or not ($rights_context)">                
              <!--
                <p style="color:red; font-weight: bold;"> Acceso Restringido </p> 
                <a href="{mets:FLocat[@LOCTYPE='URL']/@xlink:href}">                                     
                <p style="font-weight: bold"> Contáctanos</p>
                    <img width="64" height="64" src="{concat($theme-path,'/images/Crystal_Clear_action_lock3_64px.png')}" title="Read access available for {$users}"/>
                    icon source: http://commons.wikimedia.org/wiki/File:Crystal_Clear_action_lock3.png
                </a>
              -->
                <a class="ds-button-field btn-red" style="width: 100%;" target="_blank">
                    <xsl:choose>
                        <!-- SE HA CONVENIDO USAR EL CAMPO dc.relation.uri PARA AGREGAR EL ENLACE DE LA REVISTA QUE POSEE LOS DERECHOS DE LA PUBLICACIÓN -->
                        <xsl:when test="//dim:field[@element='relation' and @qualifier='uri'][1]">
                            <xsl:attribute name="href">
                                <xsl:value-of select="//dim:field[@element='relation' and @qualifier='uri'][1]"/>
                            </xsl:attribute>
                            <i class="fas fa-paper-plane">&#160;</i> &#160;                    
                            <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-viewJournal</i18n:text>
                        </xsl:when>
                        <!-- SI NO SE HA REGISTRADO EL dc.relation.uri -->
                        <xsl:otherwise>
                            <xsl:attribute name="href">
                                <xsl:value-of select="mets:FLocat[@LOCTYPE='URL']/@xlink:href"/>
                            </xsl:attribute>
                            <i class="fas fa-copy">&#160;</i> &#160;                    
                            <i18n:text>xmlui.dri2xhtml.METS-1.0.item-files-viewRestricted</i18n:text>
                        </xsl:otherwise>
                    </xsl:choose>
                    
                </a>
            </xsl:when>
            <xsl:otherwise>                
                <xsl:call-template name="view-open"/>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name='impact-altmetric'>
        <div id='impact-altmetric'>
            <!-- Altmetric.com -->
            <script type="text/javascript" src="{concat($scheme, 'd1bxh8uas1mnw7.cloudfront.net/assets/embed.js')}">&#xFEFF;
            </script>
            <div id='altmetric'
                 class='altmetric-embed'>
                <xsl:variable name='badge_type' select='confman:getProperty("altmetrics", "altmetric.badgeType")'/>
                <xsl:if test='boolean($badge_type)'>
                    <xsl:attribute name='data-badge-type'><xsl:value-of select='$badge_type'/></xsl:attribute>
                </xsl:if>

                <xsl:variable name='badge_popover' select='confman:getProperty("altmetrics", "altmetric.popover")'/>
                <xsl:if test='$badge_popover'>
                    <xsl:attribute name='data-badge-popover'><xsl:value-of select='$badge_popover'/></xsl:attribute>
                </xsl:if>

                <xsl:variable name='badge_details' select='confman:getProperty("altmetrics", "altmetric.details")'/>
                <xsl:if test='$badge_details'>
                    <xsl:attribute name='data-badge-details'><xsl:value-of select='$badge_details'/></xsl:attribute>
                </xsl:if>

                <xsl:variable name='no_score' select='confman:getProperty("altmetrics", "altmetric.noScore")'/>
                <xsl:if test='$no_score'>
                    <xsl:attribute name='data-no-score'><xsl:value-of select='$no_score'/></xsl:attribute>
                </xsl:if>

                <xsl:if test='confman:getProperty("altmetrics", "altmetric.hideNoMentions")'>
                    <xsl:attribute name='data-hide-no-mentions'>true</xsl:attribute>
                </xsl:if>

                <xsl:variable name='link_target' select='confman:getProperty("altmetrics", "altmetric.linkTarget")'/>
                <xsl:if test='$link_target'>
                    <xsl:attribute name='data-link-target'><xsl:value-of select='$link_target'/></xsl:attribute>
                </xsl:if>

                <xsl:choose>    <!-- data-doi data-handle data-arxiv-id data-pmid -->
                    <xsl:when test='$identifier_doi'>
                        <xsl:attribute name='data-doi'><xsl:value-of select='$identifier_doi'/></xsl:attribute>
                    </xsl:when>
                    <xsl:when test='$identifier_handle'>
                        <xsl:attribute name='data-handle'><xsl:value-of select='$identifier_handle'/></xsl:attribute>
                    </xsl:when>
                </xsl:choose>
                &#xFEFF;
            </div>
        </div>
    </xsl:template>

    <xsl:template name="impact-plumx">
        <div id="impact-plumx" style="clear:right">
            <!-- PlumX <http://plu.mx> -->
            <xsl:variable name="plumx_type" select="confman:getProperty('altmetrics', 'plumx.widget-type')"/>
            <xsl:variable name="plumx-script-url">
                <xsl:choose>
                    <xsl:when test="boolean($plumx_type)">
                        <xsl:value-of select="concat($scheme, 'd39af2mgp1pqhg.cloudfront.net/widget-', $plumx_type, '.js')"/>
                    </xsl:when>
                    <xsl:otherwise>
                        <xsl:value-of select="concat($scheme, 'd39af2mgp1pqhg.cloudfront.net/widget-popup.js')"/>
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:variable>

            <script type="text/javascript" src="{$plumx-script-url}">&#xFEFF;
            </script>

            <xsl:variable name="plumx-class">
                <xsl:choose>
                    <xsl:when test="boolean($plumx_type) and ($plumx_type != 'popup')">
                        <xsl:value-of select="concat('plumx-', $plumx_type)"/>
                    </xsl:when>
                    <xsl:otherwise>plumx-plum-print-popup</xsl:otherwise>
                </xsl:choose>
            </xsl:variable>

            <a>
                <xsl:attribute name="id">plumx</xsl:attribute>
                <xsl:attribute name="class"><xsl:value-of select="$plumx-class"/></xsl:attribute>
                <xsl:attribute name="href">https://plu.mx/pitt/a/?doi=<xsl:value-of select="$identifier_doi"/></xsl:attribute>

                <xsl:variable name="plumx_data-popup" select="confman:getProperty('altmetrics', 'plumx.data-popup')"/>
                <xsl:if test="$plumx_data-popup">
                    <xsl:attribute name="data-popup"><xsl:value-of select="$plumx_data-popup"/></xsl:attribute>
                </xsl:if>

                <xsl:if test="confman:getProperty('altmetrics', 'plumx.data-hide-when-empty')">
                    <xsl:attribute name="data-hide-when-empty">true</xsl:attribute>
                </xsl:if>

                <xsl:if test="confman:getProperty('altmetrics', 'plumx.data-hide-print')">
                    <xsl:attribute name="data-hide-print">true</xsl:attribute>
                </xsl:if>

                <xsl:variable name="plumx_data-orientation" select="confman:getProperty('altmetrics', 'plumx.data-orientation')"/>
                <xsl:if test="$plumx_data-orientation">
                    <xsl:attribute name="data-orientation"><xsl:value-of select="$plumx_data-orientation"/></xsl:attribute>
                </xsl:if>

                <xsl:variable name="plumx_data-width" select="confman:getProperty('altmetrics', 'plumx.data-width')"/>
                <xsl:if test="$plumx_data-width">
                    <xsl:attribute name="data-width"><xsl:value-of select="$plumx_data-width"/></xsl:attribute>
                </xsl:if>

                <xsl:if test="confman:getProperty('altmetrics', 'plumx.data-border')">
                    <xsl:attribute name="data-border">true</xsl:attribute>
                </xsl:if>
                &#xFEFF;
            </a>

        </div>
    </xsl:template>

</xsl:stylesheet>
