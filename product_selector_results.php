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
							<div class="col-sm-3">
                				<h1>Find A Product</h1>
							</div>
							<div class="col-sm-9">
								<p>Here are your suggested investment products</p>
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
							<div class="well wbRemoveBox">
								<h3 class="">Suitable products found:</h3>
								<p>Based the information you supplied we have identified the following products:</p>
								<ul>
									<li><strong>Existing Customer:</strong> <?php if ($_SESSION["ONE-DEMO"]=="1") {echo $_SESSION["1stBank_FirstName"];} else {echo $_POST["existing_customer"];}?></li>
									<li><strong>Risk Preference:</strong> <?php echo $_POST["invest_risk"];?></li>
									<li><strong>Amount to Invest:</strong> <?php echo $currency_symbol . $_POST["invest_value"];?>.00</li>
									<li><strong>Term</strong> <?php echo $_POST["invest_term"];?> years</li>
									<li><strong>Purpose</strong> <?php echo $_POST["invest_purpose"];?></li>
								</ul>
							</div>
							<div id="THOnlineChatInsert"></div>
							<div class="well wbRemoveBox">
								<div class="panel-group" id="accordion">
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THinvestmentProduct1" class="panel panel-default">
										<div class="panel-heading wbInvestProduct">
											<div id="" class="well wbRemoveBox">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													<h3 class="text-left wbItemTitleNoIcon">Mutual Funds</h3>
													<p>An investment choice that pools your money with other investors and can help diversify your investments</p>
													<ul>
														<li>You want a diverse portfolio</li>
														<li>You could benefit from a money manager</li>
														<li>You want lower trading costs</li>
													</ul>
												</a>
											</div>
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
								<!-- ONE Connect optimisation targer -->
								<div id="THfeatureBox1" class="well wbFeatureBox wbBackgroundBlue">
    								<h3 class="text-left wbItemTitleNoIcon">Contact Us</h3>
									<p>&nbsp; &nbsp;• &nbsp; Access the online form<br>
									</div>
									<!-- /ONE Connect -->
								</div>
							</div>
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<!-- ONE Connect optimisation targer -->
								<div id="THfeatureBox2" class="well wbFeatureBox wbBackgroundBlack">
                					<h3 class="text-left wbItemTitleNoIcon">Related Products</h3>
									<p>&nbsp; &nbsp;• &nbsp; Tradition Funds<br>
									&nbsp; &nbsp;• &nbsp; Structured Products<br>									
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
							   	<div id="THfeatureBox3" class="well wbFeatureBox wbBackgroundGrey">
                					<h3 class="text-left wbItemTitleNoIcon">Support</h3>
									<p>&nbsp; &nbsp;• &nbsp; Rates and Fees<br>
									&nbsp; &nbsp;• &nbsp; Online and telephone banking<br>
								</div>
								<!-- /ONE Connect -->
							</div>
						</div>
                		<div class="row clearfix">
							<div class="col-sm-11 col-sm-offset-1">
								<!-- ONE Connect optimisation targer -->
								<div id="THfeatureBox4" class="well wbFeatureBox wbBackgroundPurple">
                					<h3 class="text-left wbItemTitleNoIcon">Investment Report</h3>
									<p class="text-centered">Customer 1st, in partnership with Thunderhead Investments, examines the impact of customer engagement on portfolio performance.</p>
								</div>
								<!-- /ONE Connect -->
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