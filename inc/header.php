<?php
	session_start();
	// ONE-DEMO PARAMETER
	//check for the ONE-DEMO parameter on the URL $_GET["ONE-DEMO"]
	//If set to true or false then update $_SESSION["ONE-DEMO"]
	
	// Test the value in $_SESSION["ONE-DEMO"]
	// Accepted values are 1 (true) or 0 (false) - anything else is set to false.
	// True = turn optimisations on - so deploy the ONE Tag
	// False = turn optimisations off - so view the default experience
	// If null then assume false and set $_SESSION[@ONE-DEMO] to false

	if ($_GET["ONE-DEMO"] == "1") {
		$_SESSION["ONE-DEMO"] = "1";
	}
	elseif ($_GET["ONE-DEMO"] == "0") {
		$_SESSION["ONE-DEMO"] = "0";
	}
	
	if (!isset($_SESSION["ONE-DEMO"])) {
		$_SESSION["ONE-DEMO"] = 0;
	}


    include "inc/constants.php";
    // sk PARAMETER
	// Test sk from URL.
	//   If sk was passed, then set a cookie with it and store in $sk
	// if not passed, then check to see if there's already a cookie
	//   If cookie, then set $sk to cookie value.
	//   If no cookie, then set $sk to default site key value and set a cookie with it.
	
	if (isset($_GET['sk']))
	{
	  $sk = $_GET['sk'];
	  setcookie("ModelOffice_SK", $sk, time()+60*60*24*30);
	}
	else
	{
	  if (isset($_COOKIE['ModelOffice_SK']))
	    $sk = $_COOKIE['ModelOffice_SK'];
      else
      {
        $sk = DEFAULT_SITE_KEY;
	    setcookie("ModelOffice_SK", $sk, time()+60*60*24*30);
	  }
	}
	
    // loc PARAMETER
	// Test loc from URL.
	//   If loc was passed, make sure it is either US or UK, then store it in $loc and set a cookie with it.
	// if not passed, then check to see if there's already a cookie
	//   If cookie, then set $loc to cookie value.
	//   If no cookie, then set $loc to default LOC value and set a cookie with it.
	
	if (isset($_GET['loc']))
	{
	  $loc = $_GET['loc'];
	  switch($loc)
	  {
	    case "UK":
		case "uk":
		  $loc = "UK";
		  break;
	    case "AUS":
		case "aus":
		  $loc = "AUS";
		  break;
	    case "NL":
		case "nl":
		  $loc = "NL";
		  break;
		default:
		  $loc = "US";
		  break;
	  }
	  setcookie("ModelOffice_LOC", $loc, time()+60*60*24*30*12);
	}
	else
	{
	  if (isset($_COOKIE['ModelOffice_LOC']))
	    $loc = $_COOKIE['ModelOffice_LOC'];
      else
      {
        $loc = "US";
	    setcookie("ModelOffice_LOC", $loc, time()+60*60*24*30*12);
	  }
	}
    include "inc/location_constants.php";
	
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		// JY insert $sk into script below
		if ($_SESSION["ONE-DEMO"]==true) {?>
			<script type='text/javascript'> (function() { var onetag = document.createElement('script'); onetag.id = 'thxTag'; onetag.type = 'text/javascript'; onetag.async = true; onetag.src = 'https://onedemo.thunderhead.com/one/rt/js/one-tag.js?siteKey=<?php echo $sk;?>'; var firstScriptElement = document.getElementsByTagName('script')[0]; firstScriptElement.parentNode.insertBefore(onetag, firstScriptElement); })(); </script>
		
		<?php } ?>

		<title>Customer 1st Website - <?php if ($_SESSION["ONE-DEMO"] == "1"){echo "Optimised";} elseif ($_SESSION["ONE-DEMO"] == "0"){echo "Default";}?></title>
		<meta charset="utf-8"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
		<meta name="description" content=""></meta>
		<meta name="author" content=""></meta>

			<!-- THEME BLOCK ================================================ -->
			<?php include "wealth_banking_theme.php" ?>
			<!-- /THEME BLOCK ================================================ -->

	</head>