<?php

// Set some values that are used across the board
switch($loc)
{
  case "UK":
	$currency_symbol = "&pound;";
	$lang_custom = "bespoke";
	$lang_ATM = "cash machine";
	$phone1 = "0345 123 4567";
	$phone2 = "0345 987 6543";
    break;
  case "AUS":
  	$currency_symbol = "$";	
    $lang_custom = "bespoke";
	$lang_ATM = "ATM";	
    $phone1 = "13 1234";
    $phone2 = "13 9876";
    break;
  case "NL":
  	$currency_symbol = "&euro;";
	$lang_custom = "custom";
	$lang_ATM = "geldautomaat";
	$phone1 = "+31 (0)20 - 1234 567";
	$phone2 = "+31 (0)20 - 9876 543";
    break;
  case "US":
  default:
  	$currency_symbol = "$";		  
	$lang_custom = "custom";
	$lang_ATM = "ATM";
	$phone1 = "(800) 555-1212";
	$phone2 = "(866) 555-1212";	
    break;
}

// Menu translations
$wealth_mgt_txt = "Wealth Management";
$wealth_mgt_txtNL = "Vermogensbeheer";

// Set values that are used more selectively
$everyday_banking_txt = "View our extensive range of current accounts for your everyday banking needs.";
$everyday_banking_txtNL = "Bekijk ons uitgebreide assortiment van de lopende rekeningen voor uw dagelijkse bankzaken .";

$credit_and_loans_txt = "Explore our attractive rates on a variety of lending including loans, credit cards and mortgages.";
$credit_and_loans_txtNL = "Ontdek onze aantrekkelijke tarieven op een verscheidenheid van leningen met inbegrip van leningen , creditcards en hypotheken .";

$investment_and_wealth_txt = "Build and design a portfolio with specialist advice from our experts.";
$investment_and_wealth_txtNL = "Bouwen en ontwerpen van een portfolio met gespecialiseerde advies van onze experts .";

$protected_txt = "YOU'RE PROTECTED WHEN YOU USE ONLINE BILL PAY";
$protected_txtNL = "U bent beschermd WANNEER U gebruik maken van online factuur te betalen";

$secure_pay_txt = "THE SECURE WAY TO PAY";
$secure_pay_txtNL = "De beveiligde manier om te betalen";

?>