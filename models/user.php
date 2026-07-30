<?php

class User
{
    private $conn;
    private $table_name = "user";

    public $id_user;
    public $user_name;
    public $password;
    public $email;
    public $created_in;
    public $is_public;

    public function __construct($db)
    {
        $this->conn = $db;
    }
}
