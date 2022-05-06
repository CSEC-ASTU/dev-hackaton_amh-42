<?php

class DBController
{
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $db = "csec_astu";

    // connection property 

    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        if ($this->con->connect_error) {
            echo "Fail" . $this->con->connect_error;
        }
        echo "Connection Successful!";
    }
}
