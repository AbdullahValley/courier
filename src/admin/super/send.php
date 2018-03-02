<?php

namespace CMS\admin\super;


use CMS\Connection;
use PDOException;
use PDO;

class send extends Connection
{
    private $courier_id;
    private $from_user_id;
    private $to_user_id;
    private $source_branch_id;
    private $destination_branch_id;
    private $address;
    private $category_id;
    private $quantity;
    private $cost;


    public function set($data = array()){
        if(array_key_exists('courier_id',$data)){
            $this->courier_id = $data['courier_id'];
        }
        if(array_key_exists('from_user_id',$data)){
            $this->from_user_id = $data['from_user_id'];
        }
        if(array_key_exists('to_user_id',$data)){
            $this->to_user_id = $data['to_user_id'];
        }
        if(array_key_exists('source_branch_id',$data)){
            $this->source_branch_id = $data['source_branch_id'];
        }

        if(array_key_exists('destination_branch_id',$data)){
            $this->destination_branch_id = $data['destination_branch_id'];
        }
        if(array_key_exists('address',$data)){
            $this->address = $data['address'];
        }
        if(array_key_exists('category_id',$data)){
            $this->category_id = $data['category_id'];
        }


        if(array_key_exists('quantity',$data)){
            $this->quantity = $data['quantity'];
        }
        if(array_key_exists('cost',$data)){
            $this->cost = $data['cost'];
        }

        return $this;
    }




    public function getUser(){

        try {

            $stmt =  $this->conn->prepare("SELECT `user_id`,`user_name`,`user_mobile` FROM `users` WHERE `user_status`=1");

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        }


    public function getBranch(){


        try {

            $stmt =  $this->conn->prepare("SELECT `branch_id`,`branch_name` FROM `branch` WHERE `branch_status`=1");

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        }


    public function getCategory(){

        try {

            $stmt =$this->conn->prepare("SELECT `category_id`,`category_name`,`category_price` FROM `courier_category` WHERE  `category_status`=1");

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        }




    public function send(){

        try {

            $stmt =  $this->conn->prepare("INSERT INTO `courier_details` (`from_user_id`, `to_user_id`, `source_branch_id`, `destination_branch_id`, `address`, `category_id`, `quantity`, `cost`) VALUES (:from_user_id,:to_user_id,:source_branch_id,:destination_branch_id,:address,:category_id,:quantity,:cost)");

            $stmt->bindValue(':from_user_id', $this->from_user_id, PDO::PARAM_STR);
            $stmt->bindValue(':to_user_id', $this->to_user_id, PDO::PARAM_STR);
            $stmt->bindValue(':source_branch_id', $this->source_branch_id, PDO::PARAM_STR);
            $stmt->bindValue(':destination_branch_id', $this->destination_branch_id, PDO::PARAM_STR);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_STR);
            $stmt->bindValue(':category_id', $this->category_id, PDO::PARAM_STR);
            $stmt->bindValue(':quantity', $this->quantity, PDO::PARAM_STR);
            $stmt->bindValue(':cost', $this->cost, PDO::PARAM_STR);


            $stmt->execute();

            if ($stmt){
                header('location: ../../super/send-courier/list.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }

    public function getCourierDetails(){

        try {

            $stmt =$this->conn->prepare("SELECT * FROM courier_details");

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }






}