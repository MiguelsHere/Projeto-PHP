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
        $this->workout = new Workout($this->db);
    }

    function create_workout()
    {
        if ($_POST) {
            $this->workout->workout_name = $_POST['workout_name'] ?? '';
            $this->workout->workout_description = $_POST['workout_description'] ?? '';
            $this->workout->muscle_focus = $_POST['muscle_focus'] ?? '';
            $this->workout->time_needed_min = $_POST['time_needed_min'] ?? '';
            $this->workout->is_public = $_POST['is_public'] ?? '';
        }
    }

    function update_workout()
    {
        if ($_POST) {
        }
    }
}
