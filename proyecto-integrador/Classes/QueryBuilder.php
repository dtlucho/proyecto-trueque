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
        $username = $usuario->getUsername();
        $email = $usuario->getUsername();
        $password = $usuario->getPassword();
        $role = $usuario->getRole();

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username :email, :password, role)");

        $stmt->bindParam(':username', $role, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_INT);

        $stmt->execute();

        $results = $query->fetch(PDO::FETCH_ASSOC);
    }

}