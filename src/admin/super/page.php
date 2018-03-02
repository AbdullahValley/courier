<?php

namespace CMS\admin\super;
use CMS\Connection;
use PDO;
use PDOException;


class page extends Connection
{
    private $page_title;
    private $page_slug;
    private $page_details;
    private $page_status;

    public function set($data = array())
    {

//        if (array_key_exists('page_id', $data)) {
//            $this->page_id = $data['page_id'];
//        }
        if (array_key_exists('page_title', $data)) {
            $this->page_title = $data['page_title'];
        }
        if (array_key_exists('page_slug', $data)) {
            $this->page_slug = $data['page_slug'];
        }
        if (array_key_exists('page_details', $data)) {
            $this->page_details = $data['page_details'];
        }
        if (array_key_exists('page_status', $data)) {
            $this->page_status = $data['page_status'];
        }

        return $this;

    }

    public function store()
    {
        try {

            $stmt = $this->conn->prepare("INSERT INTO `pages` (`page_title`, `page_slug`, `page_details`, `page_status`) 
VALUES (:page_title,:page_slug,:page_details,:page_status)");
echo 'biplob';
            $stmt->bindValue(':page_title', $this->page_title, PDO::PARAM_STR);
            $stmt->bindValue(':page_slug', $this->page_slug, PDO::PARAM_STR);
            $stmt->bindValue(':page_details', $this->page_details, PDO::PARAM_STR);
            $stmt->bindValue(':page_status', $this->page_status, PDO::PARAM_STR);

            $stmt->execute();

             if ($stmt){
                 header('location: ../../super/user/index.php');
             }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

   /* public function index(){
        try {

            $stmt =  $this->conn->prepare("SELECT * FROM `users` WHERE `user_deleted_at` = '0000-00-00 00:00:00'");

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view($id){
        try {

            $stmt =  $this->conn->prepare("SELECT * FROM `users` WHERE unique_id = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}*/
