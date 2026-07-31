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

    public function profile_index()
    {
        $stmt = $this->profile->readAll();
        $profiles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'views/profile/profile_list.php';
    }
}
