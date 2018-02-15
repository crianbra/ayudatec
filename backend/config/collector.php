<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-221-234-62.compute-1.amazonaws.com");
define("DB_USER", "pigmwkcawyrbuu");
define("DB_PASS", "d36bf7d7f61744a2f19864e29e1f6379245090f571ad3c556306aeeeac45899d");
define("DB_NAME", "d277pii1e56jri");

/*
define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "ayudatec");*/


class Collector extends DataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
