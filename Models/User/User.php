<?php

class User {
    private $Username;
    private $Email;
    private $Name;
    private $Password;

    public function __construct($Username, $Email, $Name, $Password)
    {
        $this -> Name = $Name;
        $this -> Email = $Email;
        $this -> Username = $Username;
        $this -> Password = $Password;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function getPassword(): string
    {
        return $this->Password;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function getUsername(): string
    {
        return $this->Username;
    }

}