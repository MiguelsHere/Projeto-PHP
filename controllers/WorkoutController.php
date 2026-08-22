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
            $this->workout->workout_name = (string) ($_POST['workout_name'] ?? '');
            $this->workout->workout_description = (string) ($_POST['workout_description'] ?? '');
            $this->workout->muscle_focus = (array) ($_POST['muscle_focus'] ?? []);
            $this->workout->time_needed_min = (int) ($_POST['time_needed_min'] ?? 0);
            $this->workout->is_public = (bool) ($_POST['is_public'] ?? false);
        }
    }

    function update_workout()
    {
        if ($_POST) {
        }
    }
}
