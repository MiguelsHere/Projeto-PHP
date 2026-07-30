<?php
include_once 'config/database.php';
include_once 'models/user.php';

class Controller
{
    private $db;
    private $user;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }
}
