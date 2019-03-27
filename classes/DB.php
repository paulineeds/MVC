<?php
class DB {
        protected static $host = "remotemysql.com";
        protected static $dbname = "1cXacgnh39";
        protected static $user = "1cXacgnh39";
        protected static $pass = "x2s2SzTiN8";
        
        private static function connect() {
                $pdo = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname.';charset=utf8',self::$user, self::$pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }
        public static function query($query, $params = array()) {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);
                
                if (explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
                }
        }
}
