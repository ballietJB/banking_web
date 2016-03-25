<?php

class Entity
{
    public $logicName;
    private $fields;
    public $id;
    
    public function Entity($logicName = ""){
       $this->logicName = $logicName; 
       $this->fields = array();
    }
    
    public function AddAttribute($name, $value, $type, $lookupLogicName="", $lookupName = ""){
        if($name == null)
        {
            echo "name is require";
            die;
        }
        $this->fields[$name]['type'] = $type;
        $this->fields[$name]['value'] = $value;
        $this->fields[$name]['lookupLogicName'] = $lookupLogicName; //for lookups, logicname
        $this->fields[$name]['lookupName'] = $lookupName; //for lookups, name = name of the systemuser for example
        //array_push($this->fields,  array($name => array($type, $value, $extras)));
       
    }
    
    public function GetAttributeByName($name){
        return $this->fields[$name];
    }
    
    public function GetAttributeValueByName($name){
        if($this->fields[$name] == null) 
            return null;
        else 
            return $this->fields[$name]["value"];
    }
    
    public function GetAttributeTypeByName($name){
        return $this->fields[$name]["type"];
    }
    
    public function GetAttributeLookupLogicByName($name){
        return $this->fields[$name]["lookupLogicName"];
    }
    
    public function GetAttributeLookupNameByName($name){
        return $this->fields[$name]["lookupName"];
    }
    
    
    public function GetAttributes(){
        return $this->fields;
    }
   
   
    
}

    
class Types
{
    const string = "string";
    const datetime = "datetime";  
    const boolean = "boolean";
    const int = "int";
    const lookup = "lookup";
    const decimal = "decimal";
    const picklist = "picklist";
    const money = "money";
    const aliasedValue = "AliasedValue"; //for retrive com colunas de outra tabela
}
?>
