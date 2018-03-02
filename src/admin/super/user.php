<?php

 namespace CMS\admin\super;
 use CMS\Connection;
 use PDO;
 use PDOException;

class user extends Connection
{
    private $user_id;
    private $user_email;
    private $user_password;
    private $user_name;
    private $user_mobile;
    private $user_address;
    private $user_gender;
    private $user_date_of_birth;
    private $user_image;
    private $user_type;
    private $user_status;
    private $unique_id;

    public function set($data = array()){
        if(array_key_exists('user_email',$data)){
            $this->user_email = $data['user_email'];
        }
        if(array_key_exists('user_password',$data)){
            $this->user_password = $data['user_password'];
        }
        if(array_key_exists('user_name',$data)){
            $this->user_name = $data['user_name'];
        }
        if(array_key_exists('user_mobile',$data)){
            $this->user_mobile = $data['user_mobile'];
        }
        if(array_key_exists('user_address',$data)){
            $this->user_address = $data['user_address'];
        }
        if(array_key_exists('user_gender',$data)){
            $this->user_gender = $data['user_gender'];
        }
        if(array_key_exists('user_date_of_birth',$data)){
            $this->user_date_of_birth = $data['user_date_of_birth'];
        }
        if(array_key_exists('user_image',$data)){
            $this->user_image = $data['user_image'];
        }
        if(array_key_exists('user_type',$data)){
            $this->user_type = $data['user_type'];
        }
        if(array_key_exists('user_status',$data)){
            $this->user_status = $data['user_status'];

        }
        if(array_key_exists('user_id',$data)){
            $this->user_id = $data['user_id'];
        }

        if(array_key_exists('unique_id',$data)){
            $this->unique_id = $data['unique_id'];
        }

        return $this;
    }

    public function upload_img(){
        $img_name = $_FILES['user_image']['name'];
        $img_tmp_name = $_FILES['user_image']['tmp_name'];

        $tmName = substr(md5(time()),'0','8');
        $extenName =  end(explode('.',$img_name));
        $_POST['user_image'] = $tmName.'.'.$extenName;

        move_uploaded_file($img_tmp_name,'../../../../assets/admin/images/uploads/'.$_POST['user_image']);
        return $_POST['user_image'];
    }

    public function img_delete($id){
        $stmt = $this->conn->prepare("SELECT `user_image` FROM `users` WHERE unique_id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        $image_name = $stmt->fetch(PDO::FETCH_ASSOC);
        $data = '../../../../assets/admin/images/uploads/'.$image_name['user_image'];
        if(isset($data)){
            unlink($data);
        }

    }

    public function store(){
        try {

$stmt =  $this->conn->prepare("INSERT INTO `users` (`user_email`, `user_password`, `user_name`, `user_mobile`, `user_address`, `user_gender`, `user_date_of_birth`, `user_image`, `user_type`, `user_status`, `unique_id`) VALUES (:user_email,:user_password,:user_name,:user_mobile,:user_address,:user_gender,:user_date_of_birth,:user_image,:user_type,:user_status,:unique_id)");

            $stmt->bindValue(':user_email', $this->user_email, PDO::PARAM_STR);
            $stmt->bindValue(':user_password', $this->user_password, PDO::PARAM_STR);
            $stmt->bindValue(':user_name', $this->user_name, PDO::PARAM_STR);
            $stmt->bindValue(':user_mobile', $this->user_mobile, PDO::PARAM_STR);
            $stmt->bindValue(':user_address', $this->user_address, PDO::PARAM_STR);
            $stmt->bindValue(':user_gender', $this->user_gender, PDO::PARAM_STR);
            $stmt->bindValue(':user_date_of_birth', $this->user_date_of_birth, PDO::PARAM_STR);
            $stmt->bindValue(':user_image', $this->user_image, PDO::PARAM_STR);
            $stmt->bindValue(':user_type', $this->user_type, PDO::PARAM_STR);
            $stmt->bindValue(':user_status', $this->user_status, PDO::PARAM_STR);
            $stmt->bindValue(':unique_id', md5(time()), PDO::PARAM_STR);

            $stmt->execute();

            if ($stmt){
                header('location: ../../super/user/index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function index(){
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

    public function update(){
        try {

            $stmt = $this->conn->prepare("UPDATE `users` SET `user_email`=:user_email, `user_password`=:user_password, `user_name`=:user_name, `user_mobile` =:user_mobile,`user_address`=:user_address,`user_gender`=:user_gender,`user_date_of_birth`=:user_date_of_birth, `user_image`=:user_image, `user_type`=:user_type,`user_status`=:user_status WHERE `unique_id`=:id");

            $stmt->bindValue(':user_email', $this->user_email, PDO::PARAM_STR);
            $stmt->bindValue(':user_password', $this->user_password, PDO::PARAM_STR);
            $stmt->bindValue(':user_name', $this->user_name, PDO::PARAM_STR);
            $stmt->bindValue(':user_mobile', $this->user_mobile, PDO::PARAM_STR);
            $stmt->bindValue(':user_address', $this->user_address, PDO::PARAM_STR);
            $stmt->bindValue(':user_gender', $this->user_gender, PDO::PARAM_STR);
            $stmt->bindValue(':user_date_of_birth', $this->user_date_of_birth, PDO::PARAM_STR);
            $stmt->bindValue(':user_image', $this->user_image, PDO::PARAM_STR);
            $stmt->bindValue(':user_type', $this->user_type, PDO::PARAM_STR);
            $stmt->bindValue(':user_status', $this->user_status, PDO::PARAM_STR);
            $stmt->bindValue(':id', $this->unique_id, PDO::PARAM_STR);

            $OK = $stmt->execute();

            if ($OK){
                header('location: ../../super/user/index.php');
            }

return $this;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function tmp_delete($id){
        try {

            $stmt =  $this->conn->prepare("UPDATE `users` SET `user_deleted_at` = NOW() WHERE `users`.`unique_id` = :id;");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['delete'] = 'Data successfully Deleted !!!';
                header('location: ../../super/user/index.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function trash(){
        try {

            $stmt =  $this->conn->prepare("SELECT * FROM `users` WHERE `user_deleted_at` != '0000-00-00 00:00:00'");

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function restore($id){
        try {

            $stmt =  $this->conn->prepare("UPDATE `users` SET `user_deleted_at` = '0000-00-00 00:00:00' WHERE `users`.`unique_id` = :id;");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['delete'] = 'Data successfully Deleted !!!';
                header('location: ../../super/user/trash.php');
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function delete($id){
        try {

            $stmt =  $this->conn->prepare("DELETE FROM `users` WHERE unique_id = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt){
                $_SESSION['delete'] = 'Data successfully Deleted !!!';
                header('location: ../../super/user/trash.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


}