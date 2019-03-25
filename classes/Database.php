<?php
class Database {
  protected static $host = "remotemysql.com";
  protected static $dbname = "1cXacgnh39";
  protected static $user = "1cXacgnh39";
  protected static $pass = "x2s2SzTiN8";
  
  private static function con() {
    $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8", self::$user, self::$pass);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  public static function query($query, $params = array()) {
    $stmt = self::con()->prepare($query);
    $stmt->execute($params);
    $data = $stmt->fetchAll();
    return $data;
  }
}
?>