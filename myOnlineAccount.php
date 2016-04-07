<?php ob_start();?>

<!--
Login form is pushed out by th nav bar include.
When loggin in, session data will not be set in time for the login page to be evaluated - subsequent logins will.
Therefore, on the myAccountPage - need to overwrite the Login Text to Log Out - perhaps the whole form so we can effect a demo log out.
Or - replicate the nav bar in the myOnlineAccount page.....
-->

<!-- HEAD BLOCK ================================================= -->
<?php include "inc/header.php"	?>
<?php include_once("analyticstracking.php") ?>
<!-- /HEAD BLOCK ================================================= -->

<?php

   

function getDataSFDC() {
	try{
		//$url = 'https://login.salesforce.com/services/oauth2/token';
		$url = 'https://polar-brook-3135.herokuapp.com/banking/authenticate';
		$fields = array(
			//'grant_type' => "password",
			'organization_key' => $_COOKIE["ModelOffice_SK"],
			//'client_secret' => "5335418582953686313",
			'username' => $_POST["username"],
			//'password' => "thunderhead3Qz2ZMPIMxShYMRayW3pdXMd0c"
		);


		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }

		$ch = curl_init($url);

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_POST, true);
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		//execute post
		$result = curl_exec($ch);

		//close connection
		curl_close($ch);

		$response=json_decode($result,true);
		$
		//$access_token = $response['access_token'];
		//$instance_url = $response['instance_url'];

		//echo $result;



		if (!isset($access_token) || $access_token == "") {
			die("Error - access token missing from session!");
		}

		if (!isset($instance_url) || $instance_url == "") {
			die("Error - instance URL missing from session!");
		}

		$query = "SELECT cust.Id, cust.Name, cust.Email, cust.Salutation, cust.FirstName, cust.LastName, cust.Status__c, cust.Membership_Level__c, cust.Total_AUM__c, cust.Total_Liabilities__c, cust.Total_Premiums__c, fsp.Name, fsp.Active__c,  fspi.Name , fspi.Description__c , fspi.Product_Category__c , fspi.Product_Type__c , fsp.Investment_AUM__c, fsp.Liability_Amount__c, fsp.Premium__c, ( SELECT fst.Description__c, fst.Transaction_Date__c, fst.Credit__c, fst.Debit__c from FS_Products__c.Transactions__r fst order by fst.Transaction_Date__c desc ) from FS_Products__c fsp, fsp.Customer__r cust, fsp.Product__r fspi WHERE Customer__r.Online_Login__c ='".$_SESSION['1stBank_UserName']."' order by fsp.name asc"; 
		
		$url = "$instance_url/services/data/v20.0/query?q=" . urlencode($query);

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: OAuth $access_token"));

    	$json_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($json_response, true);

   	 	return $response;
		
	}catch(Exception $e){
		var_dump($e);
	}  
}

function validateLogin ($login_response_in){
	$total_size = $login_response_in['totalSize']; //valid/invalid login indicator
	if ($total_size=="0") {
		setcookie("Customer1stBank_ONE","",1); //writes a blank cookie that expires from the client in 1 second
		$_SESSION["1stBank_UserName"] = "RESET";
		$redir=false;
		
	}
	else {
		
		(array) $recs = $login_response_in["records"];
		$customer = $recs[0]["Customer__r"];
		$firstname = $customer['FirstName'];
		$cust_email = $customer['Email'];
		$_SESSION["1stBank_CustomerEmail"]= $cust_email;
		$_SESSION["1stBank_FirstName"] = $firstname;
		setcookie("Customer1stBank_ONE",$customer["Id"]);
	}
}

function outputSFDCData($response_in) {
		
			(array) $recs = $response_in["records"];
			$customer = $recs[0]["Customer__r"];
			$firstname = $customer['FirstName'];

			echo '<h3>Welcome back ' . $firstname . '</h3>';
			echo '<div class="panel-group" id="accordion">';
									
			
			
			
			$index = 0;	


			foreach ((array) $response_in['records'] as $record) {
				$contact = $record["Customer__r"];
				$productItem = $record["Product__r"];
				$transactions = $record['Transactions__r'];
        	
				// output the heading panel (account overview) for the current account in the array
			
				//set the account icon image based on the product category
				if ($productItem['Product_Category__c'] == "Banking"){
					$image_icon = '<img src="themes/wealth_banking_theme/images/Blank-credit-card-MASTER.png" width="60"/>';
				}
				elseif ($productItem['Product_Category__c'] == "Savings"){
					$image_icon = '<img src="themes/wealth_banking_theme/images/template/icon2.png" />';
				}
				else {
					$image_icon = '<img src="themes/wealth_banking_theme/images/template/icon1.png" />';
				}
			
				echo '
				<div id="THaccountEntry' . $index . '" class="panel panel-default">
					<div class="panel-heading">
					
							<div id="" class="well wbRemoveBox">
								<h3 class="text-left wbItemTitleNoIcon">' . $productItem["Name"] . ' <small>' . $productItem["Description__c"] .'</small></h3>
									<div class="row">
										<div class="col-sm-2">
											' . $image_icon . '
										</div>
										<div class="col-sm-4">
											<strong>Acc No: </strong>' . $record["Name"] . '
										</div>							
										<div class="col-sm-2 col-sm-offset-4">
											<h4 class="text-right">$' . $record['Investment_AUM__c'];
										
											if (!strstr($record['Investment_AUM__c'], '.')) {
												echo '.00</h4>';
											}
											else {
												echo '</h4>';
											}
										
										
											echo '
											</h4>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse' . $index . '">
												<p class="wbMiniStatement">Mini Statement</p>
											</a>
										</div>
									</div>
							</div>
					</div>
					<div id="collapse' . $index . '" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="well wbRemoveBox">
						';
			
				// debug output - this will need use bootstrap structure
	        	//echo $contact['Id'] . ", " . $contact['Name'] . ", " . $contact['Salutation'] . ", " . $contact['FirstName'] . ", " . $contact['LastName'] . ", " .  $contact['Total_AUM__c'] . ", " .  $contact['Total_Liabilities__c'] . ", " .  $contact['Total_Premiums__c'] . ", " .  $record['Name'] . ", " .  $record['Active__c'] . ", " .  $productItem['Name'] . ", ".  $productItem['Product_Category__c'] . ", " .  $productItem['Product_Type__c'] . ", " .  $productItem['Description__c'] . ", " . $record['Investment_AUM__c'] . ", " .  $record['Liability_Amount__c'] . ", " .  $record['Premium__c'] . "<br/>";
        
				echo '<table class="table table-striped">
				      <thead>
				        <tr>
				          <th>Date</th>
				          <th>Description</th>
				          <th>In ($)</th>
				          <th>Out ($)</th>
				        </tr>
				      </thead>
				      <tbody>
	';
		
	        	foreach ((array) $transactions['records'] as $tx) {
					// as above (debug to bootstrap)
	         	   //echo "START TX:  " . $tx['Description__c']. ", " . $tx['Transaction_Date__c']. ", " . $tx['Credit__c']. ", " . $tx['Debit__c'] . ", " .   "<br/><br/>";
				   echo '<tr><td>' . date("j F Y", (strtotime($tx['Transaction_Date__c']))) . '</td><td>' . $tx['Description__c']. '</td><td>' . $tx['Credit__c']. '</td><td>' . $tx['Debit__c'] . '</td></tr>';
	        	}
	        
				echo ' </tbody>
		    </table>';
		 
			
				echo '</div></div></div></div>';
				$index = $index + 1;
	   	 	}
		
			echo '</div>';
		}

		//if records = 0 then:
			//clear Cookie
			//clear Session
			//Display register for online banking message
		//else display MyAccounts page



// Set up SESSION and COOKIE according to action prior to SFDC Connection.
// Then, according to action, call getDataSFDC() - this returns the $response object

if ($_POST["action"]=="logout") {
	//echo 'logout called';
	setcookie("Customer1stBank_ONE","",1); //writes a blank cookie that expires from the client in 1 second
	$_SESSION["1stBank_UserName"] = "RESET";
	$_SESSION["1stBank_MyAccount_Call"] = 0;
	$_SESSION["1stBank_Action"] = "logout";
	$redir=true;
	//echo 'You have logged out of Online Banking';
	//ensure the display form is correctly displayed
}
elseif ($_POST["action"]=="login"){
	//echo 'login called';
	$_SESSION["1stBank_UserName"] = $_POST["username"];
	$_SESSION["1stBank_MyAccount_Call"] = 0;
	$_SESSION["1stBank_Action"] = "login";
	$login_response = getDataSFDC();
	$redir=true;
	validateLogin($login_response);
	
}
else {
	//echo 'called from MyAccount page';
	//echo '<br>UserName in Session: ' . $_SESSION["1stBank_UserName"] . '<br>';
	//echo 'Cookie Value: ' . $_COOKIE["Customer1stONE"] . '<br>';
	$_SESSION["1stBank_MyAccount_Call"] = 1;
	$login_response = getDataSFDC();
	$redir=false;
	validateLogin($login_response);
									
}
//if($redir){ header("Location: myOnlineAccount.php",303);}

	
?>




	<body>
    <div class="container">
			<!-- NAVBAR BLOCK ================================================ -->
			<?php include "inc/navbar.php" ?>
			<!-- /NAVBAR BLOCK ================================================ -->
			
			<!--
				Are we being called from a login form?
				Check the $_POST["uname"] variable.
				If not null (check), then assign value to $_SESSION["client_email_addr"];
				Else check to see whether $_SESSION["client_email_addr"] is null
				If null then display a message - you must login.
				Else, execute the rest of the SFDC integration code.
			-->
			
			
			<div class="row">
				<div class="col-sm-12">
					<div id="" class="wbJumbotronBanner wbInvestBanner">
						<div class="row clearfix">
							<div class="col-sm-8 col-sm-offset-2">
                				<h1 class="text-center">My Accounts</h1>
							</div>
						</div>
            		</div>
				</div>
			</div>

			<div class="row clearfix wbFirstRow">
				<div class="col-sm-8">
					<div class="row clearfix">
						<div class="col-sm-12">
							<div id="" class="well wbRemoveBox">
								
								<?php
            
								//first thing is to see how this page is being called:
																
								if ($_POST["action"]=="logout") {
									//echo 'logout called';
									//setcookie("Customer1stBank_ONE","",1); //writes a blank cookie that expires from the client in 1 second
									//$_SESSION["1stBank_UserName"] = "RESET";
									//$_SESSION["1stBank_MyAccount_Call"] = 0;
									echo 'You have logged out of Online Banking';
									//ensure the display form is correctly displayed
								}
								elseif ($_POST["action"]=="login"){
									//$_SESSION["1stBank_UserName"] = $_POST["username"];
									//$_SESSION["1stBank_MyAccount_Call"] = 0;
									outputSFDCData($login_response);
									
								}
								else {
									//$_SESSION["1stBank_MyAccount_Call"] = 1;
									if ($_SESSION["1stBank_Action"] <> "logout") {
										$total_size = $login_response['totalSize']; //valid/invalid login indicator
										if ($total_size=="0") {
											echo 'Not registered for Online Banking';
										}
										else {
											outputSFDCData($login_response);
										}
									}
									elseif ($_SESSION["1stBank_Action"] == "logout") {
										echo 'You have logged out of Online Banking';
									}
																	
								}

								?>
								
								
								

							</div>
						</div>
					</div>
				</div>
            	<div class="col-sm-4">
                	<div class="row clearfix">
						<div class="col-sm-11 col-sm-offset-1">
							<div id="TH_MyAccounts_FeatureBox1">
								<div class="well wbFeatureBox wbBackgroundBlue">
									<h3 class="wbItemTitleNoIcon">Our Online Service:</h3>
									<ul>
										<li>Enables simple, everyday banking</li>
										<li>Accounts available in a range of currencies</li>
										<li>Add unlimited extra accounts</li>
										<li>Make payments and transfers easily</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-11 col-sm-offset-1">
							<div id="TH_MyAccounts_FeatureBox2">
								<div class="well wbFeatureBox wbBackgroundBlack">
									<h3 class="text-left wbItemTitleNoIcon">Related Products</h3>
									<ul>
										<li>Overdrafts</li>
										<li>Mortgages</li>
										<li>Multi-purpose Loans</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-11 col-sm-offset-1">
							<div id="TH_MyAccounts_FeatureBox3">
								<div class="well wbFeatureBox wbBackgroundGrey">
									<h3 class="text-left wbItemTitleNoIcon">Support</h3>
									<ul>
										<li>Rates and Fees</li>
										<li>Online and telephone banking</li>
										<li>Lost your cards?</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>              		
			</div>

			<!-- FOOTER BLOCK ================================================ -->
			<?php include "inc/footer.php" ?>
			<!-- /FOOTER BLOCK ================================================ -->
