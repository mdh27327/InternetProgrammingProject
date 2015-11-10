<?php

$GLOBALS['dbname'] = "sql595597";
$GLOBALS['user'] = "sql595597";
$GLOBALS['pass'] = "xK2%zU4*";
$GLOBALS['host'] = "sql5.freemysqlhosting.net";
$GLOBALS['driver'] = "mysql";

/**
 * Host: sql5.freemysqlhosting.net
Database name: sql595597
Database user: sql595597
Database password: xK2%zU4*
Port number: 3306


 */


class Database {
   
    private $dbName;
    private $user;
    private $pass;
    private $host;
    private $driver;
    private $connString;
    function __construct() {
        $this->setDbName($GLOBALS['dbname']);
        $this->setHost($GLOBALS['host']);
        $this->setUser($GLOBALS['user']);
        $this->setPass($GLOBALS['pass']);
        $this->setDriver($GLOBALS['driver']);
        $this->setConnString();
        
    }
    
    /*** Getters and Setters *****************************************************/
    
    private function setDbName($name){
        $this->dbName = $name;
    }
    
    private function setUser($user){
        $this->user = $user;
    }
    private function setPass($pass){
        $this->pass = $pass;
    }
    
    private function setHost($host){
        $this->host = $host;
    }
    
    private function setDriver($driver){
        $this->driver = $driver;
    }
    
    private function setConnString()
    {
        $this->connString = $this->driver.':host='.$this->host.';dbname='.$this->dbName;
    }
    
    /******** create db object*******************/
    
    public function queryDb($sql,$bind,$binder)
    {
       try{
           $db = new PDO($this->connString,$this->user,$this->pass);
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $result = $db->prepare($sql);
           $result->bindValue($binder,$bind);
           $result->execute();
           
           
      
        
        }
        catch (Exception $ex)
        {
           return $ex->getMessage();
     
        }
        
        return $result;
        
    }
    
    public function execDb($sql)
    {
        try{
           $db = new PDO($this->connString,$this->user,$this->pass);
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $res = $db->exec($sql);
           
           
      
        
        }
        catch (Exception $ex)
        {
           return $ex->getMessage();
     
        }
        
        return $res;
    }
}

