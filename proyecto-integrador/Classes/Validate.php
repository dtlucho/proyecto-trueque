<?php

class Validate
{
    public static function emailValidate($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function imageValidate($file)
    {
        return $_FILES["avatar"]["error"] == UPLOAD_ERR_OK;
    }

    public static function passwordMatch($data)
    {
        return $data['password'] == $data['cpassword'];
    }

    public static function termsAndConditions($data)
    {
        return isset($data['confirm']);

    }

    public static function registerValidate(User $user, $data)
    {
        $errors = [];

        $name = $user->getName();

        if($name == ""){
            $errors['name'] = "No podes dejar el nombre vacio";
        }

        $username = $user->getUsername();

        if($username == "") {
            $errors['username'] = "No podes dejar el nombre de usuario vacio";
        }

        $email = $user->getEmail();

        if($email == "") {
            $errors['email'] = "No podes dejar el email vacio";
        } elseif(!self::emailValidate($email)) {
            $errors['email'] = "El email no es valido";
        }

        $password = trim($user->getPassword());
        $cpassword = trim($data['cpassword']);

        if($password == "") {
            $errors['password'] = "No podes dejar la contraseña vacia";
        } elseif($password < 4) {
            $errors['password'] = "La contraseña debe tener almenos 4 caracteres";
        }

        if(!self::passwordMatch($data)) {
            $errors['cpassword'] = "Las contraseñas no coinciden";
        }

        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Tenes que aceptar terminos y condiciones";
        }
        return $errors;
        
    }

    public static function passwordValidate($password, $objectPassword)
    {
        return password_verify($password, $objectPassword);
    }

    public static function loginValidate($password, User $user)
    {
        return self::passwordValidate($password, $user->getPassword());

    }
}