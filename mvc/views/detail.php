
<?php
require_once ROOT . DS . 'application'. DS .'products'.DS. 'LaptopApplication.php';
?>
<!DOCTYPE html>
<html lang = "en">
   <head>
      <meta charset="UTF-8">
      <meta name = "viewport" content="width = device-width, initial-sacale = 1.0">
      <link rel="stylesheet" href="../../../public/css/home.css" type="text/css">
		  <link rel="stylesheet" href="../../../public/css/footer_container.css" type="text/css">
      <link rel="stylesheet" href="../../../public/css/productdetail.css">
      <link rel="stylesheet" href="../../../public/fonts/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="../../../public/css/nav_bar.css" >
      
      <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
   </head>
  <body>
  <?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php';?>
  <div class="container">
    <div class="son-main">
      <div class="son-top">
        <h1 class="st-name">
         <?php echo $product->getModel(); ?>
          <span class="st-sku">(No.00770717)</span>
        </h1>

        <div class="st-rating">
          <ul class="st-rating__star">
            <li><span class="fa fa-star fill"></span></li>
            <li><span class="fa fa-star fill"></span></li>
            <li><span class="fa fa-star fill"></span></li>
            <li><span class="fa fa-star fill"></span></li>
            <li><span class="fa fa-star fill"></span></li>
          </ul>
          <div class="st-rating__link">
            <a id="re-rate" class="re-link">147 đánh giá</a><span>|</span
            ><a class="re-link">1599 Hỏi &amp; đáp</a>
          </div>
        </div>
      </div>

      <div class="son-middle">
        <div class="left">
          <img src="<?php echo $product->getImage(); ?>" alt="637639340541330187_msi-gaming-gf63-den-1" class="" />
        </div>

        <div class="right">
          <div class="card re-card st-card">
            <h2 class="card-title">Thông số kỹ thuật</h2>
            <div class="card-body">
              <table class="st-pd-table">
                <tbody>
                  <tr>
                    <td>Màn hình</td>
                    <td>15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, IPS LCD</td>
                  </tr>
                  <tr>
                    <td>CPU</td>
                    <td><?php echo $product->getCpu(); ?></td>
                  </tr>
                  <tr>
                    <td>RAM</td>
                    <td><?php echo $product->getRAM(); ?></td>
                  </tr>
                  <tr>
                    <td>Ổ cứng</td>
                    <td>SSD <?php echo $product->getMemory(); ?> GB</td>
                  </tr>
                  <tr>
                    <td>Đồ họa</td>
                    <td>
                     <?php echo $product->getCard(); ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Hệ điều hành</td>
                    <td><?php echo $product->getOs(); ?></td>
                  </tr>
                  <tr>
                    <td>Trọng lượng</td>
                    <td><?php echo $product->getWeigh(); ?> kg</td>
                  </tr>
                  <tr>
                    <td>Kích thước</td>
                    <td><?php echo $product->getSize(); ?></td>
                  </tr>
                  <tr>
                    <td>Xuất xứ</td>
                    <td>Trung Quốc</td>
                  </tr>
                  <tr>
                    <td>Năm ra mắt</td>
                    <td>2021</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="st-price-main" style="color: rgb(245, 18, 6);"><?php echo $product->getPrice(); ?>₫</div>

          <button class="btn btn-primary btn-xl btn-full" id="btn_buy_now" style="background: rgb(245, 18, 6); color: #fff;">
            <div><strong>MUA NGAY</strong></div>
          </button>

          <button class="btn btn-primary btn-xl btn-full" id="btn_add_cart" style="background: rgb(245, 18, 6); color:#fff;">
            <div><strong>THÊM VÀO GIỎ</strong></div>
          </button>
        </div>
      </div>

      <div class="card re-card st-card st-card--article js--st-card--article expand">
        <h2 class="card-title">
          Đặc điểm nổi bật của <?php echo $product->getModel(); ?>
        </h2>
        <div class="card-body">
          <div class="st-pd-content">
            <p style="text-align: justify">
               </b>
               <b><?php echo $product->getDes1(); ?></b>
            </p>

            <p style="text-align: center">
              <b><img alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 1)" src="<?php echo $product->getImage1(); ?>"/></b>
            </p>

            <h3 style="text-align: justify">
              <b>Hiệu năng đột phá cho cả chơi game và công việc</b>
            </h3>

            <p style="text-align: justify">
              <?php echo $product->getDes1();?>
            </p>

            <!-- <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 2)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-3.jpg"
              />
            </p> -->

            <h3 style="text-align: justify">
              <b>Tận hưởng trải nghiệm game cực đỉnh với kiến trúc Turing</b>
            </h3>

            <p style="text-align: justify">
              <?php echo $product->getDes2(); ?>
            </p>

            <!-- <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 3)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-6.jpg"
              />
            </p> -->

            <h3 style="text-align: justify"><b>Tải game nhanh chóng</b></h3>

            <p style="text-align: justify">
              <?php echo $product->getDes3(); ?>
            </p>

            <!-- <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 4)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-11.jpg"
              />
            </p> -->

            <h3 style="text-align: justify">
              <b>Màn hình tần số quét 144Hz, chiến game mượt mà</b>
            </h3>

            <p style="text-align: justify">
              <?php echo $product->getDes4(); ?>
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 2)"
                src="<?php echo $product->getImage2(); ?>"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Tận hưởng âm thanh chuẩn gaming</b>
            </h3>

            <p style="text-align: justify">
              MSI GF63 sử dụng bộ phần mềm và
              <a href="https://fptshop.com.vn/tin-tuc/for-gamers/tim-hieu-ve-nahimic3-cong-nghe-am-thanh-cuc-dinh-tren-laptop-choi-game-msi-gf63-72485">công nghệ âm thanh Nahimic3</a
              >, mang đến trải nghiệm âm thanh vòm 3D dành cho các game thủ. Bên
              cạnh đó thì công nghệ Audio Boost sẽ cho chất âm chi tiết hơn 30%
              với Audio Power Amplifier bên trong và cổng tai nghe chân vàng.
            </p>

            <p style="text-align: justify">
              Nói qua một chút về Nahimic3, công nghệ âm thanh này cho trải
              nghiệm vô cùng sống động, giống như là bạn đang ở trong trò chơi,
              đồng thời nó cũng tùy chỉnh theo hoạt động của bạn như nghe nhạc
              hay xem phim.
            </p>

            <p style="text-align: justify">
              Ngoài ra Nahimic3 cũng rất chú trọng cho việc thu âm qua
              microphone, âm thanh của bạn phát ra sẽ to và rõ ràng hơn. Hầu hết
              các game online hiện nay đều phải giao tiếp qua micro, chính vì
              vậy tính năng này khá quan trọng cho trải nghiệm chơi game.
            </p>

            <!-- <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 6)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-9.jpg"
              />
            </p> -->

            <h3 style="text-align: justify">
              <b>Tăng cường hiệu quả làm mát</b>
            </h3>

            <p style="text-align: justify">
              <?php $product->getDes6();?>
            </p>

            <!-- <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 7)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-8.jpg"
              />
            </p> -->

            <h3 style="text-align: justify"><b>Thời lượng pin ấn tượng</b></h3>

            <p style="text-align: justify">
              <?php $product->getDes7(); ?>
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 3)"
                src="<?php echo $product->getImage3(); ?>"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Tùy chỉnh hiệu năng linh hoạt</b>
            </h3>

            <p style="text-align: justify">
              <?php echo $product->getDes8(); ?>
            </p>
<!-- 
            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 9)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-2.jpg"
              />
            </p> -->

            <h3 style="text-align: justify">
              <b>Thiết kế gọn nhẹ, thoải mái chơi game ở bất cứ đâu</b>
            </h3>

            <p style="text-align: justify">
              <?php echo $product->getOverview(); ?>
            </p>

            <!-- <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 10)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-4.jpg"
              />
            </p> -->
          </div>
        </div>
      </div>

      <h2 class="card-title card-title--badge">Đánh giá &amp; Nhận xét <?php echo $product->getModel(); ?>
        <span class="badge text-white" style="background: rgb(220, 53, 69);">293</span>
      </h2>

      <div class="c-rate-star">
        <div class="cmt_row">
          <div class="col">
            <div class="c-rate__left text-center">
              <p>Đánh Giá Trung Bình</p>
              <div class="point">5/5</div>
              <div class="list-star">
                <ul>
                  <li data-index="1">
                    <i data-index="1" class="demo-icon  ye-star fa fa-star"></i>
                  </li>
                  <li data-index="2">
                    <i data-index="2" class="demo-icon  ye-star fa fa-star"></i>
                  </li>
                  <li data-index="3">
                    <i data-index="3" class="demo-icon  ye-star fa fa-star"></i>
                  </li>
                  <li data-index="4">
                    <i data-index="4" class="demo-icon  ye-star fa fa-star"></i>
                  </li>
                  <li data-index="5">
                    <i data-index="5" class="demo-icon  ye-star fa fa-star"></i>
                  </li>
                </ul>
              </div>
              <span>147 đánh giá &amp; 146 nhận xét</span>
            </div>
          </div>
          <div class="col-5">
            <div class="c-rate__center">
              <div class="c-progress-list">
                <div class="c-progress-item">
                  <label>5<i class="demo-icon ye-star small fa fa-star"></i>
                  </label>
                  <div class="c-progress-bar">
                    <span class="c-progress-value" style="width: 91%;"></span>
                  </div>
                  <span>134</span>
                </div>
                <div class="c-progress-item">
                  <label>4<i class="demo-icon ye-star small fa fa-star"></i>
                  </label>
                  <div class="c-progress-bar">
                    <span class="c-progress-value" style="width: 6%;"></span>
                  </div>
                  <span>9</span>
                </div>
                <div class="c-progress-item">
                  <label>3<i class="demo-icon ye-star small fa fa-star"></i>
                  </label>
                  <div class="c-progress-bar">
                    <span class="c-progress-value" style="width: 2%;"></span>
                  </div>
                  <span>3</span>
                </div>
                <div class="c-progress-item">
                  <label>2<i class="demo-icon ye-star small fa fa-star"></i>
                  </label>
                  <div class="c-progress-bar">
                    <span class="c-progress-value" style="width: 0%;"></span>
                  </div>
                  <span>0</span>
                </div>
                <div class="c-progress-item">
                  <label>1<i class="demo-icon ye-star small fa fa-star"></i>
                  </label>
                  <div class="c-progress-bar">
                    <span class="c-progress-value" style="width: 1%;"></span>
                  </div>
                  <span>1</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="c-rate__right text-center">
              <p class="small-para">Bạn đã dùng sản phẩm này?</p>
              <a class="btn btn-primary">Gửi đánh giá của bạn</a>
            </div>
          </div>
        </div>
      </div>

      <div class="c-comment">
        <div class="c-comment-box">
          <div class="c-comment-box__avatar">MA</div>
          <div class="c-comment-box__content">
            <div class="c-comment-name">Minh Anh</div>
            <div class="list-star">
              <ul>
                <ul>
                  <li data-index="1"><i data-index="1" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="2"><i data-index="2" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="3"><i data-index="3" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="4"><i data-index="4" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="5"><i data-index="5" class="demo-icon small ye-star fa fa-star"></i></li>
                </ul>
                <span>12 ngày trước</span>
              </ul>
            </div>
            <div class="c-comment-text">Nhân viên nhiệt tình, hàng chính hãng đảm bảo chất lượng</div>
          </div>
        </div>
      </div>    
      <div class="c-comment-box">
        <div class="c-comment-box__avatar">PKH</div>
        <div class="c-comment-box__content">
          <div class="c-comment-name">Phan Khắc Hùng</div>
          <div class="list-star">
            <ul>
              <ul>
                <li data-index="1"><i data-index="1" class="demo-icon small ye-star fa fa-star"></i></li>
                <li data-index="2"><i data-index="2" class="demo-icon small ye-star fa fa-star"></i></li>
                <li data-index="3"><i data-index="3" class="demo-icon small ye-star fa fa-star"></i></li>
                <li data-index="4"><i data-index="4" class="demo-icon small ye-star fa fa-star"></i></li>
                <li data-index="5"><i data-index="5" class="demo-icon small ye-star fa fa-star"></i></li>
              </ul>
              <span>12 ngày trước</span>
            </ul>
          </div>
          <div class="c-comment-text">Shop tư vấn nhiệt tình, máy dùng khá ổn, trọng lượng nhẹ</div>
          </div>
        </div>
        <div class="c-comment-box">
          <div class="c-comment-box__avatar">DT</div>
          <div class="c-comment-box__content">
            <div class="c-comment-name">Duy Thuân</div>
            <div class="list-star">
              <ul>
                <ul>
                  <li data-index="1"><i data-index="1" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="2"><i data-index="2" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="3"><i data-index="3" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="4"><i data-index="4" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="5"><i data-index="5" class="demo-icon small ye-star fa fa-star"></i></li>
                </ul>
                <span>13 ngày trước</span>
              </ul>
            </div>
            <div class="c-comment-text">Màn đẹp, độ phân giải sắc nét</div>
          </div>
        </div>
        <div class="c-comment-box">
          <div class="c-comment-box__avatar">DT</div>
          <div class="c-comment-box__content">
            <div class="c-comment-name">Duy Thuân</div>
            <div class="list-star">
              <ul>
                <ul>
                  <li data-index="1"><i data-index="1" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="2"><i data-index="2" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="3"><i data-index="3" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="4"><i data-index="4" class="demo-icon small ye-star fa fa-star"></i></li>
                  <li data-index="5"><i data-index="5" class="demo-icon small ye-star fa fa-star"></i></li>
                </ul>
                <span>14 ngày trước</span>
              </ul>
            </div>
            <div class="c-comment-text">Màn đẹp, độ phân giải sắc nét</div>
          </div>
        </div>
      </div>
    </div>
  </div>

