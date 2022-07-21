<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: login-admin');
  exit();
}
require_once ROOT . DS . 'application'.DS.'products' . DS . 'LaptopApplication.php';
$app= new LaptopApplication();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="public/css/admin_news_index.css"> -->
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
          <a href="admin-product" class="active">
            <i class="bx bx-box"></i>
            <span class="links_name">Quản lý sản phẩm</span>
          </a>
        </li>
        <li>
          <a href="admin-bill">
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
        <th>Tiêu đề</th>
        <th>Giá</th>
        <th>CPU</th>
        <th>RAM</th>
        <th>Bộ nhớ</th>
        <th>Tác vụ</th>

    </tr>
    <?php  
      $listnews=$app->getAll(0,100);
      foreach($listnews as $news){
        $path=$news->getModel();
        $path = str_replace(' ', '-', $path);
        $info1=$news->getCpu()."__".$news->getRam()."__".$news->getMemory();
        $info2=$news->getScreen()."__".$news->getCard();
        $info3=$news->getOs()."__".$news->getPin();
        ?>
        
          <tr>
        <td><?php echo $news->getProductID(); ?></td>
        <td><a href="detail/"><?php echo $news->getModel(); ?></a></td> 
        <td><?php echo $news->getPrice(); ?></td>
        <td><?php echo $news->getCpu();  ?></td>
        <td><?php echo $news->getRam();  ?></td>
        <td><?php echo $news->getMemory();  ?></td>
        <td>
        <li class="btn-action">   
        <form action="validate/admin_products.php" method="post" style="flex-direction: row;">          
                  <button class="btn" name="btn-update" value="<?php echo $news->getProductID(); ?>">
                  <a href="update-product&id=<?php echo $news->getProductID(); ?>">
                    <i class="bx bxs-edit" style="font-size: 25px"></i>
                    </a>
                  </button>
                 
                  <button class="btn" name="btn-delete" value="<?php echo $news->getProductID(); ?>">
                    <i class="bx bxs-trash" style="font-size: 25px"></i>
                  </button>
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
        <form action="validate/admin_products.php" method="post">
                          <label class="news-title">Tên sản phẩm</label>
                          <input name="model" type="text" value="" placeholder="Tiêu đề tin tức"/>
                          <label class="news-title">Mức giá</label>
                          <input type="text" placeholder="" name="price" value=""/>
                          <label class="news-title">Kích thước</label>
                          <input type="text" placeholder="" name="size" value=""/>
                          <label class="news-title">Trọng lượng</label>
                          <input type="text" placeholder="" name="weigh" value=""/>
                          <label class="news-title">Màu sắc</label>
                          <input type="text" placeholder="" name="color" value=""/>
                         
                          <label class="news-title">Số lượng sản phẩm</label>
                          <input type="text" placeholder="" name="number" value=""/>
                          <label class="news-title">Thông tin</label>
                          <input type="text" placeholder="Nhập theo định dạng CPU__RAM__ Memory" name="info1" value=""/>
                          <label class="news-title">Màn hình, Card đồ họa</label>
                          <input type="text" placeholder="Thông tin Màn hình__Card đồ họa" name="info2" value=""/>
                          <label class="news-title">Hệ điều hành, Pin</label>
                          <input type="text" placeholder="Thông tin Hệ điều hành__Pin" name="info3" value=""/>
                          <label class="news-title">Tổng quan</label>
                          <textarea rows="2" name="overview" value="" ></textarea>
                          <label class="news-title">Tính năng</label>
                          <textarea rows="4" name="feature" value="" ></textarea>
                          <label class="news-title">Thông tin chi tiết</label>
                          <textarea rows="8" name="description" value="" ></textarea>


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
   console.log(document.querySelector(".bg-modal1"));
   let bgModal = document.querySelectorAll(".bg-modal1");
   console.log(bgModal[1]);
  //  bgModal[2].style.display = "flex";
      //button edit show modal
      for(var i=0; i<btnEdits.length;i++) {
        btnEdits[i].addEventListener('click', function(){
          bgModal[i].style.display = "flex";
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
      
    </script>
  </body>
</html>
