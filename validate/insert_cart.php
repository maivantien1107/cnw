<?php 
ob_start();
session_start();
$path_project = 'cnw';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);


// check session
ob_start();
session_start();
$username = $_SESSION['username'];

require_once ROOT . DS . 'application' . DS . 'UsersApplication.php';
$service = new UsersApplication();
if (isset($_POST['mua-ngay'])){
    $product_id=intval(addslashes($_POST['buy_now']));
    $service->insertProduct($username,$product_id,1);
    // header("Location: ../cnw/cart");
    exit();
}
if (isset($_POST['add-cart'])){
    $product_id=intval(addslashes($_POST['add_now']));
    $service->insertProduct($username,$product_id,1);
    var_dump($product_id);die;
    header("Location: ../products");
    exit();
}
header("Location: ../products");
exit();
