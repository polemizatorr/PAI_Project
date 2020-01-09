<?php

class Advertisement {
    private $IDAdvertisement;
    private $IDSubject;
    private $IDOpinion;
    private $Description;

    public function __construct($IDSubject, $IDOpinion, $Description, $IDAdvertisement = 0)
    {
        $this -> IDAdvertisement = $IDAdvertisement;
        $this -> IDSubject = $IDSubject;
        $this -> IDOpinion = $IDOpinion;
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

    public function getIDOpinion(): int
    {
        return $this -> IDOpinion;
    }

    public function getDescription(): string
    {
        return $this -> Description;
    }

    public function setIDAdvertisement(int $IDAdvertisement)
    {
        $this -> IDAdvertisement = $IDAdvertisement;
    }

}