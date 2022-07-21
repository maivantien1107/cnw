<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: login-admin');
  exit();
}
require_once ROOT . DS . 'application'.DS.'products' . DS . 'LaptopApplication.php';
$app= new LaptopApplication();
$id=intval($_GET['id']);
$news=$app->get($id);
$info1=$news->getCpu()."__".$news->getRam()."__".$news->getMemory();
        $info2=$news->getScreen()."__".$news->getCard();
        $info3=$news->getOs()."__".$news->getPin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="stylesheet" href="public/css/admin_news_index.css"> -->
     <link rel="stylesheet" href="public/css/admin_user_index.css">

<link
  href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
  rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
<div class="bg-modal1" style="display:flex;">
                    <form action="validate/admin_products.php" method="post" style="width:70%;"> 
                    
                        <div class="modal-content">
                          <span class="modal-title">Cập nhật thông tin</span>
                          <div class="class-form-update">
                            <label class="news-title">Tên sản phẩm</label>
                            <input name="model" type="text" value="<?php echo $news->getModel(); ?>" placeholder="Tiêu đề tin tức"/>
                            <label class="news-title">Mức giá</label>
                            <input type="text" placeholder="" name="price" value="<?php echo $news->getPrice(); ?>"/>
                            <label class="news-title">Kích thước</label>
                            <input type="text" placeholder="" name="size" value="<?php echo $news->getSize(); ?>"/>
                            <label class="news-title">Trọng lượng</label>
                            <input type="text" placeholder="" name="weigh" value="<?php echo $news->getWeigh(); ?>"/>
                            <label class="news-title">Màu sắc</label>
                            <input type="text" placeholder="" name="color" value="<?php echo $news->getColor(); ?>"/>
                          
                            <label class="news-title">Số lượng sản phẩm</label>
                            <input type="text" placeholder="" name="number" value="<?php echo $news->getNumber(); ?>"/>
                            <label class="news-title">Thông tin</label>
                            <input type="text" placeholder="" name="info1" value="<?php echo $info1 ?>"/>
                            <label class="news-title">Màn hình, Card đồ họa</label>
                            <input type="text" placeholder="" name="info2" value="<?php echo $info2 ?>"/>
                            <label class="news-title">Hệ điều hành, Pin</label>
                            <input type="text" placeholder="" name="info3" value="<?php echo $info3 ?>"/>
                            <label class="news-title">Tính năng</label>
                            <textarea rows="4" name="feature" value="<?php echo $news->getFeature(); ?>" ></textarea>
                            <label class="news-title">Thông tin chi tiết</label>
                            <textarea rows="8" name="description" value="<?php echo $news->getDes1(); ?>" ></textarea>

                            <label class="news-title">Hình ảnh</label>
                            <div class="image-container">
                              <div
                                class="image"
                                style="
                                  background-image: url('http://ww1.prweb.com/prfiles/2014/04/10/11752526/gI_134971_best-image-web-hosting.png');
                                  border: none;
                                "
                              >
                                <button>
                                  <i class="bx bx-x"></i>
                                </button>
                              </div>
                              <div
                                class="image"
                                style="
                                  background-image: url('http://ww1.prweb.com/prfiles/2014/04/10/11752526/gI_134971_best-image-web-hosting.png');
                                  border: none;
                                "
                              >
                                <button>
                                  <i class="bx bx-x"></i>
                                </button>
                              </div>
                              <div
                                class="image"
                                style="
                                  background-image: url('http://ww1.prweb.com/prfiles/2014/04/10/11752526/gI_134971_best-image-web-hosting.png');
                                  border: none;
                                "
                              >
                                <button>
                                  <i class="bx bx-x"></i>
                                </button>
                              </div>
                              <div class="add-image">
                                <i class="bx bx-image-add" style="font-size: 50px"></i>
                              </div>
                            </div>

                            <div class="bottom-modal-button">
                              <button class="modal-button-close  close-add-modal1">Đóng</button>
                              <button class="modal-button-accept accept-add-modal1" type="submit" name="btn-submit-update" value="<?php echo $news->getProductID(); ?>">Cập nhật</button>
                            </div>
                          </div>                         
                        </div>
                    </form>
                </div>
    
</body>
</html>