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

        if($user == false) {
            return null;
        }

        return new User(
            $user['Username'],
            $user['Email'],
            $user['Name'],
            $user['Password']
        );
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