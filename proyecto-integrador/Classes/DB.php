<?php

class DBConnector {

public static function ConnectDB()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=trueque_db;port=3306;charset=utf8mb4';
        $db_user = 'root';
        $db_pass = '';
        $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    
        try { 
            return $pdo = new PDO($dsn, $db_user, $db_pass, $opt);
        } catch(PDOException $error) {
            $errores = $error->getMessage();
            return $errores;
        }
    }

}