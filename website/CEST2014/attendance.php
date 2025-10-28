
<?php $localizer = "../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
		<?php require $localizer . 'includes/head_const.inc.php'?>        
		<title>Molecular Imaging Center - University of Torino</title>
<meta
	name="description"
	content="University of Torino. Website of the Molecular Imaging Center." />
<link
	href="<?php echo $localizer; ?>CEST2014/CEST.css"
	rel='stylesheet'
	type='text/css'></link>
</head>
<body>
	<div id='section0'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection0">
			<!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>Molecular Imaging Center</h1>
					</div>
					<div id='CEST-section2'>
                            <?php
                            require ('include/CEST-nav.php');
                            ?>
                            <div class='paddingInner'>
							<h1 style="line-height: 28px; text-align: center;">Attending the
								meeting</h1>
							<br> <b>Venue &amp; Travel Information</b> <br>
									<p>
										<a
											class="linkExternal"
											href="http://www.bioindustrypark.eu/index.php?lang=en">
											<span class='underline'>Bioindustry Park Silvano Fumero</span>
										</a>
										is a science and technology park located near Turin in the
										north of Italy. The Park promotes and develops research in
										Life Sciences, hosting companies of the chemical,
										pharmaceutical, diagnostic, bioengineering and information
										science fields. It acts as system integrator for the
										development of Life Sciences in Piedmont since its creation in
										1998.
									</p>
									<p>Bioindustry Park lies in the municipality of Colleretto
										Giacosa, 5 minutes from Ivrea, the heart of Canavese, an
										industrial area of the province of Turin and the intersection
										point of the motorways connecting Turin, Milan and the tunnels
										under the Alps to France (Mont Blanc) and Switzerland (Great
										Saint Bernard).</p>
									<p>Thanks to its geographical position, the Park can be easily
										reached from all major European cities by car, train and
										plane.</p>
									<p>
										<span style="color: #db6d16">By car:</span> Leave the motorway
										at the Ivrea exit and follow the red arrow on the map:
									</p> <img
										style="width: 100%; margin-bottom: 20px;"
										src="images/cartina bioparco.jpg"
										alt="Biopark map" />
									<p>
										<span style="color: #db6d16">By plane:</span> In addition to
										domestic flights, daily flights depart from the
										<a
											class="linkExternal"
											href="http://www.aeroportoditorino.it/en/hp_en.html">
											<span class='underline'>Torino Caselle</span>
										</a>
										international airport to Paris, London, Frankfurt, Munich,
										Stuttgart and Zurich. Caselle airport can be reached in 30
										minutes from the Park. Other suitable airports are
										<a
											class="linkExternal"
											href="http://www.milanomalpensa1.eu/en">
											<span class='underline'>Malpensa 1</span>
										</a>
										and
										<a
											class="linkExternal"
											href="http://www.milanomalpensa2.eu/en">
											<span class='underline'>Malpensa 2</span>
										</a>
										(125 km away) and
										<a
											class="linkExternal"
											href="http://www.milanolinate.eu/en">
											<span class='underline'>Linate</span>
										</a>
										(150 km away), all of them linked to Ivrea by motorway.
									</p> <a name="shuttle"></a>
									<p>
										<span class='underline'>A shuttle bus service will be
											organized from the Turin and Milan Malpensa airports to the
											Bioindustry Park and the Hotels on Wednesday, May 7<sup>th</sup>
											(timetable will be established on the basis of attendees'
											arrivals)
										</span>
									</p> <span>Please fill in the following informations if
										interested.
										</p>
										<form
											id='arrivals'
											action="db.php"
											method="post">
											<table style="text-align: right;">
												<tr>
													<td>Surname:</td>
													<td><input
														type="text"
														name="surname"
														value="" /></td>
												</tr>
												<tr>
													<td>Name:</td>
													<td><input
														type="text"
														name="name"
														value="" /></td>
												</tr>
												<tr>
													<td>e-mail:</td>
													<td><input
														type="email"
														name="email"
														value="" /></td>
												</tr>
												<tr>
													<td>Airport of arrival:</td>
													<td><select name='airport'>
															<option selected="selected">---</option>
															<option>Milano Malpensa</option>
															<option>Torino Caselle</option>";
													</select></td>
												</tr>
												<tr>
													<td>Day and Italian hour of arrival (XX:XX 24h format
														please):</td>
													<td><input
														type="text"
														name="hour"
														value="" /></td>
												</tr>
												<tr>
													<td>Accompanying persons:</td>
													<td><input
														type="text"
														name="accompanying"
														value="0" /></td>
												</tr>
												<tr>
													<td>Day of leave:</td>
													<td><select name='leave'>
															<option selected="selected">---</option>
															<option>Friday, 9th (evening)</option>
															<option>Saturday, 10th (morning)</option>";
													</select></td>
												</tr>
												<tr>
													<td></td>
													<td><input
														type="submit"
														name="submit"
														value="Send" /></td>
												</tr>
											</table>
										</form> <br>
											<p>
												<span style="color: #db6d16">By train:</span> <br /> - from
												Turin to Ivrea (1 hour) then by taxi from Ivrea to
												Bioindustry Park (10 minutes). <br /> - from Milan to Turin
												(2 hours, change train in Chivasso) then by taxi from Ivrea
												to Bioindustry Park (10 minutes). <br /> Train Schedules:
												<a
													class="linkExternal"
													href="http://www.trenitalia.com/cms/v/index.jsp?vgnextoid=4ddd1a035296f310VgnVCM1000005817f90aRCRD">
													<span class='underline'>Trenitalia</span>
												</a>
											</p> <b>Hotel Information</b>
											<p>Each individual guest must make their own reservation by
												sending an email directly to the hotel.</p>
											<p>
												Reservations must be received <span style="color: #db6d16">BY
													THE END OF FEBRUARY</span>; late booking can lead to
												payment of higher rates or unavailability of rooms, so we
												advise prompt booking.
											</p>
											<p>
												<span class='underline'>A shuttle bus service will be
													organized from the Hotels to the Bioindustry Park on
													Thursday, May 8<sup>th</sup> and Friday, May 9<sup>th</sup>
												</span>
											</p> <a href="documents/HOTELS_CEST WORKSHOP.pdf">
												<span class='underline'>Hotel information</span>
											</a>&nbsp;<img
												src="images/updated.gif"
												alt='updated' /> <br /> <br /> <b>Visa Information</b>
											<p>
												<a
													class="linkExternal"
													href="http://www.esteri.it/MAE/EN/Ministero/Servizi/Stranieri/IngressoSoggiornoInItalia/">
													<span class='underline'>The Ministry of Foreign Affairs
														(general information about visiting Italy)</span>
												</a>
												<br />
												<a
													class="linkExternal"
													href="http://www.esteri.it/visti/home_eng.asp">
													<span class='underline'>Do I need a visa to enter Italy?</span>
												</a>
												<br />
												<a
													class="linkExternal"
													href="http://www.esteri.it/visti/rilascio_eng.asp">
													<span class='underline'>Where should I apply for a visa?</span>
												</a>
												<br />
											</p>
						
						</div>
					</div>
				</div>
			</div>
			<!-- subsection closing -->
		</div>
		<!-- subsection closing -->
		<div id='after'></div>
		<div id='footer'>
			<p>
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail 
			
			</p>
		</div>
		<!-- section closing -->
	</div>
	<!-- section closing -->
        
        <?php
        if ($_GET['confirm'] == 'yes') {
            echo '<script type="text/javascript">
                        alert("Thank you!\nYour request has been taken into account.");
                    </script>';
        } else if ($_GET['confirm'] == 'no') {
            echo '<script type="text/javascript">
                        alert("ATTENTION!\nemail field is mandatory!");
                    </script>';
        }
        ?>
        <!-- InstanceEnd -->
</body>
</html>
