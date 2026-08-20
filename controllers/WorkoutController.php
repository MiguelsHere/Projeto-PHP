<?php
include_once 'config/database.php';
include_once 'models/workout.php';

class WorkoutController
{
    private $db;
    private $workout;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->workout = new Profile($this->db);
    }
}
