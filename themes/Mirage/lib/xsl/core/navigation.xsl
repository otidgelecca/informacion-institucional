<!--

    The contents of this file are subject to the license and copyright
    detailed in the LICENSE and NOTICE files at the root of the source
    tree and available online at

    http://www.dspace.org/license/

-->
<!--
    Rendering specific to the navigation (options)

    Author: art.lowel at atmire.com
    Author: lieven.droogmans at atmire.com
    Author: ben at atmire.com
    Author: Alexey Maslov

-->

<xsl:stylesheet xmlns:i18n="http://apache.org/cocoon/i18n/2.1"
    xmlns:dri="http://di.tamu.edu/DRI/1.0/"
    xmlns:mets="http://www.loc.gov/METS/"
    xmlns:xlink="http://www.w3.org/TR/xlink/"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"
    xmlns:dim="http://www.dspace.org/xmlns/dspace/dim"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    xmlns:mods="http://www.loc.gov/mods/v3"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns="http://www.w3.org/1999/xhtml"
    exclude-result-prefixes="i18n dri mets xlink xsl dim xhtml mods dc">

    <xsl:output indent="yes"/>

    <!--
        The template to handle dri:options. Since it contains only dri:list tags (which carry the actual
        information), the only things than need to be done is creating the ds-options div and applying
        the templates inside it.

        In fact, the only bit of real work this template does is add the search box, which has to be
        handled specially in that it is not actually included in the options div, and is instead built
        from metadata available under pageMeta.
    -->
    <!-- TODO: figure out why i18n tags break the go button -->
    <xsl:template match="dri:options">
        <!-- AQUI ESTABA LA SEARCH BOX, DEBI MOVERLA AL BODY (LO SIENTO, TUVE QUE ROMPER LA ESTRUCTURA BASDE DE
        DSPACE, BUENO, NO MAS TANTITO xd-->
        <!-- Once the search box is built, the other parts of the options are added -->
                
        <div id="ds-options" class="">
            <xsl:apply-templates/>
<!--            No necesitamos los feeds-->
            <!-- DS-984 Add RSS Links to Options Box -->
<!--            <xsl:if test="count(/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='feed']) != 0">
                <h5 id="ds-feed-option-head" class="ds-option-set-head">
                    <i18n:text>xmlui.feed.header</i18n:text>
                </h5>
                <div id="ds-feed-option" class="ds-option-set">
                    <ul>
                        <xsl:call-template name="addRSSLinks"/>
                    </ul>
                </div>
            </xsl:if>-->
        </div>
    </xsl:template>

    <!-- Add each RSS feed from meta to a list -->
    <xsl:template name="addRSSLinks">
        <xsl:for-each select="/dri:document/dri:meta/dri:pageMeta/dri:metadata[@element='feed']">
            <li>
                <a>
                    <xsl:attribute name="href">
                        <xsl:value-of select="."/>
                    </xsl:attribute>

                    <xsl:attribute name="style">
                        <xsl:text>background: url(</xsl:text>
                        <xsl:value-of select="$context-path"/>
                        <xsl:text>/static/icons/feed.png) no-repeat</xsl:text>
                    </xsl:attribute>

                    <xsl:choose>
                        <xsl:when test="contains(., 'rss_1.0')">
                            <xsl:text>RSS 1.0</xsl:text>
                        </xsl:when>
                        <xsl:when test="contains(., 'rss_2.0')">
                            <xsl:text>RSS 2.0</xsl:text>
                        </xsl:when>
                        <xsl:when test="contains(., 'atom_1.0')">
                            <xsl:text>Atom</xsl:text>
                        </xsl:when>
                        <xsl:otherwise>
                            <xsl:value-of select="@qualifier"/>
                        </xsl:otherwise>
                    </xsl:choose>
                </a>
            </li>
        </xsl:for-each>
    </xsl:template>

    <!--give nested navigation list the class sublist-->
    <xsl:template match="dri:options/dri:list/dri:list" priority="5" mode="nested">
        <li>
            <xsl:apply-templates select="dri:head" mode="nested"/>
            <ul class="ds-simple-list sublist">
                <xsl:apply-templates select="dri:item" mode="nested"/>
            </ul>
        </li>
    </xsl:template>

    <!-- ESTE PEQUEÑO CODIGO HACE QUE EL TEXTO ENTRE PARÉNTESIS SE META DENTRO DE UN SPAN Y TENGA LA CLASE txtcolor -->
    <xsl:template match="dri:options/dri:list/dri:list/dri:item" priority="5" mode="nested">
        <li class="ds-simple-list-item">
            <xsl:variable name="mimalditoitem">
                <xsl:value-of select="./*/text()" />
            </xsl:variable>
            <xsl:choose>
                <xsl:when test="contains($mimalditoitem, '(')">
                    <a>
                        <xsl:attribute name="href"><xsl:value-of select="./*/@target" /></xsl:attribute>
                        <xsl:value-of select="substring-before($mimalditoitem, '(')" />
                        <span class="colortxt">(<xsl:value-of select="substring-after($mimalditoitem, '(')" /></span>
                    </a>
                </xsl:when>
                <xsl:otherwise>
                    <xsl:apply-templates />
                </xsl:otherwise>
            </xsl:choose>
        </li>  
    </xsl:template>

    <!-- Quick patch to remove empty lists from options -->
    <xsl:template match="dri:options//dri:list[count(child::*)=0]" priority="5" mode="nested">
    </xsl:template>
    <xsl:template match="dri:options//dri:list[count(child::*)=0]" priority="5">
    </xsl:template>  


</xsl:stylesheet>
