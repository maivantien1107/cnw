<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: login-admin');
  exit();
}
require_once ROOT . DS . 'application' . DS . 'NewsApplication.php';
require_once ROOT . DS . 'application'.DS.'NewsDescriptionApplication.php';
$app_news= new NewsApplication();
$app=new NewsDescriptionApplication();
if (isset($_POST['btn-submit'])){
  $news_id=1;
  $title =isset($_POST['news_title']) ? addslashes($_POST['news_title']):'';
  $category =isset($_POST['news_category']) ? addslashes($_POST['news_category']):'';
  $overview = isset($_POST['news_overview']) ? addslashes($_POST['news_overview']):'';
  $description = isset($_POST['news_description']) ? addslashes($_POST['news_description']):'';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $date2 =date("Y-m-d H:i:s"); 
  $des=explode("\n",$description);
  $news= new NewsDescription($news_id,$title,$category,'a1a',$date2,'a12',$overview,$des[0],$des[1],$des[2],$des[3],$des[4],$des[5]);
  $app->insert($news);
}
if (isset($_POST['btn-delete'])){
  $news_id=intval($_POST['btn-delete']);
  $app->delete($news_id);
}
if (isset($_POST['btn-submit-update'])){
  $news_id=intval($_POST['btn-submit-update']);
  $title=isset($_POST['news_title'])?addslashes($_POST['news_title']):'';
  $category=isset($_POST['news_category'])? addslashes($_POST['news_category']):'';
  $overview=isset($_POST['news_overview'])? addslashes($_POST['news_overview']):'';
  $description=isset($_POST['news_description'])? addslashes($_POST['news_description']):'';
  date_default_timezone_set('Asia/Ho_Chi_Minh');
  $time =date("Y-m-d H:i:s"); 
  $des=explode("\n",$description);
  $news=new NewsDescription($news_id,$title,$category,'1a2',$time,'a12',$overview,$des[0],$des[1],$des[2],$des[3],$des[4],$des[5]);
 
  $app_news->update($news);
}
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
    <style type="text/css">
      html,body{
        height: 100%;
        width: 100%;
      }
    </style>
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
            <span class="links_name">Qu???n l?? s???n ph???m</span>
          </a>
        </li>
        <li>
          <a href="admin-bill">
            <i class="bx bx-cart-alt cart"></i>
            <span class="links_name">Qu???n l?? ????n h??ng</span>
          </a>
        </li>
        <li>
          <a href="admin" class="active">
            <i class="bx bx-news"></i>
            <span class="links_name">Tin T???c</span>
          </a>
        </li>
        <li>
          <a href="admin-user" >
            <i class="bx bx-user"></i>
            <span class="links_name">Qu???n l?? t??i kho???n</span>
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
          <input type="text" placeholder="T??m ki???m...." />
          <i class="bx bx-search"></i>
        </div>
      </nav>
      <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="row">
              <div class="title">Danh s??ch tin t???c</div>
              <div class="button-add">
                <a href="#">+ Th??m m???i</a>
              </div>
            </div>
            <table>
    <tr>
        <th>ID</th>
        <th>Ti??u ?????</th>
        <th>Lo???i</th>
        <th>Ng??y t???o</th>
        <th>T??c v???</th>

    </tr>
    <?php
      $page=isset($_GET["page"])?intval($_GET["page"]):1;
      if ($page==1){
        $start=0;
        $limit=10;
      }
      else {
        $start=($page-1)*10;
        $limit=$start+10;

      }   
      $listnews=$app_news->getAll($start,$limit);
      foreach($listnews as $news){
        $path=$news->getTitle();
        $path = str_replace(' ', '-', $path);?>
          <tr>
        <td><a href="#"><?php echo $news->getNews_id(); ?></a></td>
        <td><a href="#"><?php echo $news->getTitle(); ?></a></td> 
        <td>
            <a href="#"><?php echo $news->getCategory(); ?></a>
    </td>
        <td><?php echo $news->getTime();  ?></td>
        <td>
        <li class="btn-action" style="display:inline-flex;">
                  
                  <button class="btn" name="btn-update" value="<?php echo $news->getNews_id(); ?>">
                  <a href="update-news&id=<?php echo $news->getNews_id(); ?>">
                    <i class="bx bxs-edit" style="font-size: 25px"></i>
                    </a>
                  </button>
                  <form action="" method="post" style="padding:0 0;margin-top:0">
                  <button class="btn" name="btn-delete" value="<?php echo $news->getNews_id(); ?>">
                    <i class="bx bxs-trash" style="font-size: 25px"></i>
                  </button>
                  </form>
        </li>
        </td>
    </tr>
      <?php }
    ?>
    
   
  </table>
          <div class="pagination">
                  <?php 
                  $total_page=intval($app_news->getCountAll()/10)+1;
                    // n???u current_page > 1 v?? total_page > 1 m???i hi???n th??? n??t prev
                    if ($page > 1 && $total_page > 1){
                        echo '<a href="admin&page='.($page-1).'">Prev</a> | ';
                    }
        
                    // L???p kho???ng gi???a
                    for ($i = 1; $i <= $total_page; $i++){
                        // N???u l?? trang hi???n t???i th?? hi???n th??? th??? span
                        // ng?????c l???i hi???n th??? th??? a
                        if ($i == $page){
                            echo '<span>'.$i.'</span> | ';
                        }
                        else{
                            echo '<a href="admin&page='.$i.'">'.$i.'</a> | ';
                        }
                    }
        
                    // n???u current_page < $total_page v?? total_page > 1 m???i hi???n th??? n??t prev
                    if ($page < $total_page && $total_page > 1){
                        echo '<a href="admin&page='.($page+1).'">Next</a> | ';
                    }
                  ?>
        </div>
           
          </div>
        </div>
      </div>
</section>

    <div class="bg-modal" style="height:900px;">
      <div class="modal-content" style="height:100%;">
        <span class="modal-title">Th??m m???i</span>
        <form action="" method="post">
          <label class="news-title">Ti??u ?????</label>
          <input name="news_title" type="text" value="" placeholder="Ti??u ????? tin t???c"/>
          <label class="news-title">Th??? lo???i</label>
         <select class="news_category" name="news_category" value="">
            <option value="Tin t???c">Tin t???c</option>
            <option value="Khuy???n m??i">Khuy???n m??i</option>
            <option value="Th??ng tin">Th??ng tin</option>
         </select>
          <label class="news-title">T???ng quan</label>
          <input type="text" placeholder="Th??ng tin t???ng quan tin t???c" name="news_overview" value=""/>
          <label class="news-title">Mi??u t???</label>
          <textarea rows="8" name="news_description" value="" ></textarea>

          <label class="news-title">H??nh ???nh</label>
          <div class="image-container">
            <div class="media-preview">
              <img class="image" id="image-preview" awidth="100%" height="100%" />
              <img  class="image" id="image-preview1" awidth="100%" height="100%" />
              <img class="image" id="image-preview3" awidth="100%" height="100%" />
              <img  class="image" id="image-preview4" awidth="100%" height="100%" />
            </div>
        
              <div class="message success"></div>
              <div class="loading"></div>
              <div class="media-upload">
                  <div class="form-group">
                      <input class="form-control" type="file" name="file" id="file" />
                      <input class="form-control" type="file" name="file" id="file1" />
                      <input class="form-control" type="file" name="file" id="file3" />
                      <input class="form-control" type="file" name="file" id="file4" />
                  </div>
              
            </div>
      
           
          </div> 

          <div class="bottom-modal-button">
            <button class="modal-button-close  close-add-modal">????ng</button>
            <button class="modal-button-accept accept-add-modal" type="submit" name="btn-submit">X??c nh???n</button>
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
          document.querySelector(".bg-modal1").style.display = "flex";
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

