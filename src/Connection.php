<?php

namespace CMS;
use PDO;
use PDOException;

class Connection
{
    protected $conn;
    private $user = 'root';
    private $pass = '';
    public function __construct(){
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=courier', $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}