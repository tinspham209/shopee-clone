<?php


class DBController
{
//    DB Connection Properties
    public $con = null;
    protected $host = 'localhost:8899';
    protected $user = "root";
    protected $password = "";

//    connection property
    protected $database = "shopee";

//    call constructor

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail" . $this->con->connect_error;
        }
    }
}

// DB Controller object
$db = new DBController();