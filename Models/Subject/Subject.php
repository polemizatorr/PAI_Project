<?php


class Subject
{
    private $IDSubject;
    private $SubjectName;
    private $TeachLevelName;

    public function __construct($SubjectName, $TeachLevelName, $IDSubject = 0)
    {
        $this -> SubjectName = $SubjectName;
        $this -> TeachLevelName = $TeachLevelName;
        $this -> IDSubject = $IDSubject;
    }

    public function getSubjectName(): string
    {
        return $this -> SubjectName;
    }

    public function getTeachLevelName(): string
    {
        return $this -> TeachLevelName;
    }

    public function getIDSubject(): string
    {
        return $this -> IDSubject;
    }

    public function setIDSubject(int $IDSubject)
    {
        $this -> IDSubject = $IDSubject;
    }
}