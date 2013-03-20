<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	version="1.0">
	<xsl:output method="html" encoding="utf-8" />
	<xsl:template match="staff">
		<h2 class='teamTitle'>Chemistry and Preclinical Research Team (CPRT)</h2>
		<xsl:for-each select="person">
			<xsl:if test="child::team = 'CPCRT'">
				<div class='person'>
					<xsl:attribute name='id'><xsl:value-of
						select="name" /></xsl:attribute>
					<div class='personal_image'>
						<img>
							<xsl:attribute name='alt'><xsl:value-of
								select="altText" /></xsl:attribute>
							<xsl:attribute name='src'><xsl:value-of
								select="image" /></xsl:attribute>
						</img>
					</div>
					<div class='personal_contacts'>
						<div class='clickable' onclick='toggle_vis(this.parentNode.parentNode.id)'>
							<div class='name'>
								<xsl:value-of select="fullName" />
							</div>
							<div class='position'>
								<xsl:value-of select="position" />
							</div>
							<div class='contacts'>
								<p>
									<xsl:value-of select="position" />
								</p>
								<p>
									<xsl:if test='child::phone != ""'>
										<b>Tel: </b>
										<xsl:value-of select="phone" />
										<br />
									</xsl:if>
									<xsl:if test='child::fax != ""'>
										<b>Fax: </b>
										<xsl:value-of select="fax" />
										<br />
									</xsl:if>
									<xsl:if test='child::cell != ""'>
										<b>Cell: </b>
										<xsl:value-of select="cell" />
										<br />
									</xsl:if>
									<xsl:if test='child::mail != ""'>
										<b>e-mail: </b>
										<xsl:value-of select="mail" />
										<br />
									</xsl:if>
									<xsl:if test='child::CV != ""'>
									    <a>
                                            <xsl:attribute name='href'><xsl:value-of 
                                                select="CV" /></xsl:attribute>
                                            <xsl:attribute name='target'>_blank</xsl:attribute>
                                                <b><xsl:text>Curriculum vitae</xsl:text></b>
                                        </a>
                                        <br />
                                    </xsl:if>
								</p>
							</div>
						</div>
					</div>
				</div>
			</xsl:if>
		</xsl:for-each>
		<br />
		<h2 class='teamTitle'>Imaging Probe Chemistry Center (IPCT)</h2>
        <xsl:for-each select="person">
            <xsl:if test="child::team = 'IPCT'">
                <div class='person'>
                    <xsl:attribute name='id'><xsl:value-of
                        select="name" /></xsl:attribute>
                    <div class='personal_image'>
                        <img>
                            <xsl:attribute name='alt'><xsl:value-of
                                select="altText" /></xsl:attribute>
                            <xsl:attribute name='src'><xsl:value-of
                                select="image" /></xsl:attribute>
                        </img>
                    </div>
                    <div class='personal_contacts'>
                        <div class='clickable' onclick='toggle_vis(this.parentNode.parentNode.id)'>
                            <div class='name'>
                                <xsl:value-of select="fullName" />
                            </div>
                            <div class='position'>
                                <xsl:value-of select="position" />
                            </div>
                            <div class='contacts'>
                                <p>
                                    <xsl:value-of select="position" />
                                </p>
                                <p>
                                    <xsl:if test='child::phone != ""'>
                                        <b>Tel: </b>
                                        <xsl:value-of select="phone" />
                                        <br />
                                    </xsl:if>
                                    <xsl:if test='child::fax != ""'>
                                        <b>Fax: </b>
                                        <xsl:value-of select="fax" />
                                        <br />
                                    </xsl:if>
                                    <xsl:if test='child::cell != ""'>
                                        <b>Cell: </b>
                                        <xsl:value-of select="cell" />
                                        <br />
                                    </xsl:if>
                                    <xsl:if test='child::mail != ""'>
                                        <b>e-mail: </b>
                                        <xsl:value-of select="mail" />
                                        <br />
                                    </xsl:if>
                                    <xsl:if test='child::CV != ""'>
                                        <a>
                                            <xsl:attribute name='href'><xsl:value-of 
                                                select="CV" /></xsl:attribute>
                                            <xsl:attribute name='target'>_blank</xsl:attribute>
                                                <b><xsl:text>Curriculum vitae</xsl:text></b>
                                        </a>
                                        <br />
                                    </xsl:if>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </xsl:if>
        </xsl:for-each>

		<br />
		<h2 class='teamTitle'>Clinical and Experimental Center for Functional Magnetic
			Resonance Imaging<br />(CCS fMRI)</h2>
		<xsl:for-each select="person">
			<xsl:if test="child::team = 'CCSFMRI'">
				<div class='person'>
					<xsl:attribute name='id'><xsl:value-of
						select="name" /></xsl:attribute>
					<div class='personal_image'>
						<img>
							<xsl:attribute name='alt'><xsl:value-of
								select="altText" /></xsl:attribute>
							<xsl:attribute name='src'><xsl:value-of
								select="image" /></xsl:attribute>
						</img>
					</div>
					<div class='personal_contacts'>
						<div class='clickable' onclick='toggle_vis(this.parentNode.parentNode.id)'>
							<div class='name'>
								<xsl:value-of select="fullName" />
							</div>
							<div class='position'>
								<xsl:value-of select="position" />
							</div>
							<div class='contacts'>
								<p>
									<xsl:value-of select="position" />
								</p>
								<p>
									<xsl:if test='child::phone != ""'>
										<b>Tel: </b>
										<xsl:value-of select="phone" />
										<br />
									</xsl:if>
									<xsl:if test='child::fax != ""'>
										<b>Fax: </b>
										<xsl:value-of select="fax" />
										<br />
									</xsl:if>
									<xsl:if test='child::cell != ""'>
										<b>Cell: </b>
										<xsl:value-of select="cell" />
										<br />
									</xsl:if>
									<xsl:if test='child::mail != ""'>
										<b>e-mail: </b>
										<xsl:value-of select="mail" />
										<br />
									</xsl:if>
									<xsl:if test='child::CV != ""'>
                                        <a>
                                            <xsl:attribute name='href'><xsl:value-of 
                                                select="CV" /></xsl:attribute>
                                            <xsl:attribute name='target'>_blank</xsl:attribute>
                                                <b><xsl:text>Curriculum vitae</xsl:text></b>
                                        </a>
                                        <br />
                                    </xsl:if>
								</p>
							</div>
						</div>
					</div>
				</div>
			</xsl:if>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>

<!-- echo "<div id='" . $staff_noi[$i]['name'] . "'> <div class='personal_image'><img 
	src='images/" . $staff_noi[$i]['image']. "' alt='" . $staff_noi[$i]['alt_text'] 
	. "' /> </div> <div class='personal_contacts'> <div class='clickable' onclick='toggle_vis(\"" 
	. $staff_noi[$i]['name'] . "\");'> <div class='name'><h2>" . $staff_noi[$i]['full_name'] 
	. "</h2></div> <div class='position'>" . $staff_noi[$i]['position'] . "</div> 
	</div> <div class='contacts'> <p>" . $staff_noi[$i]['position'] . "</p> <p><b>Tel:</b>" 
	. $staff_noi[$i]['phone'] . "<br /> <b>email:</b> <a href='mailto:" . $staff_noi[$i]['mail'] 
	. "'>" . $staff_noi[$i]['mail'] . "</a> <br /> <b>fax:</b>" . $staff_noi[$i]['fax'] 
	. "<b><br /> cell:" . $staff_noi[$i]['cell'] . "</b></p> </div> </div> </div>"; -->						