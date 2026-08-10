<?php
include_once 'config/database.php';
include_once 'models/profile.php';

class ProfileController
{
    private $db;
    private $profile;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->profile = new Profile($this->db);
    }

    public function home()
    {
        include 'views/home.php';
    }

    public function profile_index()
    {
        $stmt = $this->profile->readAll();
        $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/profile/profile_list.php';
    }

    public function register()
    {
        if ($_POST) {
            $this->profile->user_name = $_POST['user_name'];
            $this->profile->email = $_POST['email'];
            $this->profile->password = $_POST['password'];

            if ($this->profile->register()) {
                header("Location: index.php");
            }
        }
        include 'views/profile/profile_register.php';
    }

    public function login()
    {
        if ($_POST) {
            $this->profile->user_name = $_POST['user_or_email'];
            $this->profile->email = $_POST['user_or_email'];
            $this->profile->password = $_POST['password'];
            
            if ($this->profile->login()) {
                header("Location: index.php");
            }
        }
        include 'views/profile/profile_login.php';
    }

    public function update_no_auth()
    {
        if ($_POST){
            $this->profile->age = $_POST['age'];
            $this->profile->gender = $_POST['gender'];
            $this->profile->weight = $_POST['weight'];
            $this->profile->height = $_POST['height'];
            $this->profile->equipment = $_POST['equipment'];
            $this->profile->description = $_POST['description'];
            $this->profile->is_public = $_POST['is_public'];

            if ($this->profile->update_no_auth()) {
                header("Location: index.php");
            }
        }
    }
}
