<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
version="1.0">
    <xsl:output method="html" encoding="utf-8" />
    <xsl:template match="cost">
        <xsl:for-each select="section">
            <xsl:variable name='counter1' select="position()" />
            <ul>
                <xsl:choose>
                    <xsl:when test="@id = 'Management Commitee'">
                        <h2>
                            <xsl:attribute name="id">mgmtTitle</xsl:attribute>
                            <xsl:value-of select="@id" />
                        </h2>
                    </xsl:when>
                    <xsl:otherwise>
                        <h2>
                            <xsl:attribute name="class">countryTitle</xsl:attribute>
                            <xsl:value-of select="@id" />
                        </h2>
                    </xsl:otherwise>
                </xsl:choose>
                <xsl:for-each select="person">
                    <xsl:variable name='counter2' select="position()" />
                    <li>
                        <xsl:value-of select="role" />
                    </li>
                    <ul>
                        <xsl:attribute name="class">member</xsl:attribute>
                        <li>
                            <xsl:value-of select="name" />
                        </li>
                        <li>
                            <xsl:value-of select="address" />
                        </li>
                        <li>
                            <xsl:value-of select="mail" />
                        </li>
                        <xsl:if test="resources/resource != ''">
                            <xsl:for-each select='resources/resource'>
                                <li>
                                    <input class='deleteButton' type="submit" value="-">
                                        <xsl:attribute name='onclick'>
                                            <xsl:text>showConfirmBox('del_</xsl:text>
                                            <xsl:value-of select='$counter1' />
                                            <xsl:text>_</xsl:text>
                                            <xsl:value-of select='$counter2' />
                                            <xsl:text>');</xsl:text>
                                        </xsl:attribute>
                                    </input>
                                    <!-- THE REMOVE FORM -->
                                    <form class='deleteForm' action="" method="post">
                                        <xsl:attribute name='id'>
                                            <xsl:text>del_</xsl:text>
                                            <xsl:value-of select='$counter1' />
                                            <xsl:text>_</xsl:text>
                                            <xsl:value-of select='$counter2' />
                                        </xsl:attribute>
                                        <input type='hidden' name='file'>
                                            <xsl:attribute name="value">
                                                <xsl:value-of select="file" />
                                            </xsl:attribute>
                                        </input>
                                        <input type='hidden' name='uploader'>
                                            <xsl:attribute name="value">
                                                <xsl:value-of select="../../name" />
                                            </xsl:attribute>
                                        </input>
                                        <input type='hidden' name='delete' value='1'></input>
                                    </form>
                                    <!-- THE REMOVE FORM -->
                                    <xsl:if test="desc != ''">
                                        <span>
                                            <xsl:attribute name="class">
                                                <xsl:text>desc</xsl:text>
                                            </xsl:attribute>
                                            <xsl:value-of select="desc" />
                                            <xsl:text>:</xsl:text>
                                        </span>
                                    </xsl:if>
                                    <a>
                                        <xsl:attribute name="href">
                                            <xsl:text>uploads/</xsl:text>
                                            <xsl:value-of select='file' />
                                        </xsl:attribute>
                                        <xsl:value-of select='file' />
                                    </a>
                                </li>
                            </xsl:for-each>
                        </xsl:if>
                        <li>
                            <input class="uploadButton" type="submit" value="+">
                                <xsl:attribute name='onclick'>
                                    <xsl:text>changeUploadFormVisibility('id_</xsl:text>
                                    <xsl:value-of select='$counter1' />
                                    <xsl:text>_</xsl:text>
                                    <xsl:value-of select='$counter2' />
                                    <xsl:text>');</xsl:text>
                                </xsl:attribute>
                                <xsl:attribute name='id'>
                                    <xsl:text>button_id_</xsl:text>
                                    <xsl:value-of select='$counter1' />
                                    <xsl:text>_</xsl:text>
                                    <xsl:value-of select='$counter2' />
                                </xsl:attribute>
                            </input>
                            <!-- THE ADD FORM -->
                            <form class="uploadForm" action="upload.php" method="post"
                            enctype="multipart/form-data">
                                <xsl:attribute name='id'>
                                    <xsl:text>id_</xsl:text>
                                    <xsl:value-of select='$counter1' />
                                    <xsl:text>_</xsl:text>
                                    <xsl:value-of select='$counter2' />
                                </xsl:attribute>
                                Description (optional):
                                <input id='desc' type="text" name="desc" />
                                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                                <input type="file" name="ufile" />
                                <input type='hidden' name='uploader'>
                                    <xsl:attribute name="value">
                                        <xsl:value-of select="name" />
                                    </xsl:attribute>
                                </input>
                                <input type="submit" value="Upload" />
                            </form>
                            <!-- THE ADD FORM -->
                        </li>
                    </ul>
                </xsl:for-each>
            </ul>
            <br />
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>					