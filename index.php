<?php
include "inc/header.php";
include_once "analyticstracking.php";
?>
<!-- /HEAD BLOCK ================================================= -->

	<body>
		<div class="container">

			<!-- NAVBAR BLOCK ================================================ -->
			<?php include "inc/navbar.php"; ?>
			<!-- /NAVBAR BLOCK ================================================ -->



			<!-- CONTENT BLOCK ===============================================	-->
			<!-- 2 row layout, 2 columns in 1st row, 3 columns in 2nd row		-->

			<!-- ONE Connect Demo Factory - Optimisation Target - Jumbotron -->
				<!-- Please maintain the class="col-md-12 column" setting for the TH-mainBanner-container div -->
				<!-- Main picture is set in the CSS - via class custombanners, so you can either keep and overlay additional images or remove the class entry -->
			<div class="row clearfix">
				<div id="THmainBanner-container" class="col-sm-12 column">
					<div id="THmainBanner-content" class="jumbotron custombanners">
						<a href="#" class="ban1"><img class="wbBanImg1" src="themes/wealth_banking_theme/stories/banner1.png" alt=""></a>
						<a href="#" class="ban2"><img class="wbBanImg2" src="themes/wealth_banking_theme/stories/banner2.png" alt=""></a>
					</div>
				</div>
			</div>
			<!-- /ONE Connect -->
			
			
			<!-- ONE Connect Demo Factory - Optimisation Target - Entire row -->
			<!-- This row employs nested columns - so either replace the entire rwo, the 2 columns split 7/5 or all columns-->
			<div class="row clearfix" id="THfirstLevelContent" >
				<div class="col-sm-12 wbWidthFix column wbFirstRow">
					<div class="row clearfix">
						<div class="col-sm-7 wbWidthFix column">
					<!-- ONE Connect Demo Factory - Optimisation Target - nested row -->
					<!-- Nest row - can replace - if using columns, width must total 12 -->
						<div id="wbNextMeeting">
						</div>
					<div id="THfirstLevelContentNestedRow" class="row clearfix">
						<div class="col-sm-4 wbWidthFix column">
							<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
							<!-- Keep the current page layout but overlay content -->
							<div id="THeveryDayBankingContent" class="well wbRemoveBox">
								<h3 class="text-left wbItemTitle dollar"><a href="accounts.php">Everyday Banking</a></h3>
								
<!-- 
     The next line of code is an example of how to make blocks of text language-specific, without ruining the other languages
     1. Copy the standard text to the location_constants.php file.  Use it to define a variable like $varname_txt
     2. Make a new copy of that line with your location code at the end of the variable name, and your translated text within the quotes.
     3. In the page, replace the basic text with the syntax you see below, between the start-php tag and the end-php tag. Insert your new varname from #1 in ALL 3 places.
     4. You do NOT have to define the text for each language, just the one associated with YOUR loc, AND the standard/basic one (w/ no loc identifier).
 -->
								<p><?php if (isset(${"everyday_banking_txt".$loc})) echo ${"everyday_banking_txt".$loc}; else echo $everyday_banking_txt;  //LANGUAGE SPECIFIC TEXT?>
								
								<p><a class="btn wbReadMore" href="accounts.php">Read More</a></p>
							</div>
							<!-- /ONE Connect -->
						</div>
						<div class="col-sm-4 wbWidthFix column">
							<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
							<!-- Keep the current page layout but overlay content -->
							<div id="THcreditLoansContent" class="well wbRemoveBox">
								<h3 class="text-left wbItemTitle credit"><a href="#">Credit &amp; Loans</a></h3>
								<p><?php if (isset(${"credit_and_loans_txt".$loc})) echo ${"credit_and_loans_txt".$loc}; else echo $credit_and_loans_txt;  //LANGUAGE SPECIFIC TEXT?></p>
								<p><a class="btn wbReadMore" href="#">Read More</a></p>
							</div>
							<!-- /ONE Connect -->
						</div>
						<div class="col-sm-4 wbWidthFix column">
							<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
							<!-- Keep the current page layout but overlay content -->
							<div id="THinvestmentContent" class="well wbRemoveBox">
								<h3 class="text-left wbItemTitle investment"><a href="#">Investment &amp; Wealth</a></h3>
								<p><?php if (isset(${"investment_and_wealth_txt".$loc})) echo ${"investment_and_wealth_txt".$loc}; else echo $investment_and_wealth_txt; ?></p>
								<p><a class="btn wbReadMore" href="#">Read More</a></p>
							</div>
							<!-- /ONE Connect -->
						</div>
					</div>
					<!-- /ONE Connect -->
				</div>					
						<div class="col-sm-5 wbWidthFix column">
							<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
							<!-- Keep the current page layout but overlay content -->
							<div  id="THserviceMessageFirstLevel" class="well wbRemoveBox">
								<h2 class="text-left title"><span><?php if (isset(${"secure_pay_txt".$loc})) echo ${"secure_pay_txt".$loc}; else echo $secure_pay_txt; ?>:</span> Bill Pay</h2>
								<h3 class="wbAltItemTitle"><?php if (isset(${"protected_txt".$loc})) echo ${"protected_txt".$loc}; else echo $protected_txt; ?></h3>
							</div>
							<!-- /ONE Connect -->
						</div>
					</div>
				</div>
			</div>
			<!-- /ONE Connect-->
			
			<!-- ONE Connect Demo Factory - Optimisation Target - Row Content-->
			<div class="row clearfix wbSecondRow">
				<div class="col-sm-4 column">
					<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
					<!-- Keep the current page layout but overlay content -->
					<div id="THrightAccountContent" class="well wbFooter">
						<h3 class="text-left wbItemPost"><span>01.</span> Find The Right Account</h3>
						<p>Offering a wide range of benefits along with low overdraft rates, we’re confident you’ll find a current account to match your needs.</p>
						<p><strong>From additional benefits like motor breakdown, mobile phone insurance, airport lounge access through to exclusive rates and products.</strong></p>
						<p><a class="btn wbReadMore" href="#">Read More</a></p>
					</div>
					<!-- /ONE Conenct -->
				</div>
				<div class="col-sm-4 column">
					<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
					<!-- Keep the current page layout but overlay content -->
					<div id="THrightCardContent" class="well wbFooter">
						<h3 class="text-left wbItemPost"><span>02.</span> Choose The Right Card</h3>
						<p>See how our cards compare with a great range of benefits. Choosing has never been so easy with our new credit card comparison tool.</p>
						<p><strong>Benefit from our low annual fees, competitive 0% balance transfers, cashback on purchases, low APR and additional product benefits.</strong></p>
						<p><a class="btn wbReadMore" href="#">Read More</a></p>
					</div>
					<!-- /ONE Conenct -->
				</div>
				<div class="col-sm-4 column">
					<!-- ONE Connect Demo Factory - Optimisation Target - Column Content -->
					<!-- Keep the current page layout but overlay content -->
					<div id="THgrowSavingsContent" class="well wbFooter">
						<h3 class="text-left wbItemPost"><span>03.</span> Grow Your Savings Tax-Free</h3>
						<p class="wbColour">We offer competitive rates on all of our tax free savings accounts, including instant access, fixed rate as well as our investment stocks and shares savings. </p>
						<p><strong>Ensure you make use of your annual allowance early and look forward to the additional savings by early July.</strong></p>
						<p><a class="btn wbReadMore" href="#">Read More</a></p>
					</div>
					<!-- /ONE Conenct -->
				</div>
			</div>
			<!-- /ONE Connect -->
			<!-- /CONTENT BLOCK ===============================================	-->


			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->