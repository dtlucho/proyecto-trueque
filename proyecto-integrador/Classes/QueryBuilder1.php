<?php

abstract class DB
{
    abstract public function dbConnect();
    abstract public function emailDbSearch($email);
    abstract public function saveUser(User $user);

    public function photoPath($data)
    {

        $username = $data["username"];
        $nombre = $_FILES["avatar"]["name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        $miArchivo = "perfil" . $username . "." . $ext;

        return $miArchivo;
    }

    
    public function saveAvatar($data)
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
            $miArchivo = $miArchivo . "perfil" . $username . "." . $ext;

            move_uploaded_file($archivo, $miArchivo);

        } else {
            $errores["avatar"] = "Hubo un error al procesar el archivo";
        }

        return $errores;

    }

}

class JSONDB extends DB
{

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function dbConnect()
    {
        $usersArray = [];
        $db = file_get_contents($this->file);
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);

        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }

        return $usersArray;
    }

    public function emailDbSearch($email)
    {
        $users = $this->dbConnect();
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function saveUser($usuarioArray)
    {
        $file = $this->file;
        $jsonUser = json_encode($usuarioArray);
        file_put_contents($file, $jsonUser . PHP_EOL, FILE_APPEND);
    }


    public function idGenerate()
    {
        $arr = $this->dbConnect();

        if($arr == []) {
            return 1;
        }

        $lastUser = count($arr);

        return $lastUser + 1;

    }

    public function createUser(User $user)
    {
        $usuario = [
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'role' => $user->getRole()
        ];

        $usuario['id'] = $this->idGenerate();

        return $usuario;

    }

    /**
     * Get the value of file
     */ 
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set the value of file
     *
     * @return  self
     */ 
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}