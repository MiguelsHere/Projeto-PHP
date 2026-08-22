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
            $this->profile->user_name = (string) ($_POST['user_name'] ?? '');
            $this->profile->email = (string) ($_POST['email'] ?? '');
            $this->profile->password = (string) ($_POST['password'] ?? '');

            if ($this->profile->register()) {
                header("Location: index.php?action=register");
                exit;
            } else {
                header("Location: index.php?action=register");
                exit;
            }
        }
        include 'views/profile/profile_register.php';
    }

    public function login()
    {
        if ($_POST) {
            $this->profile->user_name = (string) ($_POST['user_or_email'] ?? '');
            $this->profile->email = (string) ($_POST['user_or_email'] ?? '');
            $this->profile->password = (string) ($_POST['password'] ?? '');

            if ($this->profile->login()) {
                header("Location: index.php");
                exit;
            } else {
                header("Location: index.php?action=login");
                exit;
            }
        }
        include 'views/profile/profile_login.php';
    }

    public function password_reset()
    {

        if ($_POST) {
            $this->profile->email = (string) ($_POST['email'] ?? '');

            if ($this->profile->password_reset()) {
                header("Location: index.php?action=password_reset");
                exit;
            }
        }

        include 'views/profile/profile_password_reset.php';
    }

    public function update_no_auth()
    {
        if ($_POST) {
            $this->profile->id = (int) ($_SESSION['id'] ?? 0);
            $this->profile->birth_date = (string) ($_POST['birth_date'] ?? '');
            $this->profile->gender = (string) ($_POST['gender'] ?? '');
            $this->profile->weight = (float) ($_POST['weight'] ?? 0);
            $this->profile->height = (float) ($_POST['height'] ?? 0);
            $this->profile->equipment = (array) ($_POST['equipment'] ?? []);
            $this->profile->description = (string) ($_POST['description'] ?? '');
            $this->profile->is_public = (bool) ($_POST['is_public'] ?? false);

            if ($this->profile->update_no_auth()) {
                header("Location: index.php");
                exit;
            }
        }
    }
}
