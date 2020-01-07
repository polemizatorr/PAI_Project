<?php

require_once "Repository.php";
require_once "Models/User/User.php";

class UserRepository extends Repository {

    public function getUser(string $username): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user WHERE Username = :username
        ');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->database = NULL;

        if($user == false) {
            return null;
        }

        return new User(
            $user['Username'],
            $user['Email'],
            $user['Name'],
            $user['Password'],
            $user['Role']
        );
    }

    public function isUsernameAvailable(string $username): bool
    {
    try {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user WHERE Username = :username
            ');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = NULL;

        if ($user['Username'] === $username) return false;
        else return true;
    }

    catch(PDOException $e) {
        echo "Database exception: " . $e->getMessage();
        die();
    }
}

    public function isEmailAvailable(string $email): bool
    {
        try{
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM user WHERE Email = :email
            ');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt = NULL;

            if ($user['Username'] === $email) return false;
            else return true;
        }

        catch(PDOException $e) {
            echo "Database exception: " . $e->getMessage();
            die();
        }
    }



    public function addUser(string $username, string $password, string $email, string $name, string $role):void
    {
        $pdo = $this->database->connect();
        try {
            $stmt = $pdo->prepare("INSERT INTO user(Username, Password, Name, Email, Role) VALUES (:username, :password, :name, :email, :role)");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            $stmt->execute();
            $pdo = null;
        } catch (PDOException $e) {
            echo "Database connection error: ". $e->getMessage();
            die();
        }
    }


    public function getUsers(): array {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM user
        ');
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            $result[] = new User(
                $user['Username'],
                $user['Email'],
                $user['Name'],
                $user['Password'],
                $user['IDUser']
            );
        }

        return $result;
    }
}