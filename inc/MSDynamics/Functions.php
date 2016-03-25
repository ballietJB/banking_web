<?php
include 'Config.inc.php';
include 'CrmAccess.php';
include 'Library/Entity.php';

function GetAccess()
{
    return new CrmAccess(organizationServiceURL, liveIDUseranme, liveIDPassword, AppliesTo, false); //set to tru for screen debug
}

function Create(){
   
    try
    {    
        $access = GetAccess();

        $lead = new Entity("lead");
        $lead->AddAttribute("firstname", "My Php first lead", Types::string);
        $lead->AddAttribute("telephone2", "9222222", Types::string);
        $lead->AddAttribute("emailaddress1", "geral@rafaelrocha.net", Types::string);
        $lead->AddAttribute("leadsourcecode", 8, Types::picklist);  //website
        $lead->AddAttribute("donotsendmm", true, Types::boolean);
        $lead->AddAttribute("description", "oh yeah", Types::string);
        
        return $access->Create($lead);
       
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

}

function RetriveAndRetriveMultiple(){
   
    try
    {    
        $access = GetAccess();

        $result = $access->Retrive("<fetch distinct='false' mapping='logical' output-format='xml-platform' version='1.0'> <entity name='contact'> <attribute name='firstname'/> <attribute name='lastname'/> <attribute name='new_onlinelogin'/> <order descending='false' attribute='firstname'/> </entity> </fetch>");
       
        //Pegar na lista de casas e anular as que já se encontra reservadas
         foreach ($result as $key=>$value) { //array de Preços
             echo $value->GetAttributeValueByName("firstname");
             echo " ";
             echo $value->GetAttributeValueByName("lastname");
             echo " ";
             echo $value->GetAttributeValueByName("new_onlinelogin");
             echo "<p></p>";
         }
         
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    
}

function RetriveContact($onlineLogin){
   
    try
    {    
        $access = GetAccess();

        $result = $access->Retrive("<fetch mapping='logical' count='50' version='1.0'> <entity name='contact'> <attribute name='firstname'/> <attribute name='lastname'/> <attribute name='new_onlinelogin'/> <attribute name='contactid'/> <attribute name='new_accountbalance'/>  <attribute name='new_accountbalance2'/> <attribute name='new_accountbalance3'/> <attribute name='new_membershiplevel'/> <attribute name='annualincome'/> <filter type='and'> <condition attribute='new_onlinelogin' operator='eq' value='". $onlineLogin . "' /> </filter> </entity> </fetch>");

/* DEBUG CODE to print our query results
     
        //Pegar na lista de casas e anular as que já se encontra reservadas
         foreach ($result as $key=>$value) { //array de Preços
             echo $value->GetAttributeValueByName("firstname");
             echo " ";
             echo $value->GetAttributeValueByName("lastname");
             echo " ";
             echo $value->GetAttributeValueByName("new_onlinelogin");
             echo " ";
             echo $value->GetAttributeValueByName("new_accountbalance");
             echo " ";
             echo $value->GetAttributeValueByName("new_accountbalance2");
             echo " ";
             echo $value->GetAttributeValueByName("new_accountbalance3");
             echo " ";
             echo $value->GetAttributeValueByName("new_membershiplevel");
             echo " ";
             echo $value->GetAttributeValueByName("annualincome");
             echo " ";
             echo $value->GetAttributeValueByName("contactid");
             echo "<p></p>";
         }
         
*/         
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    
    return $result;
    
}

function UpdateContact($values, $entityid, $entitylogicname ){
    
    $contact = new Entity("contact");
    $contact->AddAttribute("new_membershiplevel", "Premier", Types::string);
    $contact->AddAttribute("contactid", "8FE4F254-6C63-E411-94FA-D89D67630DDC", Types::string);
    
    try
    {    
        $access = GetAccess();

        $result = $access->Update($contact );
         
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    
    return $result;
    
}


function Delete($guid)
{
    try
    {    
        $access = GetAccess();

        $access->Delete("lead", $guid );

    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }
    
}


?>

