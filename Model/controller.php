<?php
include_once 'config/database.php';


class Controller
{
    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }
}
