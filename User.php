<?php

class User
{
private $login;
private $password;

public function __construct()
{
    $this->login="admin";
    $this->password="monpass";
}

public function test($login,$password)
{
    if($login==$this->login&&$password==$this->password)
    {
        echo "authentification réussie";
    }
    else{
        echo "authentification invalide";
    }
}
}