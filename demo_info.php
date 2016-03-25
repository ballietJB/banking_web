<?php include "inc/header.php"	?>
<?php include_once("analyticstracking.php") ?>
<!-- /HEAD BLOCK ================================================= -->
	<body>
    <div class="container">
			<!-- NAVBAR BLOCK ================================================ -->
			<?php include "inc/navbar.php" ?>
			<!-- /NAVBAR BLOCK ================================================ -->

<?php
  $sk  = $_COOKIE['ModelOffice_SK'];
  $loc = $_COOKIE['ModelOffice_LOC'];
?>			
			
			<!-- ONE Connect Demo Factory - Optimisation Target - Jumbotron Banner-->
			<div class="row">
				<div class="col-sm-12">
					<div id="" class="wbJumbotronBanner wbAccountBanner">
						<div class="row clearfix">
							<div class="col-sm-8 col-sm-offset-2">
                				<h1 class="text-center">Demo Info</h1>
							</div>
						</div>
            		</div>
				</div>
			</div>
			<!-- /ONE Connect -->

			<div class="row clearfix wbFirstRow">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="well wbRemoveBox">
						<div class="panel-group" id="accordion">
									<!-- Need to follow the Accordian structure -->
									<div id="ParametersSection" class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseParameterSection">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">Passing Parameters</h3>													
												</div>
											</a>
										</div>
										<div id="collapseParameterSection" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
												    <h4><b>ONE-DEMO</b>&nbsp;&nbsp;&nbsp;&nbsp;to control optimizations</h4>
													&nbsp;&nbsp;1 turns optimizations on.  0 turns optimizations off.  Default is 0.
													
													<h4>&nbsp;</h>
													
													<h4><b>sk</b>&nbsp;&nbsp;&nbsp;&nbsp;to set your Site Key</h4>
													It will be cookied for 30 days.<br>
													&nbsp;&nbsp;If sk is NOT in URL, it will be read from cookie.<br>
													&nbsp;&nbsp;If sk AND cookie are absent, sk is set to default (<?php echo DEFAULT_SITE_KEY;?>).<br>
													&nbsp;&nbsp;Edit /inc/constants.php to change the default site key.
													
													<h4>&nbsp;</h4>
													
												    <h4><b>loc</b>&nbsp;&nbsp;&nbsp;&nbsp;to control Location settings (US, UK, AUS or NL)</h4>
													&nbsp;&nbsp;It will be cookied for 365 days.<br>
													&nbsp;&nbsp;If loc is NOT in URL, it will be read from cookie.<br>
													&nbsp;&nbsp;If loc AND cookie are absent, loc is set to US.
												</div>
											</div>
										</div>
									</div>
									
									<div id="CookieSection" class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseCookieSection">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">Cookie Values</h3>													
												</div>
											</a>
										</div>
										<div id="collapseCookieSection" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>ONE-DEMO: <?php echo $_SESSION["ONE-DEMO"]; ?></h4>												
													<h4>Current Site Key: <?php echo $sk;?></h4>
													<h4>Location: <?php echo $loc; ?></h4>
													<h4>&nbsp;&nbsp;Currency Symbol: <?php echo $currency_symbol; ?></h4>
													<h4>&nbsp;&nbsp;Sample Phone #: <?php echo $phone1 . '&nbsp;&nbsp;&&nbsp;&nbsp;' . $phone2;?></h4>
													<h4>&nbsp;&nbsp;Lang &quot;custom&quot;: <?php echo ucfirst($lang_custom);?></h4>
													<h4>&nbsp;&nbsp;Lang &quot;ATM&quot;: <?php echo ucwords($lang_ATM);?></h4>
												</div>
											</div>
										</div>
									</div>
									
									
									<div id="LanguageSection" class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseLanguageSection">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">Language Variation based on LOC</h3>													
												</div>
											</a>
										</div>
										<div id="collapseLanguageSection" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>To make language-specific text on a page based on your location</h4>
     <ol>
     <li>Copy the standard text to the location_constants.php file.  Use it to define a variable<br>&nbsp;&nbsp;&nbsp;Ex: <i>$thanks_txt=&quot;Thank you very much.&quot;;</i></li>
     <li>Make a new copy of that line with your location code at the end of the variable name, and your translated text within the quotes.<br>&nbsp;&nbsp;&nbsp;Ex: <i>$thanks_txtNL = &quot;Danke veel&quot;;</i></li>
     <li>In the page, replace the basic text with the syntax you see below, between the start-php tag and the end-php tag. Insert your new varname from #1 in ALL 3 places.<br>
          &nbsp;&nbsp;&nbsp;<i>&lt;?php if (isset(${"<u>thanks_txt</u>".$loc})) echo ${"<u>thanks_txt</u>".$loc}; else echo $<u>thanks_txt</u>; ?></i>
	 </li>
     <li>You do NOT have to define the text for each language, just the one associated with YOUR loc, AND the standard/basic one (w/ no loc identifier).</li>
	 <li>See the code in <i>index.php</i> and <i>location_constants.php</i> for a working example.  (Dutch on index.php)</li>
	 </ol>
	 
													<h4><hr>To make language-specific menu-items based on your location</h4>
     <ol>
     <li>Copy the standard text to the location_constants.php file.  Use it to define a variable<br>&nbsp;&nbsp;&nbsp;Ex: <i>$wealth_mgt_txt=&quot;Wealth Management.&quot;;</i></li>
     <li>Make a new copy of that line with your location code at the end of the variable name, and your translated text within the quotes.<br>&nbsp;&nbsp;&nbsp;Ex: <i>$wealth_mgt_txtNL = &quot;Vermogensbeheer&quot;;</i></li>
     <li>In <i>navbar.php</i>, insert a line at the top that looks like:<br>
		  &nbsp;&nbsp;&nbsp;<i>if (isset(${"wealth_mgt_txt".$loc})) $wealth_mgt_menu=${"wealth_mgt_txt".$loc}; else $wealth_mgt_menu=$wealth_mgt_txt;</i>
	 </li>
	 <li>Then replace the standard menu text with a reference to the variable you just defined:<br>
	      &nbsp;&nbsp;&nbsp;Old value: <i>Wealth Management</i><br>
		  &nbsp;&nbsp;&nbsp;New value: <i>' . $wealth_mgt_menu . '</i>
	 </li>
     <li>You do NOT have to define the text for each language, just the one associated with YOUR loc, AND the standard/basic one (w/ no loc identifier).</li>
	 <li>See the code in <i>navbar.php</i> and <i>location_constants.php</i> for a working example.  (Dutch on menu)</li>
	 </ol>
	 
													
													
												</div>
											</div>
										</div>
									</div>
									
									
									<div id="NotesSection" class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNotesSection">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">Demo Notes</h3>													
												</div>
											</a>
										</div>
										<div id="collapseNotesSection" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Menu items with * in them do NOT currently link to any pages.</h4>
													<h4>Menu items with ^ in them point to pages that need to be edited.</h4>
													<h4>Social icons in footer not working.</h4>
													<h4>Localization not working on myOnineAccount page after logging in.</h4>
												</div>
											</div>
										</div>
									</div>

									
						</div>
					</div>
				</div>
			</div>





			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->