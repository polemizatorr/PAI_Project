<?php
require_once ("Repository.php");
require_once ("Models/Advertisement/Advertisement.php");
require_once ("Models/User/User.php");

class AdvertisementRepository extends Repository
{
    public function getAdvertisements($Username): ?Array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            select advertisement.IDAdvertisement, advertisement.IDSubject, advertisement.IDUser,
                   advertisement.description from advertisement INNER join user on advertisement.IDUser = user.IDUser
                    where user.Username = :Username
        '); //querry is ok, rest to adjust
        $stmt->bindParam(':Username', $Username, PDO::PARAM_STR);
        $stmt->execute();
        $Ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($Ads === false)
        {
            return null;
        }

        foreach ($Ads as $Ad) {
            $result[] = new Advertisement(
                $Ad['IDAdvertisement'],
                $Ad['IDSubject'],
                $Ad['IDUser'],
                $Ad['description']
            );
        }

        return $result;
    }

    public function addAdvertisement($IDSubject, $IDUser, $Description)
    {
        $pdo = $this->database->connect();
        try {
            $stmt = $pdo->prepare("insert into advertisement(IDSubject, IDUser, description) VALUES (:IDSubject, :IDUser, :description)");
            $stmt->bindParam(':IDSubject', $IDSubject, PDO::PARAM_STR);
            $stmt->bindParam(':IDUser', $IDUser, PDO::PARAM_STR);
            $stmt->bindParam(':description', $Description, PDO::PARAM_STR);
            $stmt->execute();
            $pdo = null;
        } catch (PDOException $e) {
            echo "Database connection error: ". $e->getMessage();
            die();
        }
    }

    public function getAllAdvertisements(): ?array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            select * from advertisement
        '); //querry is ok, rest to adjust
        $stmt->execute();
        $Ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($Ads === false)
        {
            return null;
        }

        foreach ($Ads as $Ad) {
            $result[] = new Advertisement(
                $Ad['IDSubject'],
                $Ad['IDUser'],
                $Ad['description'],
                $Ad['IDAdvertisement']
            );
        }

        return $result;
    }

    public function getAllUserAdvertisements($Username): ?array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT advertisement.IDAdvertisement, advertisement.IDSubject, advertisement.IDUser, advertisement.description
            from advertisement inner join user on advertisement.IDUser=user.IDUser
            where user.Username = :Username
        '); //querry is ok, rest to adjust
        $stmt->bindParam(':Username', $Username, PDO::PARAM_STR);
        $stmt->execute();
        $Ads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($Ads === false)
        {
            return null;
        }

        foreach ($Ads as $Ad) {
            $result[] = new Advertisement(
                $Ad['IDSubject'],
                $Ad['IDUser'],
                $Ad['description'],
                $Ad['IDAdvertisement']
            );
        }

        return $result;
    }

    public function getUsername($IDAdvertisement) //good chyba
    {
        $stmt = $this->database->connect()->prepare('
            select user.Username
            from user inner join advertisement on user.IDUser=advertisement.IDUser
            where advertisement.IDAdvertisement = :IDAdvertisement
        '); //querry is ok, rest to adjust
        $stmt->bindParam('::IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($user === false) {
            return null;
        }

        return $user['Username'];

    }

    public function getEmail($IDAdvertisement): ?string
    {
        $stmt = $this->database->connect()->prepare('
            select user.Email
            from user inner join advertisement on user.IDUser=advertisement.IDUser
            where advertisement.IDAdvertisement = :IDAdvertisement
        '); //querry is ok, rest to adjust
        $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($user === false) {
            return null;
        }

        return $result = $user[0]['Email'];
    }

        public function getSubject($IDAdvertisement): string
    {
        $stmt = $this->database->connect()->prepare('
            select subject.SubjectName
            from subject inner join advertisement on subject.IDSubject=advertisement.IDSubject
            where advertisement.IDAdvertisement = :IDAdvertisement
        '); //querry is ok, rest to adjust
        $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();
        $subject = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($subject === false) {
            return null;
        }

        return $result = $subject[0]['SubjectName'];
    }

    public function getSubjectLevel($IDAdvertisement): string
    {
        $stmt = $this->database->connect()->prepare('
            select subject.TeachLeveLName
            from subject inner join advertisement on subject.IDSubject=advertisement.IDSubject
            where advertisement.IDAdvertisement = :IDAdvertisement
        '); //querry is ok, rest to adjust
        $stmt->bindParam(':IDAdvertisement', $IDAdvertisement, PDO::PARAM_STR);
        $stmt->execute();
        $subject = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($subject === false) {
            return null;
        }

        return $subject[0]['TeachLeveLName'];
    }


}