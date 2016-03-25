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
					<div id="" class="wbJumbotronBanner wbAccountBanner">
						<div class="row clearfix">
							<div class="col-sm-8 col-sm-offset-2">
                				<h1 class="text-center">Contact Us</h1>
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
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THtelephoneContact" class="panel panel-default">
										<div class="panel-heading">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<div id="" class="well wbRemoveBox">
													<h3 class="text-left wbItemTitleNoIcon">By Telephone</h3>													
												</div>
											</a>
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<h4>Customer Service: <?php echo $phone1;?></h4>
													<h4>Online Banking Support: <?php echo $phone2;?></h4>
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THonlineFormContact" class="panel panel-default">
										<div class="panel-heading">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													<h3 class="text-left wbItemTitleNoIcon">Online Form</h3>
												</a>
											</div>
										</div>
										<div id="collapseTwo" class="panel-collapse in">
											<div class="panel-body">
												<div class="well wbRemoveBox">
													<form class="form-horizontal">
													<fieldset>

													<!-- Form Name -->
													<legend></legend>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="textinput">First Name</label>
													  <div class="controls">
													    <input id="firstName" name="textinput" type="text" placeholder="Last Name" class="input-xlarge">
    
													  </div>
													</div>

													<div class="control-group">
													  <label class="control-label" for="textinput">Last Name</label>
													  <div class="controls">
													    <input id="lastName" name="textinput" type="text" placeholder="Last Name" class="input-xlarge">
    
													  </div>
													</div>

													<!-- Text input-->
													<div class="control-group">
													  <label class="control-label" for="textinput">Email Address</label>
													  <div class="controls">
													    <input id="emailAddress" name="textinput" type="text" placeholder="Email Address" class="input-xlarge" required="">
    
													  </div>
													</div>

													<!-- Selector -->
													<div class="control-group">
													  <label class="control-label" for="textarea">Reason for Contact</label>
													  <div class="controls">                     
														    <select id="selectReason" name="contactReason" class="input-medium inputbox">
														      <option>Product / Service Packet Request</option>
														      <option>Medium</option>
														      <option>High</option>
														    </select>
													  </div>
													</div>
													<p>
													<div class="control-group">
													  <a id="requestLink" href="processing.php" class="btn btn-default">Send Request</a>
													</div>
													</fieldset>
													</form>
													
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									<!-- ONE Connect Optimisation Target - replace header and panel of product entry -->
									<!-- Need to follow the Accordian structure -->
									<div id="THonlineAgentContact" class="panel panel-default">
										<div class="panel-heading">
											<div id="" class="well wbRemoveBox">
						                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													<h3 class="text-left wbItemTitleNoIcon">Online Agent</h3>
												</a>
											</div>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<div class="well wbRemoveBox">


<a id="liveagent_button_online_573b0000000LAd5" href="javascript://Chat" style="display: none;" onclick="liveagent.startChat('573b0000000LAd5')">
	<img src="themes/wealth_banking_theme/images/online_chat.png" />
</a>
<div id="liveagent_button_offline_573b0000000LAd5" style="display: none;">
	<img src="themes/wealth_banking_theme/images/offline_chat.png" />
</div>

<script type="text/javascript">
if (!window._laq) { window._laq = []; }
window._laq.push(function(){liveagent.showWhenOnline('573b0000000LAd5', document.getElementById('liveagent_button_online_573b0000000LAd5'));
liveagent.showWhenOffline('573b0000000LAd5', document.getElementById('liveagent_button_offline_573b0000000LAd5'));
});
</script>

												
												</div>
											</div>
										</div>
									</div>
									<!-- /ONE Connect -->
									
									
						</div>
					</div>
				</div>
			</div>





			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->