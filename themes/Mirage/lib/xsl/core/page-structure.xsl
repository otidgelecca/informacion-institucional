<!--

    The contents of this file are subject to the license and copyright
    detailed in the LICENSE and NOTICE files at the root of the source
    tree and available online at

    http://www.dspace.org/license/

-->
<!--
    Main structure of the page, determines where
    header, footer, body, navigation are structurally rendered.
    Rendering of the header, footer, trail and alerts

    Author: art.lowel at atmire.com
    Author: lieven.droogmans at atmire.com
    Author: ben at atmire.com
    Author: Alexey Maslov

-->

<xsl:stylesheet xmlns:i18n="http://apache.org/cocoon/i18n/2.1"
    xmlns:dri="http://di.tamu.edu/DRI/1.0/"
    xmlns:mets="http://www.loc.gov/METS/"
    xmlns:xlink="http://www.w3.org/TR/xlink/"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0"
    xmlns:dim="http://www.dspace.org/xmlns/dspace/dim"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    xmlns:mods="http://www.loc.gov/mods/v3"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
        xmlns:confman="org.dspace.core.ConfigurationManager"
    xmlns="http://www.w3.org/1999/xhtml"
    exclude-result-prefixes="i18n dri mets xlink xsl dim xhtml mods dc confman">

    <xsl:output indent="yes"/>

    <!--
        Requested Page URI. Some functions may alter behavior of processing depending if URI matches a pattern.
        Specifically, adding a static page will need to override the DRI, to directly add content.
    -->
    <xsl:variable name="request-uri" select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI']"/>
    
    <!--
        The starting point of any XSL processing is matching the root element. In DRI the root element is document,
        which contains a version attribute and three top level elements: body, options, meta (in that order).

        This template creates the html document, giving it a head and body. A title and the CSS style reference
        are placed in the html head, while the body is further split into several divs. The top-level div
        directly under html body is called "ds-main". It is further subdivided into:
            "ds-header"  - the header div containing title, subtitle, trail and other front matter
            "ds-body"    - the div containing all the content of the page; built from the contents of dri:body
            "ds-options" - the div with all the navigation and actions; built from the contents of dri:options
            "ds-footer"  - optional footer div, containing misc information

        The order in which the top level divisions appear may have some impact on the design of CSS and the
        final appearance of the DSpace page. While the layout of the DRI schema does favor the above div
        arrangement, nothing is preventing the designer from changing them around or adding new ones by
        overriding the dri:document template.
    -->
    <xsl:template match="dri:document">

        <html class="no-js">
            <!-- First of all, build the HTML head element -->
            <xsl:call-template name="buildHead"/>
            <!-- Then proceed to the body -->

            <!--paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/-->
            <xsl:text disable-output-escaping="yes">&lt;!--[if lt IE 7 ]&gt; &lt;body class="ie6"&gt; &lt;![endif]--&gt;
                &lt;!--[if IE 7 ]&gt;    &lt;body class="ie7"&gt; &lt;![endif]--&gt;
                &lt;!--[if IE 8 ]&gt;    &lt;body class="ie8"&gt; &lt;![endif]--&gt;
                &lt;!--[if IE 9 ]&gt;    &lt;body class="ie9"&gt; &lt;![endif]--&gt;
                &lt;!--[if (gt IE 9)|!(IE)]&gt;&lt;!--&gt;&lt;body&gt;&lt;!--&lt;![endif]--&gt;</xsl:text>

            <xsl:choose>
              <xsl:when test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='framing'][@qualifier='popup']">
                <xsl:apply-templates select="dri:body/*"/>
              </xsl:when>
                  <xsl:otherwise>
                    <a href="/htmlmap" class="hidden">&#160;</a>
                    <div id="ds-main">
                        <!--The header div, complete with title, subtitle and other junk-->
                        <xsl:call-template name="buildHeader"/>

                        <!--ds-content is a groups ds-body and the navigation together and used to put the clearfix on, center, etc.
                            ds-content-wrapper is necessary for IE6 to allow it to center the page content-->
                        <div id="ds-content">
                            <!--javascript-disabled warning, will be invisible if javascript is enabled-->
                            <div id="no-js-warning-wrapper" class="hidden">
                                <div id="no-js-warning">
                                    <div class="notice failure">
                                        <xsl:text>JavaScript is disabled for your browser. Some features of this site may not work without it.</xsl:text>
                                    </div>
                                </div>
                            </div>
                            <!--
                            Goes over the document tag's children elements: body, options, meta. The body template
                            generates the ds-body div that contains all the content. The options template generates
                            the ds-options div that contains the navigation and action options available to the
                            user. The meta element is ignored since its contents are not processed directly, but
                            instead referenced from the different points in the document. -->

                            <xsl:apply-templates select="*[name()!='options']"/>
                        </div>
                        <!--
                            The footer div, dropping whatever extra information is needed on the page. It will
                            most likely be something similar in structure to the currently given example. -->
                        <xsl:call-template name="buildFooter"/>

                    </div>

                </xsl:otherwise>
            </xsl:choose>
                <!-- Javascript at the bottom for fast page loading -->
              <xsl:call-template name="addJavascript"/>

            <xsl:text disable-output-escaping="yes">&lt;/body&gt;</xsl:text>
        </html>
    </xsl:template>

        <!-- The HTML head element contains references to CSS as well as embedded JavaScript code. Most of this
        information is either user-provided bits of post-processing (as in the case of the JavaScript), or
        references to stylesheets pulled directly from the pageMeta element. -->
    <xsl:template name="buildHead">
        <head>
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

            <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

            <!--  Mobile Viewport Fix
                  j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
            device-width : Occupy full width of the screen in its current orientation
            initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
            maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
            -->
            <!-- <meta property="og:url"           content="https://www.repositorio.igp.gob.pe" />
            <meta property="og:type"          content="website" />
            <meta property="og:title"         content="Repositorio Científico del IGP" />
            <meta property="og:description"   content="El Instituto Geofísico del Perú provee de un clima que promueve y valora la investigación y el desarrollo de nuevo conocimiento de utilidad para nuestro país.
            Esta plaforma es un servicio digital que brinda el Instituto Geosfísco del Perú en el marco de compartir información, producto de la investigación cientifica en el campo de la geofísica y ramas a fines." />-->
            <!-- <meta property="og:image"         content="http://portal.igp.gob.pe/sites/all/themes/simplecorp/tema_igp/images/igp.png" /> -->
            <meta name="theme-color" content="#38B5E6" />
            <link rel="shortcut icon">
                <xsl:attribute name="href">
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                    <xsl:text>/themes/</xsl:text>
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                    <xsl:text>/images/favicon.ico</xsl:text>
                </xsl:attribute>
            </link>
            <!--<link rel="stylesheet" >
                <xsl:attribute name="href">
                    <xsl:text>https://use.fontawesome.com/releases/v5.1.0/css/all.css</xsl:text>
                </xsl:attribute>
                <xsl:attribute name="crossorigin">
                    <xsl:text>anonymous</xsl:text>
                </xsl:attribute>
                <xsl:attribute name="integrity">
                    <xsl:text>sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt</xsl:text>
                </xsl:attribute>
            </link>-->
            <link rel="apple-touch-icon">
                <xsl:attribute name="href">
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                    <xsl:text>/themes/</xsl:text>
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                    <xsl:text>/images/favicon.ico</xsl:text>
                </xsl:attribute>
            </link>

            <meta name="Generator">
              <xsl:attribute name="content">
                <xsl:text>DSpace</xsl:text>
                <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='dspace'][@qualifier='version']">
                  <xsl:text> </xsl:text>
                  <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='dspace'][@qualifier='version']"/>
                </xsl:if>
              </xsl:attribute>
            </meta>
            <!-- Add stylesheets -->
            <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='stylesheet']">
                <link rel="stylesheet" type="text/css">
                    <xsl:attribute name="media">
                        <xsl:value-of select="@qualifier"/>
                    </xsl:attribute>
                    <xsl:attribute name="href">
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                        <xsl:text>/themes/</xsl:text>
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                        <xsl:text>/</xsl:text>
                        <xsl:value-of select="."/>
                    </xsl:attribute>
                </link>
            </xsl:for-each>

            <!-- Add syndication feeds -->
            <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='feed']">
                <link rel="alternate" type="application">
                    <xsl:attribute name="type">
                        <xsl:text>application/</xsl:text>
                        <xsl:value-of select="@qualifier"/>
                    </xsl:attribute>
                    <xsl:attribute name="href">
                        <xsl:value-of select="."/>
                    </xsl:attribute>
                </link>
            </xsl:for-each>

            <!--  Add OpenSearch auto-discovery link -->
            <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='opensearch'][@qualifier='shortName']">
                <link rel="search" type="application/opensearchdescription+xml">
                    <xsl:attribute name="href">
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='scheme']"/>
                        <xsl:text>://</xsl:text>
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='serverName']"/>
                        <xsl:text>:</xsl:text>
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='serverPort']"/>
                        <xsl:value-of select="$context-path"/>
                        <xsl:text>/</xsl:text>
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='opensearch'][@qualifier='autolink']"/>
                    </xsl:attribute>
                    <xsl:attribute name="title" >
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='opensearch'][@qualifier='shortName']"/>
                    </xsl:attribute>
                </link>
            </xsl:if>

            <!-- The following javascript removes the default text of empty text areas when they are focused on or submitted -->
            <!-- There is also javascript to disable submitting a form when the 'enter' key is pressed. -->
                        <script type="text/javascript">
                                //Clear default text of empty text areas on focus
                                function tFocus(element)
                                {
                                        if (element.value == '<i18n:text>xmlui.dri2xhtml.default.textarea.value</i18n:text>'){element.value='';}
                                }
                                //Clear default text of empty text areas on submit
                                function tSubmit(form)
                                {
                                        var defaultedElements = document.getElementsByTagName("textarea");
                                        for (var i=0; i != defaultedElements.length; i++){
                                                if (defaultedElements[i].value == '<i18n:text>xmlui.dri2xhtml.default.textarea.value</i18n:text>'){
                                                        defaultedElements[i].value='';}}
                                }
                                //Disable pressing 'enter' key to submit a form (otherwise pressing 'enter' causes a submission to start over)
                                function disableEnterKey(e)
                                {
                                     var key;

                                     if(window.event)
                                          key = window.event.keyCode;     //Internet Explorer
                                     else
                                          key = e.which;     //Firefox and Netscape

                                     if(key == 13)  //if "Enter" pressed, then disable!
                                          return false;
                                     else
                                          return true;
                                }

                                function FnArray()
                                {
                                    this.funcs = new Array;
                                }

                                FnArray.prototype.add = function(f)
                                {
                                    if( typeof f!= "function" )
                                    {
                                        f = new Function(f);
                                    }
                                    this.funcs[this.funcs.length] = f;
                                };

                                FnArray.prototype.execute = function()
                                {
                                    for( var i=0; i <xsl:text disable-output-escaping="yes">&lt;</xsl:text> this.funcs.length; i++ )
                                    {
                                        this.funcs[i]();
                                    }
                                };

                                var runAfterJSImports = new FnArray();
            </script>

            <!-- Modernizr enables HTML5 elements & feature detects -->
            <script type="text/javascript">
                <xsl:attribute name="src">
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                    <xsl:text>/themes/</xsl:text>
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                    <xsl:text>/lib/js/modernizr-1.7.min.js</xsl:text>
                </xsl:attribute>&#160;</script>

            <!-- Add the title in -->
            <xsl:variable name="page_title" select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='title']" />
            <title>
                <xsl:choose>
                    <xsl:when test="starts-with($request-uri, 'page/about')">
                        <i18n:text>xmlui.dri2xhtml.AboutPage.title</i18n:text>
                    </xsl:when>
                    <xsl:when test="not($page_title)">
                        <i18n:text>xmlui.dri2xhtml.METS-1.0.no-title</i18n:text>
                    </xsl:when>
                    <xsl:when test="$page_title = ''">
                        <i18n:text>xmlui.dri2xhtml.METS-1.0.no-title</i18n:text>
                    </xsl:when>
                    <xsl:otherwise>
                            <xsl:copy-of select="$page_title/node()" />
                    </xsl:otherwise>
                </xsl:choose>
            </title>

            <!-- Head metadata in item pages -->
             
            <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='xhtml_head_item']">
                <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='xhtml_head_item']"
                              disable-output-escaping="yes"/>
            </xsl:if> 
            

            <!-- <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='xhtml_head_item']">
                <xsl:variable name="dcmetatagsInit" >
                    <xsl:value-of select="substring-before/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='xhtml_head_item']"
                                  disable-output-escaping="yes"/>
                </xsl:variable>

                <xsl:variable name="dcmetatagsNoBegDel" >
                    <call-template name="replaceAllString">
                        <xsl:with-param name="rpText" select="$dcmetatagsInit" />
                        <xsl:with-param name="rpTarget" select="'==$'" />
                        <xsl:with-param name="rpString" select="' '" />
                    </call-template>
                </xsl:variable>

                <xsl:variable name="dcmetatags" >
                    <call-template name="replaceAllString">
                        <xsl:with-param name="rpText" select="$dcmetatagsNoBegDel" />
                        <xsl:with-param name="rpTarget" select="'$=='" />
                        <xsl:with-param name="rpString" select="' '" />
                    </call-template>
                </xsl:variable>
                
                <xsl:value-of select="dcmetatags" />
            </xsl:if> -->

            <!-- Add all Google Scholar Metadata values -->
            <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[substring(@element, 1, 9) = 'citation_']">
                <meta name="{@element}" content="{.}"></meta>
            </xsl:for-each>
            <!--<xsl:for-each select="//mets:dmdSec/mets:mdWrap[@OTHERMDTYPE='DIM']/mets:xmlData/dim:dim/dim:field[@element='contributor']">
                <meta name="citation_author" content="{.}"></meta>
            </xsl:for-each> -->
            
            <!-- Add Twitter Metadata values -->
            <meta name="twitter:text:title">
               <xsl:attribute name="content">
                   <xsl:choose>
                        <xsl:when test="starts-with($request-uri, 'page/about')">
                            <xsl:text>Acerca del Repositorio Científico IGP</xsl:text>
                        </xsl:when>
                        <xsl:when test="not($page_title)">
                            <i18n:text>Repositorio Científico IGP</i18n:text>
                        </xsl:when>
                        <xsl:when test="$request-uri = ''">
                            <i18n:text>Repositorio Científico IGP</i18n:text>
                        </xsl:when>
                        <xsl:otherwise>
                            <xsl:copy-of select="$page_title/node()" />
                        </xsl:otherwise>
                    </xsl:choose>
               </xsl:attribute>
           </meta>

           <meta property="twitter:image">
               <xsl:attribute name="content">                    
                    <xsl:choose>
                        <xsl:when test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url']">
                            <xsl:variable name="mihandle" select="substring-after($request-uri, 'handle/')" />
                            <!-- <xsl:value-of select="concat(
                                substring-before(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url'], $mihandle),
                                /dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'],
                                substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url'], concat($mihandle, '/1')),
                                '.jpg')"/> -->
                            <xsl:value-of select="concat('https:', substring-after(concat(
                                substring-before(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url'], $mihandle),
                                /dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'],
                                substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url'], concat($mihandle, '/1')),
                                '.jpg'), 'http:'))"/>
                            
                        </xsl:when>  
                        <xsl:otherwise>
                            <!--<xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='scheme']"/>-->
                            <xsl:text>http</xsl:text>
                            <xsl:text>://</xsl:text>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='serverName']"/>
                            <xsl:value-of select="$context-path"/>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                            <xsl:text>/themes/</xsl:text>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                            <xsl:text>/images/logo-igp-corto.png</xsl:text>
                        </xsl:otherwise>                         
                    </xsl:choose>                     
               </xsl:attribute>
           </meta>
           <meta name="twitter:card" content="summary"></meta>
           <meta name="twitter:site" content="@igp_peru"></meta>

            <!-- Add Facebook Metadata values -->
            <meta property="og:locale" content="es_la" />
            <meta property="site_name" content="Repositorio Científico IGP" />
            <meta property="og:type">
               <xsl:attribute name="content">
                   <xsl:choose>
                        <xsl:when test="starts-with($request-uri, 'page/about')">
                            <xsl:text>website</xsl:text>
                        </xsl:when>
                        <xsl:when test="not($page_title)">
                            <i18n:text>website</i18n:text>
                        </xsl:when>
                        <xsl:when test="$request-uri = ''">
                            <i18n:text>website</i18n:text>
                        </xsl:when>
                        <xsl:otherwise>article</xsl:otherwise>
                    </xsl:choose>
               </xsl:attribute>
            </meta>
            <meta property="article:publisher" content="https://www.facebook.com/igp.peru"></meta>
           
           <meta property="og:url">
                <xsl:attribute name="content">                   
                    <!-- <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='scheme']"/> -->
                    <xsl:text>https</xsl:text>
                    <xsl:text>://</xsl:text>
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='serverName']"/>
                    <xsl:value-of select="$context-path"/>
                    <xsl:text>/</xsl:text>
                    <xsl:value-of select="$request-uri" />
                </xsl:attribute>
           </meta>
           <meta property="og:title">
               <xsl:attribute name="content">
                   <xsl:choose>
                        <xsl:when test="starts-with($request-uri, 'page/about')">
                            <xsl:text>Acerca del Repositorio Científico IGP</xsl:text>
                        </xsl:when>
                        <xsl:when test="not($page_title)">
                            <i18n:text>Repositorio Científico IGP</i18n:text>
                        </xsl:when>
                        <xsl:when test="$request-uri = ''">
                            <i18n:text>Repositorio Científico IGP</i18n:text>
                        </xsl:when>
                        <xsl:otherwise>
                                <xsl:copy-of select="$page_title/node()" />
                        </xsl:otherwise>
                    </xsl:choose>
               </xsl:attribute>
           </meta>
            <meta property="og:description">
                <xsl:attribute name="content">
                   <xsl:choose>
                        <xsl:when test="starts-with($request-uri, 'page/about')">
                            <i18n:text>El Repositorio Científico del Instituto Geofísico del Perú recopila, almacena, preserva y difunde la producción científica y académica producto de la investigación en el campo del conocimiento geofísico y ciencias afines. Asimismo, alberga documentos de la actividad institucional.</i18n:text>
                        </xsl:when>
                        <xsl:when test="not($page_title)">
                            <i18n:text>El Repositorio Científico del Instituto Geofísico del Perú recopila, almacena, preserva y difunde la producción científica y académica producto de la investigación en el campo del conocimiento geofísico y ciencias afines. Asimismo, alberga documentos de la actividad institucional.</i18n:text>
                        </xsl:when>
                        <xsl:when test="$request-uri = ''">
                            <i18n:text>El Repositorio Científico del Instituto Geofísico del Perú recopila, almacena, preserva y difunde la producción científica y académica producto de la investigación en el campo del conocimiento geofísico y ciencias afines. Asimismo, alberga documentos de la actividad institucional.</i18n:text>
                        </xsl:when>
                        
                        <xsl:otherwise>
                                <xsl:variable name="ogDescription" select="substring-before(substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'xhtml_head_item'], '&#60;meta name=&#34;DCTERMS.abstract&#34; content=&#34;&amp;quot;'), '&amp;quot;&#46;&#34; xml:lang')" />
                                <xsl:choose>
                                    <xsl:when test="$ogDescription">
                                        <xsl:value-of select="$ogDescription" disable-output-escaping="yes"/>  
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <xsl:value-of select="substring-before(substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'xhtml_head_item'], '&#60;meta name=&#34;DCTERMS.abstract&#34; content=&#34;'), '&#34; xml:lang')" disable-output-escaping="yes"/>  
                                    </xsl:otherwise>
                                </xsl:choose>                                                              
                        </xsl:otherwise>
                    </xsl:choose>
                </xsl:attribute>
            </meta>
            <meta property="og:image">
               <xsl:attribute name="content">
                    
                    <xsl:choose>
                        <xsl:when test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url']">
                            
                            <xsl:variable name="mihandle" select="substring-after($request-uri, 'handle/')" />
                            <xsl:variable name="noencodinguri" select="concat('https:', substring-after(concat(
                                substring-before(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url'], $mihandle),
                                /dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'],
                                substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element = 'citation_pdf_url'], concat($mihandle, '/1')),
                                '.jpg'), 'http:'))"/>
                            <xsl:call-template name="uriencodingxslt1">
                                <xsl:with-param name="txt" select="$noencodinguri" />
                            </xsl:call-template>
                            
                        </xsl:when>  
                        <xsl:otherwise>
                            <!--<xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='scheme']"/> -->
                            <xsl:text>http</xsl:text>                            
                            <xsl:text>://</xsl:text>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='serverName']"/>
                            <xsl:value-of select="$context-path"/>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                            <xsl:text>/themes/</xsl:text>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                            <xsl:text>/images/logo-igp-corto.png</xsl:text>
                        </xsl:otherwise>                         
                    </xsl:choose>                     
               </xsl:attribute>
           </meta>
            <meta property="og:image:width" content="200"></meta>
            <meta property="og:image:height" content="280"></meta>
            
        
            <!-- Add MathJAX JS library to render scientific formulas-->
            <xsl:if test="confman:getProperty('webui.browse.render-scientific-formulas') = 'true'">
                <script type="text/x-mathjax-config">
                    MathJax.Hub.Config({
                      tex2jax: {
                        inlineMath: [['$','$'], ['\\(','\\)']],
                        ignoreClass: "detail-field-data|detailtable|exception"
                      },
                      TeX: {
                        Macros: {
                          AA: '{\\mathring A}'
                        }
                      }
                    });
                </script>
                <script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">&#160;</script>
            </xsl:if>

        </head>
    </xsl:template>
    <xsl:template name="uriencodingxslt1">
        <xsl:param name="txt"/>
        <xsl:choose>
            <xsl:when test="contains($txt, '%c3%b1')">
                <xsl:call-template name="uriencodingxslt1">
                    <xsl:with-param name="txt" select="concat(substring-before($txt, '%c3%b1'), 'ñ', substring-after($txt, '%c3%b1'))" />
                </xsl:call-template>
            </xsl:when>
            <xsl:when test="contains($txt, '%c3%a1')">
                <xsl:call-template name="uriencodingxslt1">
                    <xsl:with-param name="txt" select="concat(substring-before($txt, '%c3%a1'), 'á', substring-after($txt, '%c3%a1'))" />
                </xsl:call-template>
            </xsl:when>
            <xsl:when test="contains($txt, '%c3%a9')">
                <xsl:call-template name="uriencodingxslt1">
                    <xsl:with-param name="txt" select="concat(substring-before($txt, '%c3%a9'), 'é', substring-after($txt, '%c3%a9'))" />
                </xsl:call-template>
            </xsl:when>
            <xsl:when test="contains($txt, '%c3%ad')">
                <xsl:call-template name="uriencodingxslt1">
                    <xsl:with-param name="txt" select="concat(substring-before($txt, '%c3%ad'), 'í', substring-after($txt, '%c3%ad'))" />
                </xsl:call-template>
            </xsl:when>
            <xsl:when test="contains($txt, '%c3%b3')">
                <xsl:call-template name="uriencodingxslt1">
                    <xsl:with-param name="txt" select="concat(substring-before($txt, '%c3%b3'), 'ó', substring-after($txt, '%c3%b3'))" />
                </xsl:call-template>
            </xsl:when>
            <xsl:when test="contains($txt, '%c3%ba')">
                <xsl:call-template name="uriencodingxslt1">
                    <xsl:with-param name="txt" select="concat(substring-before($txt, '%c3%ba'), 'ú', substring-after($txt, '%c3%ba'))" />
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="$txt" />
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>


    <!-- The header (distinct from the HTML head element) contains the title, subtitle, login box and various
        placeholders for header images -->
    <xsl:template name="buildHeader">
        <div id="ds-header">
            <div class="nav-sec">
                <div class="container">

                    <div class="nav-social">
                        <a href="https://www.facebook.com/igp.peru"><span class="fab fa-facebook-f"></span></a> <!-- Facebook -->
                        <a href="https://twitter.com/igp_peru"><span class="fab fa-twitter"></span></a> <!-- Twitter -->
                        <a href="https://www.linkedin.com/company/igpperu/"><span class="fab fa-linkedin-in"></span></a> <!-- Linkedin -->
                        <a href="https://www.instagram.com/igp.peru"><span class="fab fa-instagram"></span></a> <!-- Instagram -->
                    </div>
                    <ul class="nav-contacto">
                        <li>
                            <!-- Telefono -->
                            <span><i class="fa fa-phone">&#160;</i>(511) 3172300</span>
                        </li>
                        <li>
                            <a href="mailto:reci@igp.gob.pe">
                            <span><i class="fa fa-envelope">&#160;</i>reci@igp.gob.pe</span>
                            </a> <!-- Correo -->

                        </li>
                        <li>

                        <!-- USUARIO EN SESION -->
                            <xsl:choose>
                                <xsl:when test="/dri:document/dri:meta/dri:userMeta/@authenticated = 'yes'">
                                    <xsl:attribute name="class">dropdown</xsl:attribute>
                                    <a >
                                        <xsl:attribute name="href"><xsl:text>#!</xsl:text></xsl:attribute>
                                        <xsl:attribute name="class"><xsl:text>dropdown-toggle</xsl:text></xsl:attribute>
                                        <xsl:attribute name="data-toggle"><xsl:text>dropdown</xsl:text></xsl:attribute>
                                        <xsl:attribute name="role"><xsl:text>button</xsl:text></xsl:attribute>
                                        <xsl:attribute name="aria-haspopup"><xsl:text>true</xsl:text></xsl:attribute>
                                        <xsl:attribute name="aria-expanded"><xsl:text>false</xsl:text></xsl:attribute>
                                        <span>
                                            <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                            dri:metadata[@element='identifier' and @qualifier='firstName']"/>
                                            <!-- 
                                            <xsl:text> </xsl:text>
                                            <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                            dri:metadata[@element='identifier' and @qualifier='lastName']"/>
                                            <i class="caret">&#160;</i>
                                            -->
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a>
                                                <xsl:attribute name="href">
                                                    <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                                        dri:metadata[@element='identifier' and @qualifier='url']"/>
                                                </xsl:attribute>
                                                <i18n:text>xmlui.dri2xhtml.structural.profile</i18n:text>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <xsl:attribute name="href">
                                                    <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                                        dri:metadata[@element='identifier' and @qualifier='logoutURL']"/>
                                                </xsl:attribute>
                                                <i18n:text>xmlui.dri2xhtml.structural.logout</i18n:text>
                                            </a>
                                        </li>
                                    </ul>
<!--
                                    <a>
                                        <xsl:attribute name="href">
                                            <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                                dri:metadata[@element='identifier' and @qualifier='url']"/>
                                        </xsl:attribute>
                                        <i18n:text>xmlui.dri2xhtml.structural.profile</i18n:text>
                                        <span class="fas fa-user">&#160;</span>
                                        <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                            dri:metadata[@element='identifier' and @qualifier='firstName']"/>
                                        <xsl:text> </xsl:text>
                                        <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                            dri:metadata[@element='identifier' and @qualifier='lastName']"/>
                                    </a>
                                    <xsl:text> | </xsl:text>
                                    <a>
                                        <xsl:attribute name="href">
                                            <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                                dri:metadata[@element='identifier' and @qualifier='logoutURL']"/>
                                        </xsl:attribute>
                                        <i18n:text>xmlui.dri2xhtml.structural.logout</i18n:text>
                                    </a>-->
                                </xsl:when>
                                <xsl:otherwise>
                                    <a>
                                        <xsl:attribute name="href">
                                            <xsl:value-of select="/dri:document/dri:meta/dri:userMeta/
                                                dri:metadata[@element='identifier' and @qualifier='loginURL']"/>
                                        </xsl:attribute>
                                        <span><i class="fas fa-user">&#160;</i><i18n:text>xmlui.dri2xhtml.structural.login</i18n:text></span>
                                    </a>
                                </xsl:otherwise>
                            </xsl:choose>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="nav-main">
                <div class="container">
                   <div class="col-logo-left">
                        
                        <span onclick="actionSidebar()" class="sbutton">
                            <i class="fas fa-bars">&#160;</i>
                        </span>

                        <img >
                            <xsl:attribute name="class">
                                <xsl:text>logo-minan</xsl:text>
                            </xsl:attribute>
                            <xsl:attribute name="src">
                                <xsl:text>/themes/Mirage/images/logo-minan-igp-2012.png</xsl:text>
                            </xsl:attribute>
                        </img>

                        <a class="logo-igp" href="http://www.igp.gob.pe">
                            <img  >
                                <xsl:attribute name="src">
                                    <xsl:text>https://portal.igp.gob.pe/sites/default/files/logos/logo-igp-min.png</xsl:text>
                                </xsl:attribute>
                            </img>
                        </a>

                        

                        <!-- img>
                            <xsl:attribute name="class">
                                <xsl:text>logo-peru-primero</xsl:text>
                            </xsl:attribute>
                            <xsl:attribute name="src">
                                <xsl:text>/themes/Mirage/images/el-peru-primero-logo.png</xsl:text>
                            </xsl:attribute>
                        </img> -->

                    </div>

                    <nav class="col-logo-right">
                        <span class="sbuttonaux" onclick="actionTopbar()">
                            <i class="fas fa-ellipsis-v">&#160;</i>
                        </span>
                        <ul class="nav-main-li">
                            
                            <xsl:choose>
                                <xsl:when test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request' and @qualifier='URI'] = ''">
                                    <li><a><xsl:attribute name="href"><xsl:text>&#47;</xsl:text></xsl:attribute><span class="active">Inicio</span></a></li>
                                </xsl:when>
                                <xsl:otherwise>
                                    <li><a><xsl:attribute name="href"><xsl:text>&#47;</xsl:text></xsl:attribute><span>Inicio</span></a></li>
                                </xsl:otherwise>
                            </xsl:choose>

                            <xsl:choose>
                                <xsl:when test="starts-with($request-uri, 'page/about')">
                                    <li><a><xsl:attribute name="href"><xsl:text>/page/about</xsl:text></xsl:attribute><span class="active">Acerca de</span></a></li>
                                </xsl:when>
                                <xsl:otherwise>
                                    <li><a><xsl:attribute name="href"><xsl:text>/page/about</xsl:text></xsl:attribute><span>Acerca de</span></a></li>
                                </xsl:otherwise>
                            </xsl:choose>
                            <!--
                            <li>
                                <a>
                                    <xsl:attribute name="href"><xsl:text>/page/about</xsl:text></xsl:attribute>
                                    <span>Acerca de</span>
                                </a>
                            </li>
                            -->
                            <!-- <li class="dropdown">
                                <a>
                                    <xsl:attribute name="href"><xsl:text>#!</xsl:text></xsl:attribute>
                                    <xsl:attribute name="class"><xsl:text>dropdown-toggle</xsl:text></xsl:attribute>
                                    <xsl:attribute name="data-toggle"><xsl:text>dropdown</xsl:text></xsl:attribute>
                                    <xsl:attribute name="role"><xsl:text>button</xsl:text></xsl:attribute>
                                    <xsl:attribute name="aria-haspopup"><xsl:text>true</xsl:text></xsl:attribute>
                                    <xsl:attribute name="aria-expanded"><xsl:text>false</xsl:text></xsl:attribute>
                                    <span>Políticas y Privacidad <i class="caret">&#160;</i></span>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a><xsl:attribute name="href"><xsl:text>#!</xsl:text></xsl:attribute>Política 1</a></li>
                                    <li><a><xsl:attribute name="href"><xsl:text>#!</xsl:text></xsl:attribute>Política 2</a></li>
                                </ul>
                            </li> -->
                            <li><a target="_blank"><xsl:attribute name="href"><xsl:text>http://biblioteca.igp.gob.pe</xsl:text></xsl:attribute><span>Biblioteca</span></a></li>
                            <li><a><xsl:attribute name="href"><xsl:text>#!</xsl:text></xsl:attribute><span>Ayuda</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </xsl:template>
    <!-- 
    <xsl:template name="replaceAllString">
        <xsl:parameter name="rpText" /> 
        <xsl:parameter name="rpString" />
        <xsl:choose>
            <xsl:when test="contains(rmString, rmSubstring)">
                <xsl:call-template name="replaceAllString" >
                    <xsl:with-param name="rpText" select="concat(substring-before($rpText, $rpTarget), $rpString, substring-after($rpText, $rpTarget))" />
                    <xsl:with-param name="rpTarget" select="$rpTarget" />
                    <xsl:with-param name="rpString" select="$rpString" />
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="$rpText" />
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
    -->

    <xsl:template name="buildNews">
        <xsl:if test="count(*[@n='news'])!=0">
            <div id="ds-news">
                <div class="fondo-news">
                    <div class="container" >
                        <h1 style="display: flex; align-items: center;">
                            <img src="/themes/Mirage/images/icono_repositorio.png" style="height: 36px">&#160;</img>
                            <span class="name"><i18n:text>xmlui.general.dspace_home</i18n:text></span>
                            <span class="alternative_name"><i18n:text>RECI - IGP</i18n:text></span>
                        </h1>
                        <xsl:apply-templates select="*[@n='news']"/>

                    </div>
                </div>
            </div>
        </xsl:if>
    </xsl:template>


    <xsl:template name="buildSearchBox">
        <!-- <xsl:if test="not(contains(/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'], 'discover'))"> -->
        <!-- <xsl:if test="not(contains(/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI']))"> -->
            <div id="ds-searchbox">
                <!-- Cambio la etiqueta h1 porque esta reservada para el titulo -->
                <!-- En realidad mejor comento el titulo , la maqueta no lleva estooo xD-->
                <!--
                <h5 id="ds-search-option-head" class="ds-option-set-head">
                    <i18n:text>xmlui.dri2xhtml.structural.search</i18n:text>
                </h5>
                -->
                <!-- INSERT INTO `Puesto`(`PuestoNombre`, `Bestado`) VALUES ("Asistente de Investigación",'1'); -->
                <div >
                    <!-- PARA ADAPTAR EL ANCHO DE LOS COMPONENTES DE SEARCHBOX (CAJA DE TEXTO, COMBOBOX, BOTON BUSCAR)-->
                    <xsl:attribute name="class">
                        <xsl:choose>
                            <xsl:when test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='container']">
                                <xsl:text>container tripleparent</xsl:text>
                            </xsl:when>
                            <xsl:when test="//dri:div[@id='aspect.discovery.SimpleSearch.div.discovery-search-box']">
                                <xsl:text>container tripleparent</xsl:text>
                            </xsl:when>
                            <xsl:otherwise>
                                <xsl:text>container</xsl:text>
                            </xsl:otherwise>
                        </xsl:choose>
                    </xsl:attribute>

                    <!--
                    <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='container']">
                        <xsl:attribute name="class">
                            <xsl:text>container tripleparent</xsl:text>
                        </xsl:attribute>
                    </xsl:if>
                    -->

                    <div id="ds-search-option" class="ds-option-set">
                        <!-- The form, complete with a text box and a button, all built from attributes referenced
                        from under pageMeta. -->
                        <xsl:choose>
                            <!-- <xsl:when test="not(contains(/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'], 'discover'))"> -->
                            <xsl:when test="not(contains($request-uri, 'discover'))">
                                <form id="ds-search-form" method="post">
                                    <xsl:attribute name="action">
                                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath']"/>
                                        <xsl:value-of
                                                select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='search'][@qualifier='simpleURL']"/>
                                    </xsl:attribute>
                                    <fieldset>
                                        <div>
                                            <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='container']">
                                                <xsl:attribute name="class">
                                                    <xsl:text>triple</xsl:text>
                                                </xsl:attribute>
                                            </xsl:if>

                                            <input class="ds-text-field form-control" type="text">
                                                <xsl:attribute name="name">
                                                    <xsl:value-of
                                                            select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='search'][@qualifier='queryField']"/>
                                                </xsl:attribute>
                                                <xsl:attribute name="placeholder">
                                                    <xsl:text>Buscar</xsl:text>
                                                </xsl:attribute>
                                            </input>
                                            <!--- COMBOBOX CAMPOS -->
                                            <!-- RADIO BUTTONS "EN TODO EL REPO" O "EN ESTA COMUNIDAD"-->
                                            
                                            <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='container']">
                                                <select class="boton-select form-control">
                                                    <option selected="true">
                                                        <xsl:attribute name="value">
                                                            <xsl:value-of
                                                                    select="substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='container'],':')"/>
                                                        </xsl:attribute>
                                                        <i18n:text>xmlui.dri2xhtml.structural.search</i18n:text>
                                                    </option>
                                                    <option>
                                                        <xsl:attribute name="value">
                                                            <xsl:value-of
                                                                    select="substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='container'],':')"/>
                                                        </xsl:attribute>
                                                        <xsl:choose>
                                                            <xsl:when
                                                                    test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='focus'][@qualifier='containerType']/text() = 'type:community'">
                                                                <i18n:text>xmlui.dri2xhtml.structural.search-in-community</i18n:text>
                                                            </xsl:when>
                                                            <xsl:otherwise>
                                                                <i18n:text>xmlui.dri2xhtml.structural.search-in-collection</i18n:text>
                                                            </xsl:otherwise>
                                                        </xsl:choose>
                                                    </option>
                                                </select>                                                
                                            </xsl:if>


                                            <!-- BOTON BUSCAR (LUPA) -->                                        
                                            <button class="btn-lupa ds-button-field" name="submit" type="submit" i18n:attr="value"
                                                value="xmlui.general.go">
                                                <xsl:attribute name="onclick">
                                                <xsl:text>
                                                    var radio = document.getElementById(&quot;ds-search-form-scope-container&quot;);
                                                    if (radio != undefined &amp;&amp; radio.checked)
                                                    {
                                                    var form = document.getElementById(&quot;ds-search-form&quot;);
                                                    form.action=
                                                </xsl:text>
                                                    <xsl:text>&quot;</xsl:text>
                                                    <xsl:value-of
                                                            select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath']"/>
                                                    <xsl:text>/handle/&quot; + radio.value + &quot;</xsl:text>
                                                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='search'][@qualifier='simpleURL']"/>
                                                    <xsl:text>&quot; ; </xsl:text>
                                                <xsl:text>
                                                    }
                                                </xsl:text>
                                                </xsl:attribute>
                                                <span class="fas fa-search">&#160;</span>
                                            </button>
                                        </div>                                      
                                    </fieldset>
                                </form>
                            </xsl:when>
                            <xsl:otherwise>
                                <xsl:copy>
                                    <xsl:apply-templates select="*/dri:div[@id='aspect.discovery.SimpleSearch.div.discovery-search-box']/*[@id='aspect.discovery.SimpleSearch.div.general-query']" />
                                </xsl:copy>
                                <!-- xmlui.ArtifactBrowser.AbstractSearch.all_of_dspace
                                Ciencias de la Atmósfera e HidrósferaCiencias de la Tierra SólidaCiencias del Geoespacio y AstronomíaGeofísica y SociedadInstitucionalTesis
                                xmlui.general.go
                                xmlui.Discovery.AbstractSearch.filters.display
                                xmlui.Discovery.SimpleSearch.filter_head
                                xmlui.Discovery.SimpleSearch.filter_help
                                xmlui.ArtifactBrowser.SimpleSearch.filter.title
                                xmlui.ArtifactBrowser.SimpleSearch.filter.author
                                xmlui.ArtifactBrowser.SimpleSearch.filter.subject
                                xmlui.ArtifactBrowser.SimpleSearch.filter.dateIssued
                                xmlui.Discovery.SimpleSearch.filter.contains
                                xmlui.Discovery.SimpleSearch.filter.equals
                                xmlui.Discovery.SimpleSearch.filter.authority
                                xmlui.Discovery.SimpleSearch.filter.notcontains
                                xmlui.Discovery.SimpleSearch.filter.notequals
                                xmlui.Discovery.SimpleSearch.filter.notauthority
                                xmlui.Discovery.AbstractSearch.filters.controls.add-filter
                                xmlui.Discovery.AbstractSearch.filters.controls.remove-filter
                                xmlui.Discovery.AbstractSearch.filters.controls.apply-filters -->
                                <!-- <xsl:text>Hola Bebe</xsl:text> -->
                                <!-- <xsl:apply-templates select="dri:div[@id='aspect.discovery.SimpleSearch.div.discovery-search-box']/node()" /> -->
                            </xsl:otherwise>
                        </xsl:choose>

                        <!--Only add if the advanced search url is different from the simple search-->
                        <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='search'][@qualifier='advancedURL'] != /dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='search'][@qualifier='simpleURL']">
                            <!-- The "Advanced search" link, to be perched underneath the search box -->
                            <a>
                                <xsl:attribute name="href">
                                    <xsl:value-of
                                            select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='search'][@qualifier='advancedURL']"/>
                                </xsl:attribute>
                                <i18n:text>xmlui.dri2xhtml.structural.search-advanced</i18n:text>
                            </a>
                        </xsl:if>
                    </div>
                    <!-- <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'] = '' "> -->
                    <div class="barrita">&#160;</div>
                    <!-- </xsl:if> -->

                    <!-- BOTON VER MANUAL USUARIO -->
                    <div class="boton-manual">
                        <a target="_blank" class="ds-button-field btn-yellow">
                            <xsl:attribute name="href">
                                <!-- <xsl:text>/themes/Mirage/docs/Guia Manual de Usuario v1.pdf</xsl:text> -->
                                <xsl:text>http://repositorio.igp.gob.pe/handle/IGP/4607</xsl:text>                     
                            </xsl:attribute>
                            <span class="name">Ver Manual de Usuario</span>
                            <span class="alternative_name">Ver Manual</span>
                        </a>
                    </div>
                </div>
            </div>
        <!-- </xsl:if> -->
    </xsl:template>


    <!-- The header (distinct from the HTML head element) contains the title, subtitle, login box and various
        placeholders for header images -->
    <xsl:template name="buildTrail">
        <div id="ds-trail-wrapper">
            <ul id="ds-trail" class="container">
                <xsl:choose>
                    <xsl:when test="starts-with($request-uri, 'page/about')">                        
                        <a class="ds-trail-link first-link" href="/">
                            <i class="fas fa-home">&#160;</i>
                            <i18n:text>xmlui.dri2xhtml.structural.head-subtitle</i18n:text> 
                        </a> / <i18n:text>xmlui.dri2xhtml.AboutPage.trail</i18n:text>
                    </xsl:when>
                    <xsl:when test="count(/dri:document/dri:meta/dri:pageMeta/dri:trail) = 0">
                        <li class="ds-trail-link first-link">-</li>
                    </xsl:when>
                    <xsl:otherwise>
                        <xsl:apply-templates select="/dri:document/dri:meta/dri:pageMeta/dri:trail"/>
                    </xsl:otherwise>
                </xsl:choose>
            </ul>
        </div>
    </xsl:template>

    <xsl:template match="dri:trail">
        <!--put an arrow between the parts of the trail-->
        <xsl:if test="position()>1">
            <li class="ds-trail-arrow">
                <xsl:text>&#47;</xsl:text>
            </li>
        </xsl:if>
        <li>
            <xsl:attribute name="class">
                <xsl:text>ds-trail-link </xsl:text>
                <xsl:if test="position()=1">
                    <xsl:text>first-link </xsl:text>
                </xsl:if>
                <xsl:if test="position()=last()">
                    <xsl:text>last-link</xsl:text>
                </xsl:if>
            </xsl:attribute>
            <xsl:if test="position()=1">
                <span class="fas fa-home">&#160;</span> <!-- Agrego el icono home -->
            </xsl:if>
            <!-- Determine whether we are dealing with a link or plain text trail link -->
            <xsl:choose>
                <xsl:when test="./@target">
                    <a>
                        <xsl:attribute name="href">
                            <xsl:value-of select="./@target"/>
                        </xsl:attribute>
                        <xsl:apply-templates />
                    </a>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:apply-templates />
                </xsl:otherwise>
            </xsl:choose>
        </li>
    </xsl:template>

    <xsl:template name="cc-license">
        <xsl:param name="metadataURL"/>
        <xsl:variable name="externalMetadataURL">
            <xsl:text>cocoon:/</xsl:text>
            <xsl:value-of select="$metadataURL"/>
            <xsl:text>?sections=dmdSec,fileSec&amp;fileGrpTypes=THUMBNAIL</xsl:text>
        </xsl:variable>

        <xsl:variable name="ccLicenseName"
                      select="document($externalMetadataURL)//dim:field[@element='rights']"
                      />
        <xsl:variable name="ccLicenseUri"
                      select="document($externalMetadataURL)//dim:field[@element='rights'][@qualifier='uri']"
                      />
        <xsl:variable name="handleUri">
                    <xsl:for-each select="document($externalMetadataURL)//dim:field[@element='identifier' and @qualifier='uri']">
                        <a>
                            <xsl:attribute name="href">
                                <xsl:copy-of select="./node()"/>
                            </xsl:attribute>
                            <xsl:copy-of select="./node()"/>
                        </a>
                        <xsl:if test="count(following-sibling::dim:field[@element='identifier' and @qualifier='uri']) != 0">
                            <xsl:text>, </xsl:text>
                        </xsl:if>
                </xsl:for-each>
        </xsl:variable>

   <xsl:if test="$ccLicenseName and $ccLicenseUri and contains($ccLicenseUri, 'creativecommons')">
        <div about="{$handleUri}" class="clearfix">
            <xsl:attribute name="style">
                <xsl:text>margin:0em 2em 0em 2em; padding-bottom:0em;</xsl:text>
            </xsl:attribute>
            <a rel="license"
                href="{$ccLicenseUri}"
                alt="{$ccLicenseName}"
                title="{$ccLicenseName}"
                >
                <xsl:call-template name="cc-logo">
                    <xsl:with-param name="ccLicenseName" select="$ccLicenseName"/>
                    <xsl:with-param name="ccLicenseUri" select="$ccLicenseUri"/>
                </xsl:call-template>
            </a>
            <span>
                <xsl:attribute name="style">
                    <xsl:text>vertical-align:middle; text-indent:0 !important;</xsl:text>
                </xsl:attribute>
                <i18n:text>xmlui.dri2xhtml.METS-1.0.cc-license-text</i18n:text>
                <xsl:value-of select="$ccLicenseName"/>
            </span>
        </div>
        </xsl:if>
    </xsl:template>

    <xsl:template name="cc-logo">
        <xsl:param name="ccLicenseName"/>
        <xsl:param name="ccLicenseUri"/>
        <xsl:variable name="ccLogo">
             <xsl:choose>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/licenses/by/')">
                       <xsl:value-of select="'cc-by.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/licenses/by-sa/')">
                       <xsl:value-of select="'cc-by-sa.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/licenses/by-nd/')">
                       <xsl:value-of select="'cc-by-nd.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/licenses/by-nc/')">
                       <xsl:value-of select="'cc-by-nc.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/licenses/by-nc-sa/')">
                       <xsl:value-of select="'cc-by-nc-sa.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/licenses/by-nc-nd/')">
                       <xsl:value-of select="'cc-by-nc-nd.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/publicdomain/zero/')">
                       <xsl:value-of select="'cc-zero.png'" />
                  </xsl:when>
                  <xsl:when test="starts-with($ccLicenseUri,
                                           'http://creativecommons.org/publicdomain/mark/')">
                       <xsl:value-of select="'cc-mark.png'" />
                  </xsl:when>
                  <xsl:otherwise>
                       <xsl:value-of select="'cc-generic.png'" />
                  </xsl:otherwise>
             </xsl:choose>
        </xsl:variable>
        <xsl:variable name="ccLogoImgSrc">
            <xsl:value-of select="$theme-path"/>
            <xsl:text>/images/creativecommons/</xsl:text>
            <xsl:value-of select="$ccLogo"/>
        </xsl:variable>
        <img>
             <xsl:attribute name="src">
                <xsl:value-of select="$ccLogoImgSrc"/>
             </xsl:attribute>
             <xsl:attribute name="alt">
                 <xsl:value-of select="$ccLicenseName"/>
             </xsl:attribute>
             <xsl:attribute name="style">
                 <xsl:text>float:left; margin:0em 1em 0em 0em; border:none;</xsl:text>
             </xsl:attribute>
        </img>
    </xsl:template>

    <!-- Like the header, the footer contains various miscellaneous text, links, and image placeholders -->
    <xsl:template name="buildFooter">
        <div id="ds-footer">
            <div class="footer-contact">
                <div class="fc-canal">
                    <span class="fa fa-fax">&#160;</span>
                    <div>
                        <span>Atencion al ciudadano</span>
                        <span>Lunes a Viernes de 8:30am a 4:30pm</span>
                    </div>
                </div>
                <div class="fc-canal">
                    <span class="fa fa-map-marker-alt">&#160;</span>
                    <div>
                        <span>Calle Badajaoz N° 169 Urb. Mayorazgo I</span>
                        <span>Etapa Ate, Lima 15012-Peru</span>
                    </div>
                </div>
                <div class="fc-canal">
                    <span class="far fa-envelope">&#160;</span>
                    <div>
                        <a href="mailto:reci@igp.gob.pe"><span>reci@igp.gob.pe</span></a>                        
                    </div>
                </div>
                <div class="fc-canal">
                    <span class="fa fa-phone">&#160;</span>
                    <div>
                        <span>(511)3172300</span>
                    </div>
                </div>
                <div class="nav-social">
                    <a href="https://www.facebook.com/igp.peru"><span class="fab fa-facebook-f"></span></a> <!-- Facebook -->
                    <a href="https://twitter.com/igp_peru"><span class="fab fa-twitter"></span></a> <!-- Twitter -->
                    <a href="https://www.linkedin.com/company/igpperu/"><span class="fab fa-linkedin-in"></span></a> <!-- Linkedin -->
                    <a href="https://www.instagram.com/igp.peru"><span class="fab fa-instagram"></span></a> <!-- Instagram -->
                </div>
            </div>
            <div>
                <xsl:attribute name="class"><xsl:text>footer-nav</xsl:text></xsl:attribute>
                <a >
                    <xsl:attribute name="href"><xsl:text>/page/about</xsl:text></xsl:attribute>
                    <span>Políticas de uso</span>
                </a>
                <!-- <div>Mapa del sitio</div> -->
            </div>
            <div>
                <xsl:attribute name="class"><xsl:text>footer-map</xsl:text></xsl:attribute>
                <iframe src="https://www.google.com/maps/embed?pb=&#33;1m14&#33;1m8&#33;1m3&#33;1d3901.828012758223&#33;2d-76.94633793139629&#33;3d-12.055351713347235&#33;3m2&#33;1i1024&#33;2i768&#33;4f13.1&#33;3m3&#33;1m2&#33;1s0x0&#37;3A0x7ea774b6fa66a3c6&#33;2sInstituto+Geof&#37;C3&#37;ADsico+del+Per&#37;C3&#37;BA&#33;5e0&#33;3m2&#33;1ses-419&#33;2spe&#33;4v1545658855595" width="100%" height="100%" frameborder="0" allowfullscreen="false">
                    &#160;
                </iframe>
            </div>
        </div>
    </xsl:template>


<!--
        The meta, body, options elements; the three top-level elements in the schema
-->




    <!--
        The template to handle the dri:body element. It simply creates the ds-body div and applies
        templates of the body's child elements (which consists entirely of dri:div tags).
    -->
<!--    REEMPLACE DS-BODY POR DS-COMMUNITIES Y DS-SUBMISSIONS PARA DARLES ESTILO POR SEPARADO ;D -->
    <xsl:template match="dri:body">
        <!-- DS-NEWS -->
        <xsl:call-template name="buildNews"/>
        <!-- DS-SEARCH-BOX -->
        <xsl:call-template name="buildSearchBox" />
        <!--The trail is built by applying a template over pageMeta's trail children. -->
        <xsl:call-template name="buildTrail"/>

        <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='alert'][@qualifier='message']">
                <div id="ds-system-wide-alert">
                    <p>
                        <xsl:copy-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='alert'][@qualifier='message']/node()"/>
                    </p>
                </div>
        </xsl:if>
        <!-- Check for the custom pages -->
        <xsl:choose>
            <xsl:when test="starts-with($request-uri, 'page/about')">
                <div class="container contenido-principal">
                    <xsl:apply-templates select="/dri:document/dri:options" />
                    <div id="ds-submissions" class="active page-about">
                        <h1 class="ds-div-head"><i18n:text>xmlui.dri2xhtml.AboutPage.title</i18n:text></h1>
                        <div class="divabout">
                            <p><i18n:text>xmlui.dri2xhtml.AboutPage.description</i18n:text></p>                        
                        </div>
                        <h1 class="ds-div-head"><i18n:text>xmlui.dri2xhtml.PoliticsPage.title</i18n:text></h1>
                        <!-- <p><i18n:text>xmlui.dri2xhtml.PoliticsPage.description</i18n:text><p> -->
                        <div class="divabout">
                            <h3 class="bold"><i18n:text>xmlui.dri2xhtml.PoliticsPage.sub_title_1</i18n:text></h3>
                            <ul>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_1_1</i18n:text></li>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_1_2</i18n:text></li>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_1_3</i18n:text></li>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_1_4</i18n:text></li>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_1_5</i18n:text></li>
                            </ul>
                        </div>
                        <div class="divabout">
                            <h3 class="bold"><i18n:text>xmlui.dri2xhtml.PoliticsPage.sub_title_2</i18n:text></h3>
                            <ul>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_2_1</i18n:text></li>
                                <li><i18n:text>xmlui.dri2xhtml.PoliticsPage.politic_2_2</i18n:text></li>
                            </ul>
                        </div>

                    </div>
                </div>
                
            </xsl:when>
            <!-- Otherwise use default handling of body -->
            <xsl:otherwise>
                <xsl:if test="count(*[@n='comunity-browser'])!=0">
                    <div id="ds-communities">
                        <div class="container">
                            <xsl:apply-templates select="*[@n='comunity-browser']"/>
                        </div>
                    </div>
                </xsl:if>

                <div class="container contenido-principal">
                    <xsl:apply-templates select="/dri:document/dri:options" />
                    <xsl:choose>
                        <!-- LO LAMENTO, NO RECUERDO POR QUÉ HICE ESTO, NO PARECE TENER SENTIDO, YA LO CORREGIRÉ-->
                        <xsl:when test="count(*[@n='site-home'])!=0">
                            <div id="ds-submissions" class="active">
                                <xsl:apply-templates select="*[@n!='comunity-browser' and @n!='news']"/>
                            </div>
                        </xsl:when>
                        <xsl:otherwise>
                            <div id="ds-submissions" class="active">
                                <xsl:apply-templates select="*[@n!='comunity-browser' and @n!='news']"/>
                            </div>
                        </xsl:otherwise>
                    </xsl:choose>
                    
                </div>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <!-- Currently the dri:meta element is not parsed directly. Instead, parts of it are referenced from inside
        other elements (like reference). The blank template below ends the execution of the meta branch -->
    <xsl:template match="dri:meta">
    </xsl:template>

    <!-- Meta's children: userMeta, pageMeta, objectMeta and repositoryMeta may or may not have templates of
        their own. This depends on the meta template implementation, which currently does not go this deep.
    <xsl:template match="dri:userMeta" />
    <xsl:template match="dri:pageMeta" />
    <xsl:template match="dri:objectMeta" />
    <xsl:template match="dri:repositoryMeta" />
    -->

    <xsl:template name="addJavascript">
        <!--<xsl:variable name="jqueryVersion">
            <xsl:text>1.6.2</xsl:text>
        </xsl:variable>

        <script type="text/javascript" src="{concat($scheme, 'ajax.googleapis.com/ajax/libs/jquery/', $jqueryVersion ,'/jquery.min.js')}">&#160;</script>-->
<!--        <xsl:variable name="jQuery1.12">
            <xsl:choose>
                <xsl:when test="starts-with(confman:getProperty('dspace.baseUrl'), 'https://')">
                    <xsl:text>https://</xsl:text>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:text>http://</xsl:text>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:variable>
        <script type="text/javascript" src="{concat($scheme, 'code.jquery.com/jquery-1.12.4.min.js')}">&#160;</script>-->

        <!-- <xsl:variable name="jquery-3.3.1">
            <xsl:choose>
                <xsl:when test="starts-with(confman:getProperty('dspace.baseUrl'), 'https://')">
                    <xsl:text>https://</xsl:text>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:text>http://</xsl:text>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:variable>
        <script type="text/javascript" src="{concat($scheme, 'code.jquery.com/jquery-3.3.1.min.js')}">&#160;</script>
    -->

        <!--
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
        -->
        <xsl:variable name="highcharts-js">
            <xsl:choose>
                <xsl:when test="starts-with(confman:getProperty('dspace.baseUrl'), 'https://')">
                    <xsl:text>https://</xsl:text>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:text>http://</xsl:text>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:variable>
        <!-- <script type="text/javascript" src="{concat($scheme, 'code.highcharts.com/highcharts.js')}">&#160;</script> -->
        <script type="text/javascript" src="{concat('https://', 'code.highcharts.com/highcharts.js')}">&#160;</script>

        <xsl:variable name="highcharts-exporting-js">
            <xsl:choose>
                <xsl:when test="starts-with(confman:getProperty('dspace.baseUrl'), 'https://')">
                    <xsl:text>https://</xsl:text>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:text>http://</xsl:text>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:variable>
        <!-- <script type="text/javascript" src="{concat($scheme, 'code.highcharts.com/modules/exporting.js')}">&#160;</script>-->
        <script type="text/javascript" src="{concat('https://', 'code.highcharts.com/modules/exporting.js')}">&#160;</script>

        <xsl:variable name="highcharts-export-data-js">
            <xsl:choose>
                <xsl:when test="starts-with(confman:getProperty('dspace.baseUrl'), 'https://')">
                    <xsl:text>https://</xsl:text>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:text>http://</xsl:text>
                </xsl:otherwise>
            </xsl:choose>
        </xsl:variable>
        <!-- <script type="text/javascript" src="{concat($scheme, 'code.highcharts.com/modules/export-data.js')}">&#160;</script> -->
        <script type="text/javascript" src="{concat('https://', 'code.highcharts.com/modules/export-data.js')}">&#160;</script>

        <!--<xsl:variable name="localJQuerySrc">
                <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
            <xsl:text>/static/js/jquery-</xsl:text>
            <xsl:value-of select="$jqueryVersion"/>
            <xsl:text>.min.js</xsl:text>
        </xsl:variable>-->

        <!--<script type="text/javascript">
            <xsl:text disable-output-escaping="yes">!window.jQuery &amp;&amp; document.write('&lt;script type="text/javascript" src="</xsl:text><xsl:value-of
                select="$localJQuerySrc"/><xsl:text disable-output-escaping="yes">"&gt;&#160;&lt;\/script&gt;')</xsl:text>
        </script>-->



        <!-- Add theme javascipt  -->
        <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='javascript'][@qualifier='url']">
            <script type="text/javascript">
                <xsl:attribute name="src">
                    <xsl:value-of select="."/>
                </xsl:attribute>&#160;</script>
        </xsl:for-each>

        <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='javascript'][not(@qualifier)]">
            <script type="text/javascript">
                <xsl:attribute name="src">
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                    <xsl:text>/themes/</xsl:text>
                    <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                    <xsl:text>/</xsl:text>
                    <xsl:value-of select="."/>
                </xsl:attribute>&#160;</script>
        </xsl:for-each>

        <!-- add "shared" javascript from static, path is relative to webapp root -->
        <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='javascript'][@qualifier='static']">
            <!--This is a dirty way of keeping the scriptaculous stuff from choice-support
            out of our theme without modifying the administrative and submission sitemaps.
            This is obviously not ideal, but adding those scripts in those sitemaps is far
            from ideal as well-->
            <xsl:choose>
                <xsl:when test="text() = 'static/js/choice-support.js'">
                    <script type="text/javascript">
                        <xsl:attribute name="src">
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                            <xsl:text>/themes/</xsl:text>
                            <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                            <xsl:text>/lib/js/choice-support.js</xsl:text>
                        </xsl:attribute>&#160;</script>
                </xsl:when>
                <xsl:when test="not(starts-with(text(), 'static/js/scriptaculous'))">
                    <script type="text/javascript">
                        <xsl:attribute name="src">
                            <xsl:value-of
                                    select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                            <xsl:text>/</xsl:text>
                            <xsl:value-of select="."/>
                        </xsl:attribute>&#160;</script>
                </xsl:when>
            </xsl:choose>
        </xsl:for-each>

        <!-- add setup JS code if this is a choices lookup page -->
        <xsl:if test="dri:body/dri:div[@n='lookup']">
          <xsl:call-template name="choiceLookupPopUpSetup"/>
        </xsl:if>

        <!--PNG Fix for IE6-->
        <xsl:text disable-output-escaping="yes">&lt;!--[if lt IE 7 ]&gt;</xsl:text>
        <script type="text/javascript">
            <xsl:attribute name="src">
                <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/>
                <xsl:text>/themes/</xsl:text>
                <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='theme'][@qualifier='path']"/>
                <xsl:text>/lib/js/DD_belatedPNG_0.0.8a.js?v=1</xsl:text>
            </xsl:attribute>&#160;</script>
        <script type="text/javascript">
            <xsl:text>DD_belatedPNG.fix('#ds-header-logo');DD_belatedPNG.fix('#ds-footer-logo');$.each($('img[src$=png]'), function() {DD_belatedPNG.fixPng(this);});</xsl:text>
        </script>
        <xsl:text disable-output-escaping="yes" >&lt;![endif]--&gt;</xsl:text>


        <script type="text/javascript">
            runAfterJSImports.execute();
        </script>

        <!-- Add a google analytics script if the key is present -->
        <xsl:if test="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='google'][@qualifier='analytics']">
            <script type="text/javascript"><xsl:text>
                   var _gaq = _gaq || [];
                   _gaq.push(['_setAccount', '</xsl:text><xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='google'][@qualifier='analytics']"/><xsl:text>']);
                   _gaq.push(['_trackPageview']);

                   (function() {
                       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                   })();
           </xsl:text></script>
        </xsl:if>

        <!-- Add a contextpath to a JS variable -->
                <script type="text/javascript"><xsl:text>
                         if(typeof window.orcid === 'undefined'){
                            window.orcid={};
                          };
                        window.orcid.contextPath= '</xsl:text><xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='contextPath'][not(@qualifier)]"/><xsl:text>';</xsl:text>
                    <xsl:text>window.orcid.themePath= '</xsl:text><xsl:value-of select="$theme-path"/><xsl:text>';</xsl:text>
                </script>

    </xsl:template>

    <!-- Display language selection if more than 1 language is supported (overides buggy dir2xhtml-alt).
    Uses a page metadata curRequestURI which was introduced by in /xmlui/src/main/webapp/themes/Mirage/sitemap.xmap-->
    <xsl:template name="languageSelection">
        <xsl:variable name="curRequestURI">
            <xsl:value-of select="substring-after(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='curRequestURI'],/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='URI'])"/>
        </xsl:variable>
        <xsl:if test="count(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='page'][@qualifier='supportedLocale']) &gt; 1">
            <div id="ds-language-selection">
                <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='page'][@qualifier='supportedLocale']">
                    <xsl:variable name="locale" select="."/>
                    <a>
                        <xsl:attribute name="href">
                            <xsl:value-of select="$curRequestURI"/>
                            <xsl:call-template name="getLanguageURL"/>
                            <xsl:value-of select="$locale"/>
                        </xsl:attribute>
                        <xsl:value-of select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='supportedLocale'][@qualifier=$locale]"/>
                    </a>
                </xsl:for-each>
            </div>
        </xsl:if>
    </xsl:template>
    <!-- Builds the Query String part of the language URL. If there allready is an excisting query string
    like: ?filtertype=subject&filter_relational_operator=equals&filter=keyword1 it appends the locale parameter with the ampersand (&) symbol -->
    <xsl:template name="getLanguageURL">
        <xsl:variable name="queryString" select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='request'][@qualifier='queryString']"/>
        <xsl:choose>
            <!-- There allready is a query string so append it and the language argument -->
            <xsl:when test="$queryString != ''">
                <xsl:text>?</xsl:text>
                <xsl:choose>
                    <xsl:when test="contains($queryString, '&amp;locale-attribute')">
                        <xsl:value-of select="substring-before($queryString, '&amp;locale-attribute')"/>
                        <xsl:text>&amp;locale-attribute=</xsl:text>
                    </xsl:when>
                    <!-- the query string is only the locale-attribute so remove it to append the correct one -->
                    <xsl:when test="starts-with($queryString, 'locale-attribute')">
                        <xsl:text>locale-attribute=</xsl:text>
                    </xsl:when>
                    <xsl:otherwise>
                        <xsl:value-of select="$queryString"/>
                        <xsl:text>&amp;locale-attribute=</xsl:text>
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:when>
            <xsl:otherwise>
                <xsl:text>?locale-attribute=</xsl:text>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

</xsl:stylesheet>
