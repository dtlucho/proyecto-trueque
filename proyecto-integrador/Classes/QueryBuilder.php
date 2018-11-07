<?php

class QueryBuilder {
    public static function index($tabla, $base)
    {
        $query = $base->prepare("SELECT * FROM $tabla");
        $query->execute();

        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public static function show($base, $tabla, $id)
    {
        $query = $base->prepare("SELECT * FROM $tabla WHERE id = $id");
        $query->execute();
        
        $resultados = $query->fetch(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public static function createUser($usuario, $pdo)
    {
        $name = $usuario->getName();
        $username = $usuario->getUsername();
        $email = $usuario->getEmail();
        $password = $usuario->getPassword();
        $password = password_hash($password, PASSWORD_DEFAULT);
        $role = $usuario->getRole();

        $stmt = $pdo->prepare ("INSERT INTO users(name, username, email, password, role) VALUES (:name, :username, :email, :password, :role)");
        
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_INT);
        



        $stmt->execute();
        
    }

    public static function buscarPorEmail($pdo, $email)
    {
        $stmt = $pdo->query("SELECT * FROM users WHERE email = $email");
        $stmt->execute();

    }

}