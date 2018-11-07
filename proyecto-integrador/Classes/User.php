<?php

class User {

    private $name;
    private $username;
    private $email;
    private $password;
    private $avatar;
    private $role = 1;

    public function __construct(String $name, String $username, String $email, String $password, String $avatar = null)
    {
            $this->name = $name;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->avatar = $avatar;
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getUsername()
    {
        return $this->username;
    }
 
    public function setUsername(String $username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(String $password)
    {
        $this->password = $password;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}

?>