<?php

class Workout
{
    private $conn;

        public function __construct($db)
    {
        $this->conn = $db;
    }

}
