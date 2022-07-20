<?php 
ob_start(); 
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: login-admin');
  exit();
}
require_once ROOT . DS . 'application' . DS . 'UsersApplication.php';
$app_news= new UsersApplication();



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="public/css/admin_news_index.css">
    <link rel="stylesheet" href="public/css/admin_user_index.css">

    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">Group 11</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" >
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin-product">
            <i class="bx bx-box"></i>
            <span class="links_name">Quản lý sản phẩm</span>
          </a>
        </li>
        <li>
          <a href="admin-bill" class="active">
            <i class="bx bx-cart-alt cart"></i>
            <span class="links_name">Quản lý đơn hàng</span>
          </a>
        </li>
        <li>
          <a href="admin" >
            <i class="bx bx-news"></i>
            <span class="links_name">Tin Tức</span>
          </a>
        </li>
        <li>
          <a href="admin-user" >
            <i class="bx bx-user"></i>
            <span class="links_name">Quản lý tài khoản</span>
          </a>
        </li>
        <li class="log_out">
          <a href="validate/logoutadmin.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
<section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Tìm kiếm...." />
          <i class="bx bx-search"></i>
        </div>
      </nav>
      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="row">
              <div class="title">Danh sách tin tức</div>
              <div class="button-add">
                <a href="#">+ Thêm mới</a>
              </div>
            </div>
            <table>
    <tr>
        <th>ID</th>
        <th>ID sản phẩm</th>
        <th>Tài khoản</th>
        <th>Ngày đặt hàng</th>
        <th>Tổng số tiền</th>
        <th>Số lượng</th>
        <th>Trạng thái</th>
        <th>Tác vụ</th>

    </tr>
    <?php  
      $listbill=$app_news->getAllListProductsBill();
      foreach($listbill as $news){
        ?>
          <tr>
        <td><?php echo $news->getBillID(); ?></td>
        <td><a href="#"><?php echo $news->getProductID(); ?></a></td> 
        <td>
            <a href="#"><?php echo $news->getUsername(); ?></a>
    </td>
        <td><?php echo $news->getDateBill();  ?></td>
        <td><?php echo $news->getTotalMoney();  ?></td>
        <td><?php echo $news->getQuantity();  ?></td>
        <td>
            <select value="<?php echo $news->getSatus();?>">
                <option value="Đang chuẩn bị">Đang chuẩn bị</option>
                <option value="Đang giao hàng">Đang giao hàng</option>
                <option value="Đã hoàn thành">Đã hoàn thành</option>
            </select>
        </td>
        <td>
        <li class="btn-action">
             
                  <button class="btn" name="btn-update" value="<?php echo $news->getBillID(); ?>">
                    <i class="bx bxs-edit" style="font-size: 25px"></i>
                  </button>
                  <button class="btn" name="btn-delete" value="<?php echo $news->getBillID(); ?>">
                    <i class="bx bxs-trash" style="font-size: 25px"></i>
                  </button>
                  <form action="validate/admin_bill.php" method="post"> 
                    <div class="delete-modal">
                        <div class="delete-modal-content">
                        <img
                            class="aleart-image"
                            src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png"
                            style="width: 100px; height: 100px"
                        />
                        <span> Bạn có chắc chắn muốn xóa không? </span>
                        <div class="bottom-modal-button">
                            <button class="modal-button-close close-delete-modal">Không</button>
                            <button class="modal-button-accept accept-delete-modal"  value="<?php echo $news->getBillID(); ?>" name="btn-delete">Có</button>
                        </div>
                        </div>
                    </div>
                    <div class="update-modal">
                        <div class="delete-modal-content">
                        <img
                            class="aleart-image"
                            src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png"
                            style="width: 100px; height: 100px"
                        />
                        <span> Bạn có chắc chắn muốn cập nhật trạng thái đơn hàng? </span>
                        <div class="bottom-modal-button">
                            <button class="modal-button-close close-delete-modal">Không</button>
                            <button class="modal-button-accept accept-delete-modal"  value="<?php echo $news->getBillID(); ?>" name="btn-delete">Có</button>
                        </div>
                        </div>
                    </div>
                  </form>
   
                </li>
        </td>
    </tr>
      <?php }
    ?>
    
    
  </table>
           
          </div>
        </div>
      </div>
</section>
    <div class="bg-modal">
      <div class="modal-content">
        <span class="modal-title">Thêm mới</span>
        <form action="validate/admin_bill.php" method="post">
          <label class="news-title">ID sản phẩm</label>
          <input name="news_title" type="text" value="" placeholder="id sản phẩm"/>
          <label class="news-title">Tài khoản người mua</label>
         <select class="news_category" name="news_category" value="">
            <option value="Đang chuẩn bị">Đang chuẩn bị</option>
            <option value="Đang giao hàng">Đang giao hàng</option>
            <option value="Đã hoàn thành">Đã hoàn thành</option>
         </select>
          <label class="news-title">Số lượng</label>
          <input type="text" placeholder="Số lượng sản phẩm cần mua" name="news_overview" value=""/>
          <label class="news-title">Tổng số tiền</label>
          <input type="text" placeholder="Tổng số tiền" name="news_overview" value=""/>
          <div class="bottom-modal-button">
            <button class="modal-button-close  close-add-modal">Đóng</button>
            <button class="modal-button-accept accept-add-modal" type="submit" name="btn-submit">Xác nhận</button>
          </div>
        </form>
      </div>
    </div>
    

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      // button show add modal
      let btnAdd = document.querySelector(".button-add");
      // button close add modal
      let btnCloseAddModal = document.querySelector(".close-add-modal");
      // button accept add
      let btnAcceptAdd = document.querySelector(".accept-add-modal");
      let btnCloseAddModal1 = document.querySelector(".close-add-modal1");
      // button accept add
      let btnAcceptAdd1 = document.querySelector(".accept-add-modal1");
      //btn  show edit
      let btnEdits = document.querySelectorAll(".bxs-edit");

      //btn show delete modal
      let btnDeletes = document.querySelectorAll(".bxs-trash");

      // btn close Delete modal
      let btnCloseDeleteModal = document.querySelector(".close-delete-modal");

      // btn accept Delete news
      let btnAcceptDelete = document.querySelector(".accept-delete-modal");

      
    

      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
      // show add modal
      btnAdd.addEventListener("click", function () {
        document.querySelector(".bg-modal").style.display = "flex";
      });
      // button close modal
      btnCloseAddModal.addEventListener("click", function () {
        document.querySelector(".bg-modal").style.display = "none";
      });
      btnCloseAddModal1.addEventListener("click", function () {
        document.querySelector(".bg-modal1").style.display = "none";
      });

      // Add news to list news
      btnAcceptAdd.addEventListener("click", function () {
        document.querySelector(".bg-modal").style.display = "none";
      });
      btnAcceptAdd1.addEventListener("click", function () {
        document.querySelector(".bg-modal1").style.display = "none";
      });

      //button edit show modal
      for(const editButton  of btnEdits) {
        editButton.addEventListener('click', function(){
          document.querySelector(".update-modal").style.display = "flex";
          // load data of news
        })
      };
      // show delete modal
      for(const deleteButton of btnDeletes){
        deleteButton.addEventListener('click', function(){
          document.querySelector(".delete-modal").style.display = "flex";
        })
      };
      btnCloseDeleteModal.addEventListener("click", function () {
        document.querySelector(".delete-modal").style.display = "none";
      });
      btnAcceptDelete.addEventListener("click", function () {
        // delete news 
        document.querySelector(".delete-modal").style.display = "none";
      });
      btnCloseDeleteModal.addEventListener("click", function () {
        document.querySelector(".update-modal").style.display = "none";
      });
      btnAcceptDelete.addEventListener("click", function () {
        // delete news 
        document.querySelector(".update-modal").style.display = "none";
      });
    </script>
  </body>
</html>
