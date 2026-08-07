<?php

class Profile
{
    private $conn;

    public $user_name;
    public $password;
    public $email;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function readAll()
    {
        $query = "SELECT user_name, created_in FROM profile WHERE is_public = 1 ORDER BY created_in DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function register()
    {
        $hash = password_hash($this->password, PASSWORD_ARGON2ID);

        $query = "INSERT INTO profile(user_name, password, email) VALUES(:user_name, :password, :email)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $hash);

        return $stmt->execute();
    }

    public function login()
    {
        $query = "";
    }
}
