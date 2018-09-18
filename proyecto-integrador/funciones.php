<?php
session_start();

require("helpers.php");

function validate($data){
    $errors = [];

    $name = trim($data['name']);
    if($name == "") {
        $errors['name'] = "Ingrese Nombre y Apellido";
    }


    $username = trim($data["username"]);
    if($username == ""){
        $errors["username"] = "Ingrese nombre de usuario";
    }


    $email = trim($data['email']);
    if($email == "") {
        $errors['email'] = "Ingrese un email";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "El email no es valido";
    }


    $password = trim($data['password']);
    $cpassword = trim($data['cpassword']);

    if($password == "") {
        $errors['password'] = "Ingrese una contraseña";
    } elseif($password < 4) {
        $errors['password'] = "La contraseña debe ser de al menos 4 caracteres";
    }

    if($password != $cpassword) {
        $errors['cpassword'] = "Las contraseñas no coinciden";
    }


    if(!isset($data['confirm'])) {
        $errors['confirm'] = "Acepte los terminos y condiciones";
    }

    return $errors;

}


function validateAvatar($data) 
{
    $errores = [];

    $username = $data["username"];
    
    if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
        $nombre = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];
        
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        if($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            $errores["avatar"] = "Solo acepto formatos jpg y png";
            return $errores;
        }

        $miArchivo = dirname(__FILE__);
        $miArchivo = $miArchivo . "/img/";
        $miArchivo = $miArchivo. "perfil" . $username . "." . $ext;
        move_uploaded_file($archivo, $miArchivo);

    } else {
        $errores["avatar"] = "Hubo un error al procesar el archivo";
    }
    return $errores;

}


function photoPath($data)
{
    $username = $data["username"];
    
    $nombre = $_FILES["avatar"]["name"];
    
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = "perfil" . $username . "." . $ext;
    
    return $miArchivo;
    
}


function createUser($data)
{
    $usuario = [
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        'role' => 1
    ];

    $usuario['id'] = idGenerate();

    return $usuario;

}

function idGenerate()
{
    $file = file_get_contents("users.json");

    if($file == "") {
        return 1;
    }

    $users = explode(PHP_EOL, $file);
    array_pop($users);

    $lastUser = $users[count($users) - 1];
    $lastUser = json_decode($lastUser, true);

    return $lastUser['id'] + 1;

}


function saveUser($user)
{
    $jsonUser = json_encode($user);
    file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
}

function dbConnect()
{
    $db = file_get_contents('users.json');
    $arr = explode(PHP_EOL, $db);
    array_pop($arr);

    foreach($arr as $user) {
        $usersArray[] = json_decode($user, true);
    }

    return $usersArray;

}

function dbEmailSearch($email)
{
    $users = dbConnect();
    foreach($users as $user) {
        if($user['email'] === $email) {
            return $user;
        }
    }
    return null;
}

function login($user)
{
    $_SESSION['email'] = $user['email'];
    setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");
}

function logout()
{
    if(!isset($_SESSION)) {
        session_start();
    }
    session_destroy();
    setcookie('email', null, time() -1);
    redirect('register.php');

}

?>