<div class="row clearfix above-menu">
	<div class="col-sm-4 column">
	<a href="index.php"><img width="250" alt="140x140" src="themes/wealth_banking_theme/images/logo/logo.png" /></a>
	
	<?php
	// Menu / Navbar language.  Implemented later in this file.  Search for 'Language-specific menu items'
	if (isset(${"wealth_mgt_txt".$loc})) $wealth_mgt_menu=${"wealth_mgt_txt".$loc}; else $wealth_mgt_menu=$wealth_mgt_txt;
	
	ob_start();
	if ((substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1))=="Webchat_form.php" || (substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1))=="Webchat_form2.php") {
		echo  '</div>';
	}
	elseif (isset($_SESSION["1stBank_UserName"]) && ($_SESSION["1stBank_UserName"] != "RESET")) {
		//check above reference
		//output log out button and hide the rest of the form
		echo '

			</div>
	        <form action="myOnlineAccount.php" method="POST">
	            <div class="col-sm-3 col-sm-offset-1">
	                <div class="input-group">
					Logged in as ' . $_SESSION["1stBank_FirstName"] . '
	                </div>
	            </div>
	            <div class="col-sm-3">
	                <div class="input-group">
					<a href="myOnlineAccount.php">My Accounts</a>
	                </div>
	            </div>
	            <div class="col-sm-1">
					<input type="hidden" name="action" value="logout" />
					<input id="wbCustomerLoginButton" type="submit" name="Submit" class="button" value="Log Out" autocomplete="off" />
	            </div>
			</form>
			
			';
	}
	else {
		
		echo '
			<div class="">
				<button type="button" class="login-navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar">Press here to Login</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	        <form action="myOnlineAccount.php" method="POST">
	            <div class="col-sm-3 col-sm-offset-1">
	                <div class="input-group">
						<input id="wbCustomerLoginUserName" type="text" name="username" class="form-control inputbox" value="Login" onblur="if(this.value==\'\') this.value=\'Login\';" onfocus="if(this.value==\'Login\') this.value=\'\';" />
	                </div>
	            </div>
	            <div class="col-sm-3">
	                <div class="input-group">
						<input id="wbCustomerLoginPassword" type="password" name="password" class="form-control inputbox" value="Password" onblur="if(this.value==\'\') this.value=\'Password\';" onfocus="if(this.value==\'Password\') this.value=\'\';" />
	                </div>
	            </div>
	            <div class="col-sm-1">
					<input type="hidden" name="action" value="login" />
					<input id="wbCustomerLoginButton" type="submit" name="Submit" class="button" value="Log In" autocomplete="off" />
	            </div>
			</form>
			</div>
			
			';
	}
	
	?>
	
        
</div>

<?php
	if ((substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1))=="Webchat_form.php") {
		
	}
	else {
		echo '
		<div class="row clearfix wbCollapse-menu">
	<div class="col-sm-12 column">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--
				<ul class="nav navbar-nav sf-menu">
					<li class="active">
						<a href="#">Link</a>
					</li>
				</ul>
				-->
				<ul class="nav sf-menu navbar-nav navbar-left">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Banking</a>
						<ul class="dropdown-menu">
							<li>
								<a href="accounts.php">Overview</a>
							</li>
							<li>
								<a href="#">Checking *</a>
							</li>
							<li>
								<a href="savings_detail.php">Savings & Deposits</a>
							</li>
							<li>
								<a href="prepaid-cards-detail.php">Debit & Prepaid Cards</a>
							</li>
							<li>
								<a href="online-banking-detail.php">Online Banking</a>
							</li>
							<li>
								<a href="online-billpay-detail.php">Online Bill Pay</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Loans & Credit</a>
						<ul class="dropdown-menu">
							<li>
								<a href="loans-and-credit.php">Overview</a>
							</li>
							<li>
								<a href="mortgages-detail.php">Mortgage Loans</a>
							</li>
							<li>
								<a href="home-LOC-detail.php">Home Equity Lines</a>
							</li>
							<li>
								<a href="loans-detail.php">Auto Loans</a>
							</li>
							<li>
								<a href="loans-detail.php">Personal Loans</a>
							</li>
							<li>
								<a href="cards-detail.php">Credit Cards</a>
							</li>
							
						</ul>
					</li>
					
					<li class="dropdown">
					    <!-- Example of Language-specific menu items.  More code at top of this file. -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">' . $wealth_mgt_menu . '</a>
						<ul class="dropdown-menu">
							<li>
								<a href="investments_detail.php">Solutions</a>
							</li>
							<li>
								<a href="wealth_insight_details.php">Insights & News</a>
							</li>							
							<li>
								<a href="product_selector_form.php">Find a Product</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Small Business</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Business Checking *</a>
							</li>
							<li>
								<a href="#">Small Business Loans *</a>
							</li>
							<li>
								<a href="#">Merchant Services *</a>
							</li>
							<li>
								<a href="#">Insurance *</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Commercial</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Products & Services *</a>
							</li>
							<li>
								<a href="#">Industry Expertise *</a>
							</li>
							<li>
								<a href="#">Insights *</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Awards *</a>
							</li>
							<li>
								<a href="contact_us.php">Contact Us</a>
							</li>
							<li>
								<a href="demo_info.php">Demo Info</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div> ';
	}
	
	?>
