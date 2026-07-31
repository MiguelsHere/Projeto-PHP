<?php

class Profile
{
    private $conn;

    public $id_profile;
    public $user_name;
    public $password;
    public $email;
    public $profile_description;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function readAll()
    {
        $query = "SELECT user_name, created_in FROM profile WHERE is_public = 1  ORDER BY created_in DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
