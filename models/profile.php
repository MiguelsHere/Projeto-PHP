<?php

class Profile
{
    private $conn;

    public $user_name;
    public $password;
    public $email;
    
    public $age;
    public $gender;
    public $weight;
    public $height;
    public $equipment;
    public $description;
    public $is_public;

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

    //Depois fazer algo com session para os returns
    public function register()
    {
        $query = "SELECT user_name, email from profile where user_name = :user_name or email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        
        if($stmt->rowCount() > 0) {
            return false;
        }

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
        $query = "SELECT password FROM profile WHERE user_name = :user_name OR email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);

        if ($stmt->execute()) {

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row && password_verify($this->password, $row['password'])) {

                return true;
            }
        }
        else return $stmt->execute();
    }

    public function update_no_auth()
    {
        
    }
}
