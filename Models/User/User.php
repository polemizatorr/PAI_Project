<?php

class User {
    private $Username;
    private $Email;
    private $Name;
    private $Password;
    private $Role;

    public function __construct($Username, $Email, $Name, $Password, $Role = "User")
    {
        $this -> Name = $Name;
        $this -> Email = $Email;
        $this -> Username = $Username;
        $this -> Password = $Password;
        $this -> Role = $Role;
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

    public function  getRole(): string
    {
        return $this->Role;
    }

}