<?php
include_once "Library/LiveIDManager.php";
include_once "Library/EntityUtils.php";

class CrmAccess
{
	var $liveIDManager;
	var $securityData;
	var $domainname;
	var $CRMURL;
	var $debug = false;
	
	public function CrmAccess($endpoint, $username, $password, $AppliesTo, $turnOndebug)
	{
		$this->liveIDManager = new LiveIDManager();
		
		$this->CRMURL = $endpoint;
		
		$domainname = substr($endpoint,8,-1);
                $pos = strpos($domainname, "/");
                $this->domainname = substr($domainname,0,$pos);

		$this->debug = $turnOndebug;
		
		$this->securityData = $this->liveIDManager->authenticateWithLiveID($endpoint, $username, $password, $AppliesTo, true );
		
		if($this->securityData!=null && isset($this->securityData)){
			if($this->debug )
			{
				 echo ("<br/>Key Identifier:" . $this->securityData->getKeyIdentifier());
				 echo ("<br/>Security Token 1:" . $this->securityData->getSecurityToken0());
				 echo ("<br/>Security Token 2:" . $this->securityData->getSecurityToken1());
			}
		}else{
			throw new Exception("Unable to authenticate LiveId.");
		}
	}
	
	public function Execute($request)
	{
		return  LiveIDManager::GetSOAPResponse("/Organization.svc", $this->domainname, $this->CRMURL, $request);
	}
	
	public function Create(Entity $entity)
	{
		$Request = EntityUtils::getCreateCRMSoapHeader($this->CRMURL, $this->securityData);
                        
                $values = "";
                foreach ($entity->GetAttributes() as $key=>$value) {
                    
                    switch ($value['type']) {
                        case Types::datetime:
                            $values .= $this->GetDateTimeAttribute($key, $value['value']);    
                            break;
                        case Types::string:
                            $values .=$this->GetStringAttribute($key, $value['value']);   
                            break;
                        case Types::boolean:
                             $values .=$this->GetBooleanAttribute($key, $value['value']);    
                            break;
                        case Types::decimal:
                            $values .= $this->GetDecimalAttribute($key, $value['value']);    
                            break;
                        case Types::int:
                            $values .=$this->GetIntAttribute($key, $value['value']);   
                            break;
                        case Types::picklist:
                             $values .=$this->GetPickListAttribute($key, $value['value']);    
                            break;
                         case Types::lookup:
                             $values .=$this->GetLookupAttribute($key, $value['value'], $value['lookupLogicName']);    
                            break;
                        case Types::money:
                             $values .=$this->GetMoneyAttribute($key, $value['value']);    
                            break;
                        default:
                            break;
                    }
              
                }
 
       $Request .= '<s:Body>
                    <Create xmlns="http://schemas.microsoft.com/xrm/2011/Contracts/Services">
                    <entity xmlns:b="http://schemas.microsoft.com/xrm/2011/Contracts" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
                        <b:Attributes xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic">'.$values.'</b:Attributes>
                        <b:EntityState i:nil="true"/>
                        <b:FormattedValues xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic"/>
                        <b:Id>00000000-0000-0000-0000-000000000000</b:Id>
                        <b:LogicalName>'.$entity->logicName.'</b:LogicalName>
                        <b:RelatedEntities xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic"/>
                    </entity>
                    </Create>
                </s:Body>
            </s:Envelope>
			';
			
		if($this->debug)
			echo "<p></p>Request:".$Request;
		
		$response = $this->Execute($Request);
       
	   if($this->debug)
			echo "<p></p>Response = ".$response;
			
        $createResult ="";
        if($response!=null && $response!=""){
            
            preg_match('/<CreateResult>(.*)<\/CreateResult>/', $response, $matches);
            $createResult =  $matches[1];
            
            if($createResult == null || $createResult == "")
            {
                 preg_match('/<s:Text (.*)>(.*)<\/s:Text>/', $response, $matches); //mensagem técnica do erro
                 throw new Exception($matches[0]);
            }
        }
        else
        {
            throw new Exception('Response is null!');
	}	
			
            return $createResult;
	}
	
        public function Retrive($fetchQuery)
        {
            $Request = EntityUtils::getCRMSoapHeader($this->CRMURL, $this->securityData) .
            '<s:Body>
                        <Execute xmlns="http://schemas.microsoft.com/xrm/2011/Contracts/Services">
                                <request i:type="b:RetrieveMultipleRequest" xmlns:b="http://schemas.microsoft.com/xrm/2011/Contracts" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
                                        <b:Parameters xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic">
                                                <b:KeyValuePairOfstringanyType>
                                                        <c:key>Query</c:key>
                                                        <c:value i:type="b:FetchExpression">
                                                                <b:Query>
                                                                  '.htmlentities($fetchQuery).'  
                                                                </b:Query>
                                                        </c:value>
                                                </b:KeyValuePairOfstringanyType>
                                        </b:Parameters>
                                        <b:RequestId i:nil="true"/><b:RequestName>RetrieveMultiple</b:RequestName>
                                </request>
                        </Execute>
                        </s:Body>
                </s:Envelope> ';
            
            	
		if($this->debug)
			echo "<p></p>Request:".$Request;
		
		$response = $this->Execute($Request);
       
                if($this->debug)
                             echo "<p></p>Response = ".$response;

            $EntityCollection = array();
            if($response!=null && $response!=""){

                $responsedom = new DomDocument();
                $responsedom->loadXML($response);
                $entities = $responsedom->getElementsbyTagName("Entity");
                foreach($entities as $entity){
                        
                        $record = new Entity();
 
                        $kvptypes = $entity->getElementsbyTagName("KeyValuePairOfstringanyType");
                       
                        foreach($kvptypes as $kvp){
                                
                            //<c:value i:type="b:EntityReference"> aqui tem mais props
                            //<c:value i:type="b:OptionSetValue"> 
                            //Get Type of Attribute
                            $nodeList = $kvp->getElementsbyTagName("value")->item(0);
                            
                            $type;
                          
                             foreach ($nodeList->attributes as $attr) { //Get Type of Attribute
                               //echo "<h1>".$attr->nodeName."</h1>";
                               //echo "<h1>".$attr->nodeValue."</h1>"; 
                                if($attr->nodeName == "i:type" && $attr->nodeValue == "b:EntityReference")
                                {
                                    $type = Types::lookup;
                                    break;
                                }else if($attr->nodeName == "i:type" && $attr->nodeValue == "b:OptionSetValue")
                                {
                                    $type = Types::picklist;
                                    break;
                                }else if($attr->nodeName == "i:type" && $attr->nodeValue == "d:dateTime")
                                {
                                    $type = Types::datetime;
                                    break;
                                }
                                else if($attr->nodeName == "i:type" && $attr->nodeValue == "d:boolean")
                                {
                                    $type = Types::boolean;
                                    break;
                                }
                                else if($attr->nodeName == "i:type" && $attr->nodeValue == "d:boolean")
                                {
                                    $type = Types::boolean;
                                    break;
                                }
                                else if($attr->nodeName == "i:type" && $attr->nodeValue == "d:guid"){
                                    
                                    $record->id = $kvp->getElementsbyTagName("value")->item(0)->textContent; //PrimaryKEY
                                
                                }else if($attr->nodeName == "i:type" && $attr->nodeValue == "b:AliasedValue"){ //quando tem colunas de outra entidade
                                    $type = Types::aliasedValue;
                                }
                                else
                                {
                                    $type = null; //todo complete
                                }
                              }

                               $key =  $kvp->getElementsbyTagName("key")->item(0)->textContent;

                                if ($type == Types::lookup) {
                                   
                                    $entityRef = $kvp->getElementsbyTagName("value")->item(0);

                                    $value = $entityRef->getElementsbyTagName("Id")->item(0)->textContent;
                                    $logicName = $entityRef->getElementsbyTagName("LogicalName")->item(0)->textContent;
                                    $name = $entityRef->getElementsbyTagName("Name")->item(0)->textContent;
                                    
                                    $record->AddAttribute($key, $value, $type,$logicName, $name); 
                                    
                                }else if($type == Types::aliasedValue){ //para colunas de outra tabela
                                   
                                    $entityRef = $kvp->getElementsbyTagName("value")->item(0);
                                    
                                    $value = $entityRef->getElementsbyTagName("Value")->item(0)->textContent; //nao funciona bem quando a coluna é entityreference
                                    $logicName = $entityRef->getElementsbyTagName("EntityLogicalName")->item(0)->textContent; //nome da entidade
                                    $name = $entityRef->getElementsbyTagName("AttributeLogicalName")->item(0)->textContent; //nome do campo
                                    
                                    $record->AddAttribute($key, $value, $type,$logicName, $name); 
                                    
                                }else{
                                   //por aqui outros tipos.
                                    $value =  $kvp->getElementsbyTagName("value")->item(0)->textContent;
                                    $record->AddAttribute($key, $value, null); //i don´t now the type
                                }						
                        }
                        
                        $EntityCollection[] = $record;
                }
            } 
            else
            {
            throw new Exception('Response is null!');
            }
            
            return $EntityCollection;
        }
        
        public function Update(Entity $entity)
        {
            
            $values = "";
                foreach ($entity->GetAttributes() as $key=>$value) {
                    
                    switch ($value['type']) {
                        case Types::datetime:
                            $values .= $this->GetDateTimeAttribute($key, $value['value']);    
                            break;
                        case Types::string:
                            $values .=$this->GetStringAttribute($key, $value['value']);   
                            break;
                        case Types::boolean:
                             $values .=$this->GetBooleanAttribute($key, $value['value']);    
                            break;
                        case Types::decimal:
                            $values .= $this->GetDecimalAttribute($key, $value['value']);    
                            break;
                        case Types::int:
                            $values .=$this->GetIntAttribute($key, $value['value']);   
                            break;
                        case Types::picklist:
                             $values .=$this->GetPickListAttribute($key, $value['value']);    
                            break;
                         case Types::lookup:
                             $values .=$this->GetLookupAttribute($key, $value['value'], $value['lookupLogicName']);    
                            break;
                        case Types::money:
                             $values .=$this->GetMoneyAttribute($key, $value['value']);    
                            break;
                        default:
                            break;
                    }
              
                }
            
             $Request = EntityUtils::getUpdateCRMSoapHeader($this->CRMURL, $this->securityData).
            '<s:Body><Update xmlns="http://schemas.microsoft.com/xrm/2011/Contracts/Services">
                <entity xmlns:b="http://schemas.microsoft.com/xrm/2011/Contracts" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
                    <b:Attributes xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic">
                        '.$values.'
                    </b:Attributes>
                    <b:EntityState i:nil="true"/>
                    <b:FormattedValues xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic"/>
                    <b:Id>'.$entity->id.'</b:Id>
                    <b:LogicalName>'.$entity->logicName.'</b:LogicalName>
                    <b:RelatedEntities xmlns:c="http://schemas.datacontract.org/2004/07/System.Collections.Generic"/>
                </entity></Update>
            </s:Body>
        </s:Envelope>';
        
       	if($this->debug)
			echo "<p></p>Request:".$Request;
		
		$response = $this->Execute($Request);
       
	   if($this->debug)
			echo "<p></p>Response = ".$response;
        
            return $response;
        }

        
        public function Delete($logicaName, $id)
        {
             $Request = EntityUtils::getDeleteCRMSoapHeader($this->CRMURL, $this->securityData).
            '<s:Body>
                <Delete xmlns="http://schemas.microsoft.com/xrm/2011/Contracts/Services">
                    <entityName>'.$logicaName.'</entityName>
                    <id>'.$id.'</id>
                </Delete>
            </s:Body>
            </s:Envelope>';

            if($this->debug)
                            echo "<p></p>Request:".$Request;

                    $response = $this->Execute($Request);

               if($this->debug)
                            echo "<p></p>Response = ".$response;

            return $response;
        }
        
	private function GetStringAttribute($fieldname, $value)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value i:type="d:string" xmlns:d="http://www.w3.org/2001/XMLSchema">'.$value.'</c:value></b:KeyValuePairOfstringanyType>';
	}
		
	private function GetLookupAttribute($fieldname, $value, $logicName)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value i:type="b:EntityReference" xmlns:b="http://schemas.microsoft.com/xrm/2011/Contracts"><b:Id>'.$value.'</b:Id><b:LogicalName>'.$logicName.'</b:LogicalName><b:Name i:nil="true"/></c:value></b:KeyValuePairOfstringanyType>';
        }
	
	private function GetBooleanAttribute($fieldname, $value)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value i:type="d:boolean" xmlns:d="http://www.w3.org/2001/XMLSchema">'.$value.'</c:value></b:KeyValuePairOfstringanyType>';
	}
	
	private function GetDecimalAttribute($fieldname, $value)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value xmlns:d="http://www.w3.org/2001/XMLSchema" i:type="d:decimal">'.$value.'</c:value></b:KeyValuePairOfstringanyType>';
	}
        
        private function GetMoneyAttribute($fieldname, $value)
	{
            return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value xmlns:b="http://schemas.microsoft.com/xrm/2011/Contracts" i:type="b:Money"><b:Value>'.$value.'</b:Value></c:value></b:KeyValuePairOfstringanyType>';    
	}
	
	private function GetDateTimeAttribute($fieldname, $value)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value xmlns:d="http://www.w3.org/2001/XMLSchema" i:type="d:dateTime">'.$value.'</c:value></b:KeyValuePairOfstringanyType>';
	}
	
	private function GetPickListAttribute($fieldname, $value)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value xmlns:b="http://schemas.microsoft.com/xrm/2011/Contracts" i:type="b:OptionSetValue"><b:Value>'.$value.'</b:Value></c:value></b:KeyValuePairOfstringanyType>';    
        }
	
	private function GetIntAttribute($fieldname, $value)
	{
		return '<b:KeyValuePairOfstringanyType><c:key>'.$fieldname.'</c:key><c:value xmlns:d="http://www.w3.org/2001/XMLSchema" i:type="d:int">'.$value.'</c:value></b:KeyValuePairOfstringanyType>';
	}
}
?>
