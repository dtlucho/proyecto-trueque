<?php
function dd(...$param)
{
    echo "<pre>";
    die(var_dump($param));
}

// Errores en if ternario
function old($field)
{
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function check()
{
    return isset($_SESSION['email']);
}

function guest()
{
    return !check();
}

function checkRole($email)
{
    // 1 = Usuario comun
    // 2 = Admin
    // 3 = Super Admin
    $user = dbEmailSearch($email);
    if($user['role'] == 2) {
        return true;
    } else {
        return false;
    }
}