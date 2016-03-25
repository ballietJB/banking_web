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
							<div class="col-sm-4">
                				<h1>Find a Product</h1>
							</div>
							<div class="col-sm-8">
								<!--<p>Whether you choose to invest directly or to seek advice, we have a range of products and services to help meet your needs.</p>-->
							</div>
						</div>
            		</div>
				</div>
			</div>
			<!-- /ONE Connect -->

			<div class="row clearfix wbFirstRow">
				<div class="col-sm-7">
					<div class="row clearfix">
						
							<div class="well wbRemoveBox">
								<div class="panel-group" id="accordion">
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THinvestmentProduct1" class="panel panel-default">
										<!-- <div class="panel-heading wbInvestProduct wbOfferedProduct">
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
										</div> -->
									</div>
									<!-- /ONE Connect -->
								</div>
							</div>
								
						<div id="THproductSelectorFormContainer">						
							<div class="well wbRemoveBox">
								<form id="THproductSelectorForm" action="product_selector_results.php" method="POST" class="form-horizontal wbProductSelectorForm">
								<fieldset>

								<div id="THformFieldWrapper">
								<!-- Form Name -->
								<legend>Investment Product Selector</legend>

								<!-- Multiple Checkboxes (inline) -->
								<div class="control-group">
								  <label class="control-label" for="checkboxes">Are you an Existing Customer?</label>
								  <div class="controls">
								    <label class="checkbox inline" for="checkboxes-0">
								      <input type="checkbox" name="existing_customer" id="checkboxes-0" value="Yes">
								      Yes
								    </label>
								  </div>
								</div>

								<!-- Appended Input-->
								<div class="control-group">
								  <label class="control-label" for="appendedtext">Amount to Invest</label>
								  <div class="controls">
								    <div class="input-append">
								      <input id="target_value" name="invest_value" class="input-medium inputbox" placeholder="amount" type="text" required="">
								      <span class="add-on">.00</span>
								    </div>
								    <p class="help-block">Enter the amount you are looking to invest</p>
								  </div>
								</div>
								
								<!-- Select Basic-->
								<div class="control-group">
								  <label class="control-label" for="selectbasic">Attitude to Risk:</label>
								  <div class="controls">
								    <select id="select_risk" name="invest_risk" class="input-medium inputbox">
								      <option>Low</option>
								      <option>Medium</option>
								      <option>High</option>
								    </select>
								  </div>
								</div>

								<!-- Select Basic -->
								<div class="control-group">
								  <label class="control-label" for="selectbasic">Over how many years?</label>
								  <div class="controls">
								    <select id="select_term" name="invest_term" class="input-medium inputbox">
								      <option>3</option>
								      <option>4</option>
								      <option>5</option>
								      <option>10</option>
								      <option>20</option>
								    </select>
								  </div>
								</div>

								<!-- Select Basic -->
								<div class="control-group">
								  <label class="control-label" for="selectbasic">What is the purpose of the investment?</label>
								  <div class="controls">
								    <select id="select_purpose" name="invest_purpose" class="input-large inputbox">
								      <option>Education</option>
								      <option>Retirement</option>
								      <option>Life Event</option>
								      <option>Home Improvements</option>
								      <option>Other</option>
								    </select>
								  </div>
								</div>
							</div>
								<!-- Button -->
								<div class="control-group">
								  <label class="control-label" for="singlebutton"></label>
								  <div class="controls">
								    <input type="submit" value="Submit" id="singlebutton" name="singlebutton" class="btn btn-inverse"/>
								  </div>
								</div>

								</fieldset>
								</form>
								
								
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