<?php

include "model/config.php";

class db_object {

    public $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    }
}