<?php include "inc/header.php"	?>
<?php include_once("analyticstracking.php") ?>
<!-- /HEAD BLOCK ================================================= -->
	<body>
    <div class="container">
			<!-- NAVBAR BLOCK ================================================ -->
			<?php include "inc/navbar.php" ?>
			<!-- /NAVBAR BLOCK ================================================ -->
			
			
			<!-- ONE Connect Demo Factory - Optimisation Target - Jumbotron Banner-->
			<div class="row">
				<div class="col-sm-12">
					<div id="THsavingsPageBanner" class="wbJumbotronBanner wbInvestBanner">
						<div class="row clearfix">
							<div class="col-sm-2">
                				<h1>Savings</h1>
							</div>
							<div class="col-sm-6">
								<p>We have a range of savings accounts to meet your needs, whether you want instant access to your cash, a fixed rate or an account you can manage online..</p>
							</div>
						</div>
            		</div>
				</div>
			</div>
			<!-- /ONE Connect -->

			<div class="row clearfix wbFirstRow">
				<div class="col-sm-7">

	
					<div class="row clearfix">
						<div class="col-sm-11 col-sm-offset-1">
							
								<div class="panel-group" id="accordion">
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THsavingsProduct1" class="panel panel-default">
										<div class="panel-heading wbApplyOnline">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">Regular Savings Account</h3>
													<p>You’re just starting out and need a basic savings account.</p>
												</div>
											</a>
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Brief highlights</h4>
													<ul>
														<li><strong>Monthly Fee:</strong> <?php echo $currency_symbol;?>5</li>
														<li><strong>Minimum Opening Deposit:</strong> <?php echo $currency_symbol;?>25</li>
														<li><strong>Annual Percentage Yield(APY):</strong> 0.01%</li>
													</ul>
													<h3><a href="contact_us.php?product=C1B-PBANK-SAVE-STN">Request Info</a></h3>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THsavingsProduct3" class="panel panel-default">
										<div class="panel-heading wbApplyOnline">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<h3 class="text-left wbItemTitleNoIcon">High Yield Savings Account</h3>
													<p>You want better rates for a minimum deposit of <?php echo $currency_symbol;?>5,000</p>
												</a>
											</div>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Brief highlights</h4>
													<ul>
														<li><strong>Monthly Fee:</strong> <?php echo $currency_symbol;?>50</li>
														<li><strong>Minimum Opening Deposit:</strong> <?php echo $currency_symbol;?>5,000</li>
														<li><strong>Annual Percentage Yield(APY):</strong> 0.05%</li>
													</ul>
													<h3><a href="contact_us.php?product=C1B-PBANK-SAVE-HY">Request Info</a></h3>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->

									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THsavingsProduct4" class="panel panel-default">
										<div class="panel-heading wbApplyOnline">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
													<h3 class="text-left wbItemTitleNoIcon">Certificates of Deposits</h3>
													<p>You pick the term and earn a fixed rate of return, even during uncertain times</p>
												</a>
											</div>
										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Brief highlights</h4>
													<ul>
														<li><strong>Term:</strong> from 3 Months to 1 Year</li>
														<li><strong>Minimum Opening Deposit:</strong> from <?php echo $currency_symbol;?>2,500 to <?php echo $currency_symbol;?>100,000</li>
														<li><strong>Annual Percentage Yield(APY):</strong> from 1.5% to 2.27%</li>
													</ul>
													<h3><a href="contact_us.php?product=C1B-PBANK-SAVE-CD">Request Info</a></h3>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->

									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THsavingsProduct2" class="panel panel-default">
										<div class="panel-heading wbApplyOnline">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<h3 class="text-left wbItemTitleNoIcon">Money Market Savings Account</h3>
													<p>You want to earn more interest as your balance grows.</p>
												</a>
											</div>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Brief highlights</h4>
													<ul>
														<li><strong>Monthly Fee:</strong> <?php echo $currency_symbol;?>NO FEE</li>
														<li><strong>Minimum Opening Deposit:</strong> <?php echo $currency_symbol;?>25,000</li>
														<li><strong>Annual Percentage Yield(APY):</strong> Market Rate</li>
													</ul>
													<h3><a href="contact_us.php?product=C1B-PBANK-SAVE-MM">Request Info</a></h3>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->									
									
								</div>
								
						</div>
					</div>
					
					
				</div>
            	<div class="col-sm-5">
					<!-- ONE Connect optimisation target -->
					<div id="THtwoFeatureBox1">
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<div id="TH_MyAccounts_FeatureBox1">
									<div class="well wbFeatureBox wbBackgroundBlue" style="padding: 0px 10px 0px 10px">
										<div id="featureIcon" style="float: left;margin-top: 20px">
											<span title="Standard content">
												<img src="themes/wealth_banking_theme/images/icons/icon-location.png" width="75px" height="75px">
											</span>
										</div>
										<div id="featureContent" style="margin-left: 90px">
											<h3 class="text-left wbItemTitleNoIcon">Branch Locations</h3>
											<p class="text-centered" style="margin-bottom: 0px">Let us help you find a Customer 1st branch in your area or current location.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<!-- ONE Connect optimisation targer -->
								<div id="TH_MyAccounts_FeatureBox2">
									<div class="well wbFeatureBox wbBackgroundBlack" style="padding: 0px 10px 0px 10px">
										<div id="featureIcon" style="float: left;margin-top: 20px"><img src="themes/wealth_banking_theme/images/icons/icon-phone.png" width="75px" height="75px"></div>
										<div id="featureContent" style="margin-left: 90px">
											<h3 class="text-left wbItemTitleNoIcon">Contact Us</h3>
											<p class="text-centered" style="margin-bottom: 0px">Information needed to contact Customer 1st Bank on any channel in any part of the world</p>
										</div>
									</div>
								</div>
								<!-- /ONE Connect -->
							</div>
						</div>
					</div>
					<!-- /ONE Connect -->
					
					<!-- ONE Connect Optimisation targer -->
					<div id="THtwoFeatureBox2">
 					   <div class="row clearfix">
						   <div class="col-sm-11 col-sm-offset-1">
							   <!-- ONE Connect optimisation targer -->
							   <div id="TH_MyAccounts_FeatureBox3">
									<div class="well wbFeatureBox wbBackgroundGrey" style="padding: 0px 10px 0px 10px">
										<div id="featureIcon" style="float: left;margin-top: 20px"><img src="themes/wealth_banking_theme/images/icons/icon-question.png" width="75px" height="75px"></div>
										<div id="featureContent" style="margin-left: 90px">
											<h3 class="text-left wbItemTitleNoIcon">Frequent Questions</h3>
											<p class="text-centered" style="margin-bottom: 0px">We are here to help.  Explore information about the most frequently asked questions</p>
										</div>
									</div>
							</div>
						</div>
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<!-- ONE Connect optimisation targer -->
								<div id="TH_MyAccounts_FeatureBox4">
									<div class="well wbFeatureBox wbBackgroundPurple" style="padding: 0px 10px 0px 10px">
										<div id="featureIcon" style="float: left;margin-top: 20px"><img src="themes/wealth_banking_theme/images/icons/icon-report.png" width="75px" height="75px"></div>
										<div id="featureContent" style="margin-left: 90px">
											<h3 class="text-left wbItemTitleNoIcon">Financial Report</h3>
											<p class="text-centered" style="margin-bottom: 0px">Review the latest financial statements from the Customer 1st Group</p>
										</div>
									</div>
								<!-- /ONE Connect -->
								</div>
							</div>
						</div>
					</div>
					<!-- /ONE Connect -->
				</div>             		
			</div>


        <!-- /.row -->




			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->