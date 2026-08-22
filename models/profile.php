<?php

class Profile
{
    private $conn;

    public $id;
    public $user_name;
    public $password;
    public $email;

    public $birth_date;
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
        $query = "SELECT user_name, created_at FROM profile WHERE is_public = 1 ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }

    //Depois fazer algo com session para os returns
    public function register()
    {
        $this->user_name = trim($this->user_name);
        $this->email = trim($this->email);

        $query = "SELECT user_name, email FROM profile WHERE user_name = :user_name or email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);
        
        $stmt->execute();

        if ($stmt->rowCount() > 0 | mb_strlen($this->user_name) > 50 | mb_strlen($this->user_name) < 1 | !filter_var($this->email, FILTER_VALIDATE_EMAIL) | mb_strlen($this->email) > 254 | mb_strlen($this->password) > 64 | mb_strlen($this->password) < 15) {
            return false;
        }

        $hash = password_hash($this->password, PASSWORD_ARGON2ID);

        $query = "INSERT INTO profile(user_name, password_hash, email) VALUES(:user_name, :password, :email)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $hash);

        $stmt->execute();

        return true;
    }

    public function login()
    {
        $this->user_name = trim($this->user_name);
        $this->email = trim($this->email);

        $query = "SELECT id_profile, password_hash FROM profile WHERE (user_name = :user_name OR email = :email) and is_validated = 1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":user_name", $this->user_name);
        $stmt->bindParam(":email", $this->email);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && password_verify($this->password, $row['password_hash'])) {
            session_regenerate_id(true);
            $_SESSION['id'] = $row['id_profile'];
            return true;
        }

        return false;
    }

    public function password_reset()
    {
        $this->email = trim($this->email);

        $query = "SELECT email FROM profile WHERE email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":email", $this->email);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
        }

        return true;
    }

    public function update_no_auth() {}
}
