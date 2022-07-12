<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="public/css/productdetail.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  </head>
  <body>
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
          <img
            src="https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/8/7/637639340541330187_msi-gaming-gf63-den-1.jpg"
            alt="637639340541330187_msi-gaming-gf63-den-1"
            class=""
          />
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

          <div class="st-price-main"><?php echo $product->getPrice(); ?>₫</div>

          <button class="btn btn-primary btn-xl btn-full" id="btn-buy-now">
            <div><strong>MUA NGAY</strong></div>
          </button>

          <button class="btn btn-primary btn-xl btn-full" id="btn-buy-now">
            <div><strong>THÊM VÀO GIỎ</strong></div>
          </button>
        </div>
      </div>

      <div
        class="card re-card st-card st-card--article js--st-card--article expand"
      >
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
              Nhờ bộ vi xử lý Intel Core i7 thế hệ thứ 10 mạnh mẽ hàng đầu, MSI
              GF63 có thể làm bất cứ điều gì bạn muốn. Con chip Intel Core i7
              10750H xung nhịp 2,60 GHz Turbo Boost 5,00 GHz, bộ nhớ đệm 12MB, 6
              nhân 12 luồng cho sức mạnh vượt trội. Hiệu năng xuất sắc đủ sức để
              MSI GF63 chơi tốt hầu hết mọi tựa game hiện nay, đặc biệt là các
              game eSports phổ biến ở mức đồ họa cao. Tất nhiên những ứng dụng
              làm việc và giải trí khác cũng được đáp ứng một cách mượt mà.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 2)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-3.jpg"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Tận hưởng trải nghiệm game cực đỉnh với kiến trúc Turing</b>
            </h3>

            <p style="text-align: justify">
              Card đồ họa NVIDIA GeForce GTX 1650 trên MSI GF63 Thin được sản
              xuất dựa trên kiến trúc Turing, tối ưu hóa kiến trúc của lõi và bộ
              nhớ đệm, cung cấp khả năng thực thi đồng thời các phép toán dấu
              phẩy động và số nguyên, qua đó tăng hiệu suất cho những tựa game
              hiện đại, cũng như các hoạt động đồ họa sáng tạo. Tốc độ xử lý
              nhanh, hiệu ứng đổ bóng trung thực cùng sự tối ưu cho từng tựa
              game giúp
              GTX 1650
              được các game thủ yêu thích. Thoải mái tận hưởng trò chơi sở
              trường của bạn với niềm vui bất tận.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 3)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-6.jpg"
              />
            </p>

            <h3 style="text-align: justify"><b>Tải game nhanh chóng</b></h3>

            <p style="text-align: justify">
              Với ổ cứng SSD 512GB đi kèm, MSI GF63 Thin 10SC có tốc độ khởi
              động máy và vào game cực nhanh. Mọi thứ đều diễn ra nhanh chóng và
              không để bạn phải chờ đợi. Ngoài ra, bạn còn có thể cắm thêm
              ổ cứng HDD
              để lưu trữ nhiều hơn với chi phí tiết kiệm.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 4)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-11.jpg"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Màn hình tần số quét 144Hz, chiến game mượt mà</b>
            </h3>

            <p style="text-align: justify">
              Màn hình của MSI GF63 10SC không chỉ hiển thị đẹp mà còn có tần số
              quét lên tới 144Hz. Trải nghiệm game của bạn sẽ được nâng lên tầm
              cao mới khi hình ảnh mượt mà hơn, đặc biệt hữu ích trong các tựa
              game bắn súng fps. Bạn sẽ không bị bỏ qua bất kỳ chuyển động nào
              trong trò chơi, qua đó sẽ có thể thao tác một cách chính xác nhất.
              Laptop có&nbsp;kích thước 15,6 inch, độ phân giải Full HD sắc nét, tấm nền IPS cao cấp, viền màn
              hình siêu mỏng 2 cạnh, bạn sẽ được tận hưởng những tựa game sống
              động, chân thực.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 5)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-10.jpg"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Tận hưởng âm thanh chuẩn gaming</b>
            </h3>

            <p style="text-align: justify">
              MSI GF63 sử dụng bộ phần mềm và
              <a
                href="https://fptshop.com.vn/tin-tuc/for-gamers/tim-hieu-ve-nahimic3-cong-nghe-am-thanh-cuc-dinh-tren-laptop-choi-game-msi-gf63-72485"
                >công nghệ âm thanh Nahimic3</a
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

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 6)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-9.jpg"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Tăng cường hiệu quả làm mát</b>
            </h3>

            <p style="text-align: justify">
              MSI GF63 Thin sử dụng công nghệ tản nhiệt mới, làm mát tốt hơn và
              đỡ ồn hơn 10% so với các thiết bị khác. Bạn sẽ không phải lo đến
              việc máy quá nóng dẫn đến hiệu năng giảm khi chơi game. Laptop sẽ
              tản nhiệt hiệu quả để tuổi thọ
              linh kiện được bền
              nhất và không gây khó chịu khi sử dụng.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 7)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-8.jpg"
              />
            </p>

            <h3 style="text-align: justify"><b>Thời lượng pin ấn tượng</b></h3>

            <p style="text-align: justify">
              Tùy theo mức độ game nặng bạn chơi mà thời lượng pin MSI GF63 Thin
              có thể thay đổi. Máy có khả năng chơi game trung bình trong vòng 7
              giờ đồng hồ. Đây là con số rất tốt với một chiếc
              laptop chơi game, đủ để bạn tận hưởng niềm vui trong một buổi nếu không có điều
              kiện sạc.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 8)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-1.jpg"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Tùy chỉnh hiệu năng linh hoạt</b>
            </h3>

            <p style="text-align: justify">
              Như thường lệ thì MSI GF63 vẫn có 3 chế độ tùy chỉnh hiệu năng
              nhanh, có thể chuyển đổi qua lại chỉ với phím MSI Shift. Đó là chế
              độ Sport, dành cho khi cần chơi game; chế độ Comfort lúc sử dụng
              bình thường và chế độ Eco để tiết kiệm pin. Sự chuyển đổi sẽ giúp
              bạn tối ưu nguồn lực và thời lượng pin khi sử dụng ở các nhu cầu
              khác nhau.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 9)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-2.jpg"
              />
            </p>

            <h3 style="text-align: justify">
              <b>Thiết kế gọn nhẹ, thoải mái chơi game ở bất cứ đâu</b>
            </h3>

            <p style="text-align: justify">
              Laptop MSI GF63 10SC có thiết kế hiện đại và phong cách đặc trưng
              của dòng laptop chơi game MSI. Toàn thân máy được làm từ lớp vỏ
              nhôm nguyên khối vừa bền vững, cứng cáp lại vừa rất nhẹ. MSI đã
              cải tiến để MSI GF63 mỏng nhẹ nhất có thể, nhưng vẫn đảm bảo được
              quá trình tản nhiệt hiệu quả. Máy có độ mỏng chưa đến 2,2cm và
              trọng lượng vỏn vẹn 1,86kg, những thông số rất khó tin đối với một
              chiếc laptop chơi game. MSI GF63 Thin có màu đen chủ đạo với những
              điểm nhấn màu đỏ như logo
              laptop MSI. Phần quạt thông gió hình chữ X ẩn dưới thân máy, tạo nên sự
              thanh thoát và liền khối trong thiết kế tổng thể.
            </p>

            <p style="text-align: center">
              <img
                alt="laptop MSI Gaming GF63 Thin 10SC-481VN i7 (ảnh 10)"
                src="https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/msi-gf63-thin-10scxr-4.jpg"
              />
            </p>
          </div>
        </div>
      </div>

      <h2 class="card-title card-title--badge">Đánh giá &amp; Nhận xét MSI Gaming GF63 Thin 10SC-481VN i7 10750H
        <span class="badge text-white" style="background: rgb(220, 53, 69);">293</span>
      </h2>

      <div class="c-rate-star">
        <div class="row">
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
  </body>
</html>