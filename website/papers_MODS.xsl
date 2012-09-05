<?xml version="1.0" encoding="utf-8"?>
<!-- DWXMLSource="MODS.xml" -->
<!--DOCTYPE stylesheet [ <!ENTITY nbsp "&#160;"> <!ENTITY copy "&#169;"> 
	<!ENTITY reg "&#174;"> <!ENTITY trade "&#8482;"> <!ENTITY mdash "&#8212;"> 
	<!ENTITY ldquo "&#8220;"> <!ENTITY rdquo "&#8221;"> <!ENTITY pound "&#163;"> 
	<!ENTITY yen "&#165;"> <!ENTITY euro "&#8364;"> ] -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	version="1.0">
	<xsl:output method="html" encoding="utf-8" />
	<xsl:template match="/">
		<xsl:variable name="counter" select="0" />
		<xsl:for-each select="modsCollection/mods">
			<xsl:if test="child::relatedItem/originInfo/dateIssued = 'XXXX'">
				<div>
					<xsl:attribute name="class">singlePubContainer</xsl:attribute>
					<a>
						<xsl:attribute name="href"><xsl:value-of
							select="location/url"></xsl:value-of></xsl:attribute>
						<xsl:attribute name="target">_blank</xsl:attribute>
						<span class='paperTitle'>
							<xsl:text>&#8220;</xsl:text>
							<xsl:value-of select="titleInfo/title" />
							<xsl:text>&#8221;</xsl:text>
						</span>
					</a>
					<span>
						<xsl:text>&#32;</xsl:text>
					</span>
					<xsl:if test='child::abstract != ""'>
						<br />
						<div onclick='toggleAbstract(this)'>
							<xsl:attribute name="class">abstractButton</xsl:attribute>
							<xsl:text>Abstract</xsl:text>
						</div>
						<div>
							<xsl:attribute name="class">abstract</xsl:attribute>
							<xsl:value-of select="abstract"></xsl:value-of>
						</div>
					</xsl:if>
					<br />
					<xsl:for-each select="name">
						<xsl:for-each select="namePart">
							<xsl:if test="@type = 'family'">
								<xsl:value-of select="."></xsl:value-of>
								<xsl:text> </xsl:text>
							</xsl:if>
							<xsl:if test="@type = 'given'">
								<xsl:value-of select=".">
								</xsl:value-of>
							</xsl:if>
						</xsl:for-each>
						<xsl:if test="position() != last()">
							<xsl:text>, </xsl:text>
						</xsl:if>
					</xsl:for-each>
					<br></br>
					
					<xsl:for-each select="relatedItem">
						<xsl:choose>
							<xsl:when test="originInfo/inPress">
								<xsl:for-each select="titleInfo">
									<xsl:if test="not(@type)">
										<xsl:for-each select="title">
											<span class='paperJnl'>
												<xsl:value-of select="."></xsl:value-of>
											</span>
										</xsl:for-each>
									</xsl:if>
								</xsl:for-each>
								<br></br>
								<xsl:value-of select="originInfo/inPress"></xsl:value-of>
							</xsl:when>
							<xsl:otherwise>
								<xsl:for-each select="titleInfo">
									<xsl:if test="not(@type)">
										<xsl:for-each select="title">
											<span class='paperJnl'>
												<xsl:value-of select="."></xsl:value-of>
											</span>
										</xsl:for-each>
									</xsl:if>
								</xsl:for-each>
								<br></br>
								<xsl:for-each select="part/extent/start">
									<xsl:value-of select="." />
								</xsl:for-each>
								<xsl:text>-</xsl:text>
								<xsl:for-each select="part/extent/end">
									<xsl:value-of select="." />
								</xsl:for-each>
								<xsl:text>, </xsl:text>
								<xsl:for-each select="part/detail">
									<xsl:if test="@type = 'volume'">
										<xsl:for-each select="number">
											<span class='paperVol'>
												<xsl:value-of select="." />
											</span>
										</xsl:for-each>
									</xsl:if>
									<xsl:if test="@type = 'issue'">
										<xsl:for-each select="number">
											<span class='paperVol'>
												<xsl:text>(</xsl:text>
												<xsl:value-of select="." />
												<xsl:text>)</xsl:text>
											</span>
										</xsl:for-each>
									</xsl:if>
								</xsl:for-each>
								<xsl:text>, </xsl:text>
								<xsl:for-each select="originInfo/dateIssued">
									<span>
										<xsl:value-of select="." />
									</span>
									<xsl:text>.</xsl:text>
									<br></br>
								</xsl:for-each>
							</xsl:otherwise>
						</xsl:choose>
					</xsl:for-each>
				</div>
				<br />
			</xsl:if>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>