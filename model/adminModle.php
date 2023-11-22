<?php
include "../controller/config.php";

class adminModel
{

    public static function addproduct($name, $type, $price, $description, $fileUrl)
    {
        include "../controller/config.php";
        $query = "insert into products (name,type,price,description,file) values (' $name','$type','$price','$description','$fileUrl')";

        mysqli_query($conn, $query);
    }
    public static function updateproduct($id, $name, $price, $type, $description)
    {
        include "../controller/config.php";
        $query = "update products set name ='$name',type ='$type',price ='$price',description ='$description'  where id = '$id'";

        mysqli_query($conn, $query);
    }

    public static function deleteproduct($id)
    {
        include "../controller/config.php";
        $query = "DELETE FROM products WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    public static function adduser($firstname, $lastname, $email, $hashedPassword)
    {
        echo "wasal";
        include "../controller/config.php";
        $query = "insert into users (firstname, lastname , email , password ) values ('$firstname' , '$lastname', '$email','$hashedPassword')";
        mysqli_query($conn, $query);
    }
    public static function checkduplicate($email)
    {
        include "../controller/config.php";
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        return mysqli_num_rows($result) > 0; // Returns true if duplicate, false otherwise
    }
    public static function updateuser($firstname, $lastname, $email, $id)
    {
        include "../controller/config.php";
        $query = "update users set firstname ='$firstname',lastname ='$lastname',email ='$email'  where id = '$id'";
        mysqli_query($conn, $query);
    }
    public static function deleteuser($id)
    {
        include "../controller/config.php";
        $query = "DELETE FROM users WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    public static function makeadmin($id)
    {
        include "../controller/config.php";
        $query = "UPDATE users  set admin = '1' WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    public static function makeuser($id)
    {

        include "../controller/config.php";
        $query = "UPDATE users  set admin = '0' WHERE id = '$id'";
        mysqli_query($conn, $query);
    }
    public static function activateaccount($id)
    {

        include "../controller/config.php";
        $query = "UPDATE users SET deactivated = '0' WHERE  id = $id ";
        mysqli_query($conn, $query);
    }
}