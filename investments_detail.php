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
					<div id="THsavingsPageBanner" class="wbJumbotronBanner wbSavingsBanner">
						<div class="row clearfix">
							<div class="col-sm-4">
                				<h1>Investments</h1>
							</div>
							<div class="col-sm-8">
								<p>Whether you choose to invest directly or to seek advice, we have a range of products and services to help meet your needs.</p>
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
							<div id="TH_DefaultInvestProductList">
								<div class="panel-group" id="accordion">
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THinvestmentProduct1" class="panel panel-default">
										<div class="panel-heading wbInvestProduct">
											<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">Mutual Funds</h3>
													<p>An investment choice that pools your money with other investors and can help diversify your investments</p>
													<ul>
														<li>You want a diverse portfolio</li>
														<li>You could benefit from a money manager</li>
														<li>You want lower trading costs</li>
													</ul>
												</div>
											</a>
										</div>
										<div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Mutual Funds are pools of funds which are collected from many investors allowing for a diversification of the investment portfolio</h4>
													<ul>
														<li>Access to professionally managed, diversified portfolios of equities, bonds and other securities</li>
														<li>Pool your money together with other investors to share risk</li>
														<li>Lower trading costs allow for ease of entry into this type of investment</li>
														<li>An opportunity to pool investments in foreign markets with expert management</li>
														<li>Financial Advice provided on tax liabilities as part of our expert management offering</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THinvestmentProduct2" class="panel panel-default">
										<div class="panel-heading wbInvestProduct">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<h3 class="text-left wbItemTitleNoIcon">Bonds</h3>
													<p>Fixed-income securities</p>
													<ul>
														<li><?php echo $loc;?> Treasuries Bonds for regular interest payments</li>
														<li>Corporate bonds for high yields</li>
														<li>International and emerging markets bonds for experts</li>
													</ul>
												</a>
											</div>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Bonds allow for investors to invest a lump sum which can go into a variety of funds and are driven based on the investors level of risk</h4>
													<ul>
														<li>Opportunity to invest in bonds across the world including emerging markets</li>
														<li>Variety of levels of risk from <?php echo $loc;?> Treasury bonds through to international bonds</li>
														<li>Wide selection of corporate bonds for investors looking to undertake a more significant risk</li>
														<li><?php echo $loc;?> Treasury Bonds suitable for a low risk regular interest payments</li>
														<li>A minimum level of investment is required with <?php echo $currency_symbol;?>12000 per transaction</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THinvestmentProduct3" class="panel panel-default">
										<div class="panel-heading wbInvestProduct">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<h3 class="text-left wbItemTitleNoIcon">Annuities</h3>
													<p>Looking for a way to save for retirement? Get a fixed-rate or variable annuity</p>
													<ul>
														<li>You don't want contribution limits</li>
														<li>You want to be able to generate lifetime income</li>
														<li>You want to defer tax until you start withdrawing</li>
													</ul>
												</a>
											</div>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Brief highlights</h4>
													<p>Annuities are suitable for those looking for a long term investment with a means of securing steady cash flow at a later point in life</p>
													<ul>
														<li>Annuities are well positioned for investors who are looking to generate a lifetime income</li>
														<li>Defer tax payments until you decide to start to withdraw</li>
														<li>No limits on contributions allowing for continuous investment</li>
														<li>Opportunity to invest long term for purposes such as retirement</li>
														<li>Choice of annuities - investment-linked, variable (flexible), fixed term, joint life, escalating and single life</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THinvestmentProduct4" class="panel panel-default">
										<div class="panel-heading wbInvestProduct">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
													<h3 class="text-left wbItemTitleNoIcon">Advisory Accounts</h3>
													<p>Put the power of our Financial Advisors to work for you</p>
													<ul>
														<li>You'd like help managing your portfolio</li>
														<li>You prefer the help of professional money managers</li>
														<li>You want a customized strategy to help you manage your investment portfolio</li>
													</ul>
												</a>
											</div>
										</div>
										<div id="collapseFour" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Brief highlights</h4>
													<p>Advisory Accounts service allows for your broker to make some limited investment decisions based on an understanding of the clients investment goals and risk toleranc</p>
													<ul>
														<li>Leverage financial experts to customise your investment portfolio with limited involvement</li>
														<li>Suitable for investors who do not wish to manage their portfolio directly</li>
														<li>Fee structure based on an annual fee based on a percent of assets held rather than trading commission fees</li>
														<li>Access to a wider range of investments including IPO stock and lower cost mutual funds</li>
														<li>Investments made on behalf of the client based on their level of risk and investment goals</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
            	<div class="col-sm-5">
					<!-- ONE Connect optimisation target -->
					<div id="THtwoFeatureBox1">
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<div id="TH_Invest_FeatureBox1">
									<div class="well wbFeatureBox wbBackgroundBlue" style="padding: 0px 10px 0px 10px">
										<div id="featureIcon" style="float: left;margin-top: 20px"><img src="themes/wealth_banking_theme/images/icons/icon-location.png" width="75px" height="75px"></div>
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
								<div id="TH_Invest_FeatureBox2">
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
							   <div id="TH_Invest_FeatureBox3">
									<div class="well wbFeatureBox wbBackgroundGrey" style="padding: 0px 10px 0px 10px">
										<div id="featureIcon" style="float: left;margin-top: 20px"><img src="themes/wealth_banking_theme/images/icons/icon-question.png" width="75px" height="75px"></div>
										<div id="featureContent" style="margin-left: 90px">
											<h3 class="text-left wbItemTitleNoIcon">Frequent Questions</h3>
											<p class="text-centered" style="margin-bottom: 0px">We are here to help.  Explore information about the most frequently asked questions</p>
										</div>
									</div>
								</div>
							</div>
						</div>
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<!-- ONE Connect optimisation targer -->
								<div id="TH_Invest_FeatureBox4">
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