<?php
class Routere
{
    public static function handle($path = '/')
    {
        /*for just testing
        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];
         echo $currentUri;*/

        $path = '/' . ltrim($path, '/');
        $root = '/swe/views/index';
        $id = null; // Initialize $id here

        if (strpos($path, '/swe/views/cart_display?remove=') !== false) {
            $pattern = '/\/swe\/views\/(cart_display(?:\?remove=)?)(\d*)/';
        } else {
            $pattern = '/\/swe\/views\/(product|editproduct|deleteproduct|edituser|deleteuser|makeuser|makeadmin)\?id=(\d+)/';
        }
        if (preg_match($pattern, $path, $matches)) {
            // Extract the 'id' value from the matched URL
            $action = $matches[1];
            $id = $matches[2];

           // echo "id = " . $id;
        }
        //  echo $path;
        //  echo "id = " .$id;
        require "config.php";
        session_start();


     if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
  $result = mysqli_query($conn, " SELECT p.*, u.* FROM permissions p JOIN users u ON p.user_id = u.id WHERE p.guest = '1' ");
  $row = mysqli_fetch_assoc($result);
  $_SESSION["login"] = true;
  $_SESSION["id"] = $row["id"];
}



        if ($path === $root) {
            require '../views/index.php';
            exit();
        } elseif ($path === '/swe/views/product') {
            require '../views/product.php';
            exit();
        } elseif ($path === '/swe/views/collections') {
            require '../views/collections.php';
            exit();
        } elseif ($path === '/swe/views/profilesettings') {
            require '../views/profilesettings.php';
            exit();
        } elseif ($path === '/swe/views/checkout') {
            require '../views/checkout.php';
            exit();
        } elseif ($path === '/swe/views/orders') {
            require '../views/orders.php';
            exit();

        } elseif ($path === '/swe/views/confirmaddress') {
            require '../views/confirmaddress.php';
            exit();
        } elseif ($path === '/swe/views/confirmorder') {
            require '../views/confirmorder.php';
            exit();
        }elseif ($path === '/swe/views/logout') {

            require '../views/logout.php';
            exit();
        } elseif ($path === '/swe/views/adminDashboard') {
            require '../views/adminDashboard.php';
            exit();
        } elseif ($path === '/swe/views/wishlist') {
            require '../views/wishlist.php';
            exit();
        } elseif ($path === '/swe/views/about') {
            require '../views/about.php';
            exit();
        } elseif ($path === '/swe/views/signup') {
            require '../views/signup.php';
            exit();
        } elseif ($path === '/swe/views/login') {
            require '../views/login.php';
            exit();
        } elseif ($path === '/swe/views/forgetpassword') {
            require '../views/forgetpassword.php';
            exit();
        } elseif ($path === '/swe/views/users') {
            require '../views/users.php';
            exit();
        } elseif ($path === '/swe/views/adduser') {
            require '../views/adduser.php';
            exit();
        } elseif ($path === '/swe/views/products') {
            require '../views/products.php';
            exit();
        } elseif ($path === '/swe/views/addproduct') {
            require '../views/addproduct.php';
            exit();
        } elseif ($path === '/swe/views/forgetpass') {
            require '../views/forgetpass.php';
            exit();
        } elseif ($path === '/swe/views/otp') {
            require '../views/otp.php';
            exit();
        } elseif ($path === '/swe/views/newpassword') {
            require '../views/resetpassword.php';
            exit();
        } elseif ($path === '/swe/views/deactivated') {
            require '../views/deactivated.php';
            exit();
        } elseif ($path === '/swe/views/cart_display') {

            require '../views/cart_display.php';
            exit();
        } elseif ($path === '/swe/views/cart_display?remove=' . $id) {
            require '../views/cart_display.php';
            exit();
        } elseif ($path === '/swe/views/editproduct?id=' . $id) {
            require '../views/editproduct.php';
            exit();
        } elseif ($path === '/swe/views/product?id=' . $id) {
            require '../views/product.php';
            exit();
        } elseif ($path === '/swe/views/deleteproduct?id=' . $id) {
            require '../views/deleteproduct.php';
            exit();
        } elseif ($path === '/swe/views/edituser?id=' . $id) {
            require '../views/edituser.php';
            exit();
        } elseif ($path === '/swe/views/deleteuser?id=' . $id) {
            require '../views/deleteuser.php';
            exit();
        } elseif ($path === '/swe/views/makeuser?id=' . $id) {
            require '../views/makeuser.php';
            exit();
        } elseif ($path === '/swe/views/makeadmin?id=' . $id) {
            require '../views/makeadmin.php';
            exit();
        } else {

            require '../views/404.php';
            exit();
        }
    }
}
