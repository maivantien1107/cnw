<?php
ob_start();
session_start();
$path_project = 'cnw';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . $path_project);

require_once ROOT . DS . 'application' . DS . 'UsersApplication.php';
require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'Bill.php';

$service = new UsersApplication();
$listProducts = $service->getListCartProducts($_SESSION['username']);
$text = $_POST['list_quantity'];
$list_text = explode(" ", $text);

$list_quantity = array();
foreach ($list_text as $text) {
    array_push($list_quantity, intval($text));
}

$lens = count($listProducts);
for($i=0; $i<$lens; $i++){
    $product = $listProducts[$i];
    $quantity = $list_quantity[$i];
    $total_money = $product->getPrice() * $quantity;
    $bill = new Bill($product->getProductID(), $_SESSION['username'], date_create()->format('Y-m-d h:i:s'), $total_money, $quantity);

    $service->submitBill($bill);
    $service->removeProduct($product->getProductID(), $_SESSION['username']);
}
?>
<script type="text/javascript">
    alert('Đặt hàng thành công');
</script>
<?php
header("Location: ../cart");
exit();
