<?php
require_once ("Repository.php");
require_once ("Models/Subject/Subject.php");

class SubjectRepository extends Repository
{
    public function getSubject($IDAdvertisement): ?string// should work, but has to test yet
    {
        $stmt = $this->database->connect()->prepare('
            select subject.SubjectName from 
            subject inner join advertisement on subject.IDSubject = advertisement.IDSubject
            where advertisement.IDAdvertisement = :IDAdvertisement
        ');
        $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();

        $subject = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->database = null;

        if($subject === false) {
            return null;
        }

        return $subject['SubjectName'];
    }

    public function addSubject($SubjectName, $TeachLevel)
    {
        $pdo = $this->database->connect();
        try {
            $stmt = $pdo->prepare("INSERT INTO subject(SubjectName, TeachLeveLName) VALUES (:SubjectName, :TeachLevel)");
            $stmt->bindParam(':SubjectName', $SubjectName, PDO::PARAM_STR);
            $stmt->bindParam(':TeachLevel', $TeachLevel, PDO::PARAM_STR);
            $stmt->execute();
            $pdo = null;
        } catch (PDOException $e) {
            echo "Database connection error in Subject Repository: ". $e->getMessage();
            die();
        }
    }

    public function getLastIDSubject(): int
    {
        $pdo = $this->database->connect();
        try {
            $stmt = $pdo->prepare("select IDSubject from subject ORDER by IDSubject desc LIMIT 1");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $ID = $result['IDSubject'];
            $pdo = null;
            return $ID;

        } catch (PDOException $e) {
            echo "Database connection error in Subject Repository: ". $e->getMessage();
            die();
        }
    }

    public function getTeachLevel($IDAdvertisement)// should work, but has to test yet
    {
        $stmt = $this->database->connect()->prepare('
            select subject.TeachLeveLName from 
            subject inner join advertisement on subject.IDSubject = advertisement.IDSubject
            where advertisement.IDAdvertisement = :IDAdvertisement
        ');
        $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();

        $subject = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->database = NULL;

        if($subject === false) {
            return null;
        }

        return $subject['TeachLevelName'];
    }

}