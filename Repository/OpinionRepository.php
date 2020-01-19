<?php
require_once ("Repository.php");
require_once ("Models/Opinion/Opinion.php");


class OpinionRepository extends Repository
{
    public function getOpinions($IDAdvertisement): ?array
    {
        $result = []; // change query
        $stmt = $this->database->connect()->prepare('
            select opinion.IDOpinion, opinion.WellTeaching, opinion.Knowledge, opinion.Accessibility, opinion.Involvement, opinion.IDAdvertisement
            from opinion inner join advertisement on opinion.IDAdvertisement=advertisement.IDAdvertisement where advertisement.IDAdvertisement = :IDAdvertisement
        ');
        $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();
        $opinions = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($opinions as $opinion) {
            $result[] = new Opinion(
                $opinion['IDOpinion'],
                $opinion['WellTeaching'],
                $opinion['Knowledge'],
                $opinion['Accessibility'],
                $opinion['Involvement'],
                $opinion['IDAdvertisement']
            );
        }

        return $result;
    }

    public function addOpinion($WellTeaching, $Knowledge, $Accessibility, $Involvement, $IDOpinion , $IDAdvertisement)
    {
        $pdo = $this->database->connect();
        try {
            $stmt = $pdo->prepare("INSERT INTO opinion(WellTeaching, Knowledge, Accessibility, Involvement, IDAdvertisement) 
            VALUES (:WellTeaching, :Knowledge, :Accessibility, :Involvement, :IDOpinion , :IDAdvertisement)");
            $stmt->bindParam(':WellTeaching', $WellTeaching, PDO::PARAM_STR);
            $stmt->bindParam(':Knowledge', $Knowledge, PDO::PARAM_STR);
            $stmt->bindParam(':Accessibility', $Accessibility, PDO::PARAM_STR);
            $stmt->bindParam(':Involvement', $Involvement, PDO::PARAM_STR);
            $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
            $stmt->execute();
            $pdo = null;
        } catch (PDOException $e) {
            echo "Database connection error: ". $e->getMessage();
            die();
        }
    }
}