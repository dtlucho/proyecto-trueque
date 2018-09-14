<?php
session_start();

require("helpers.php");

function validate($data){
    $errors = [];

    $name = trim($data['name']);
    if($name == "") {
        $errors['name'] = "Ingrese Nombre y Apellido!";
    }

    $username = trim($data["username"]);

    if($username == ""){
        $errors["username"] = "Ingrese nombre de usuario!";
    }

    $email = trim($data['email']);

    if($email == "") {
        $errors['email'] = "Ingrese un email!";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "El email no es valido";
    }

    $password = trim($data['password']);
    $cpassword = trim($data['cpassword']);
    
    if($password == "") {
        $errors['password'] = "Ingrese contraseña";
    } elseif($password < 4) {
        $errors['password'] = "La contraseña debe ser de al menos 4 caracteres!";
    }

    if($password != $cpassword) {
        $errors['cpassword'] = "Las contraseñas no coinciden";
    }

    if(!isset($data['confirm'])) {
        $errors['confirm'] = "Aceptar los terminos y condiciones";
    }

    return $errors;

}



?>