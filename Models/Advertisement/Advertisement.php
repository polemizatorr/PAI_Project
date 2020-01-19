<?php
require_once ('Models/User/User.php');
require_once ('Models/Subject/Subject.php');

class Advertisement {
    private $IDAdvertisement;
    private $IDSubject;
    private $IDUser;
    private $Description;
    private $Subject;
    private $Email;
    private $TeachLevel;

    public function __construct($IDSubject, $IDUser, $Description, $IDAdvertisement = 0)
    {
        $this -> IDAdvertisement = $IDAdvertisement;
        $this -> IDSubject = $IDSubject;
        $this -> IDUser = $IDUser;
        $this -> Description = $Description;
    }

    public function getIDAdvertisement(): int
    {
        return $this -> IDAdvertisement;
    }

    public function getIDSubject(): int
    {
        return $this -> IDSubject;
    }

    public function getIDUser(): int
    {
        return $this -> IDUser;
    }

    public function getDescription(): string
    {
        return $this -> Description;
    }

    public function setIDAdvertisement(int $IDAdvertisement)
    {
        $this -> IDAdvertisement = $IDAdvertisement;
    }

    public function setEmail($Email)
    {
        $this -> Email = $Email;
    }


    public function setSubject($Subject)
    {
        $this -> Subject = $Subject;
    }

    public function setTeachLevel($TeachLevel)
    {
        $this -> TeachLevel = $TeachLevel;
    }

    public function getEmail()
    {
        return $this -> Email;
    }

    public function getSubject()
    {
         return $this -> Subject;
    }

    public function getTeachLevel()
    {
       return $this -> TeachLevel;
    }



}