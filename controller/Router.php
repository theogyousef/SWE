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
         $root = '/SWE/views/index';
         $id = null; // Initialize $id here
 
         $pattern = '/\/SWE\/views\/(product|editproduct|deleteproduct|edituser|deleteuser|makeuser|makeadmin)\?id=(\d+)/';
         if (preg_match($pattern, $path, $matches)) {
             // Extract the 'id' value from the matched URL
             $action = $matches[1];
             $id = $matches[2];

            //  echo "id = " . $id;
         }
         echo $path;
         echo "id = " .$id;

        if ($path === $root) {
            require '../views/index.php';
            exit();
        } elseif ($path === '/SWE/views/product') {
            require '../views/product.php';
            exit();

        } elseif ($path === '/SWE/views/collections') {
            require '../views/collections.php';
            exit();

        } elseif ($path === '/SWE/views/profilesettings') {
            require '../views/profilesettings.php';
            exit();

        } elseif ($path === '/SWE/views/logout') {
            require '../views/logout.php';
            exit();

        } elseif ($path === '/SWE/views/registeration') {
            require '../views/registeration.php';
            exit();
        } elseif ($path === '/SWE/views/adminDashboard') {
            require '../views/adminDashboard.php';
            exit();
        } elseif ($path === '/SWE/views/wishlist') {
            require '../views/wishlist.php';
            exit();
        } elseif ($path === '/SWE/views/checkOut') {
            require '../views/checkOut.php';
            exit();
        } elseif ($path === '/SWE/views/about') {
            require '../views/about.php';
            exit();
        } elseif ($path === '/SWE/views/users') {
            require '../views/users.php';
            exit();
        } elseif ($path === '/SWE/views/adduser') {
            require '../views/adduser.php';
            exit();
        } elseif ($path === '/SWE/views/products') {
            require '../views/products.php';
            exit();
        } elseif ($path === '/SWE/views/addproduct') {
            require '../views/addproduct.php';
            exit();
        } elseif ($path === '/SWE/views/editproduct?id=' . $id) {
            require '../views/editproduct.php';
            exit();

        } elseif ($path === '/SWE/views/product?id=' . $id) {
            require '../views/product.php';
            exit();

        } elseif ($path === '/SWE/views/deleteproduct?id=' . $id) {
            require '../views/deleteproduct.php';
            exit();

        } elseif ($path === '/SWE/views/edituser?id=' . $id) {
            require '../views/edituser.php';
            exit();

        } elseif ($path === '/SWE/views/deleteuser?id=' . $id) {
            require '../views/deleteuser.php';
            exit();

        } elseif ($path === '/SWE/views/makeuser?id=' . $id) {
            require '../views/makeuser.php';
            exit();

        } elseif ($path === '/SWE/views/makeadmin?id=' . $id) {
            require '../views/makeadmin.php';
            exit();

        } else {

            require '../views/404.php';
            exit();
        }
    }
}