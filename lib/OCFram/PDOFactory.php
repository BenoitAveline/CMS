<?php
namespace OCFram;

class PDOFactory
{
  public static function getMysqlConnexion()
  {
    //$db = new \PDO('mysql:host=avelineboa1.mysql.db;dbname=avelineboa1', 'avelineboa1', '3Jaafacnuas');
    $db = new \PDO('mysql:host=localhost;dbname=news', 'root', 'root');
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    
    return $db;
  }
}