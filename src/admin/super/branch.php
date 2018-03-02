<?php


namespace CMS\admin\super;


use CMS\Connection;
use PDOException;
use PDO;


class branch extends Connection
{

    private $branch_id;
    private $branch_name;
    private $branch_address;
    private $branch_status;



    public function set($data = array()){
        if(array_key_exists('branch_id',$data)){
            $this->branch_id = $data['branch_id'];
        }
        if(array_key_exists('branch_name',$data)){
            $this->branch_name = $data['branch_name'];
        }
        if(array_key_exists('branch_address',$data)){
            $this->branch_address = $data['branch_address'];
        }
        if(array_key_exists('branch_status',$data)){
            $this->branch_status = $data['branch_status'];
        }



        return $this;
    }

    public function store(){
        try {

            $stmt =  $this->conn->prepare("INSERT INTO `branch` (`branch_name`, `branch_address`, `branch_status`) VALUES (:branch_name,:branch_address,:branch_status)");

            $stmt->bindValue(':branch_name', $this->branch_name, PDO::PARAM_STR);
            $stmt->bindValue(':branch_address', $this->branch_address, PDO::PARAM_STR);
            $stmt->bindValue(':branch_status', $this->branch_status, PDO::PARAM_STR);


            $stmt->execute();



        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }





}