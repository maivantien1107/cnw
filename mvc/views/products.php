<?php
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FPT</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main_header.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main_banner.css">
    <link rel="stylesheet" href="assets/css/main_product.css">
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.1-web/css/all.css"> -->
</head>
<body>
    <div class="app">
        <header class="fs-header">
            

                <div class="f-hdtop">
                    <div class="f-wrap">
                        <a class="fs-logo" href="/" title="" aria-label="FPTShop" >
                            <i class="ficon f-logo">
                            </i>
                        </a>

                        <ul class="fs-hdmn">
                
                
                            <li>
                                <a href="/tin-tuc" title="" >
                                    <div class="base-ic">
                                        <i class="fa-solid fa-hands-asl-interpreting"></i>
                                       
                                    </div>
                                    <span>Thông tin hay</span>
                                </a>
                                <ul class="fs-hdmsub fs-hdmsnews">
                                    <li class=""><a href="/tin-tuc" title="">Tin mới</a></li>
                                    <li><a href="/tin-tuc/tin-khuyen-mai" title="">Khuyến mãi</a></li>
                                    <li><a href="/tin-tuc/thu-thuat" title="">Thủ thuật</a></li>
                                    <li><a href="/tin-tuc/for-gamers" title="">For Gamers</a></li>
                                    <li><a href="/tin-tuc/video-hot" title="">Video hot</a></li>
                                    <li><a href="/tin-tuc/danh-gia" title="">Đánh giá - tư vấn</a></li>
                                    <li><a href="/tin-tuc/giai-tri" title="">App &amp; Game</a></li>
                                    <li><a href="/tin-tuc/su-kien" title="">Sự kiện</a></li>
                                    
                                    
                                    
                                </ul>
                            </li>
                            
                            
                            <li>
                                <a href="/dich-vu" title="Thanh toán &amp; tiện ích" onclick="ga('send', 'event', 'Header ', 'Click Header', 'Thanh toán &amp; tiện ích');">
                                    <div class="base-ic">
                                        <i class="fa-brands fa-facebook-square"></i>
                                </div>
                                    <span>Thanh toán &amp; tiện ích</span>
                                </a>
                            </li>
                            <li>
                                <a href="/cart" title="" >
                                    <div class="base-ic">
                                        <i class="fa-regular fa-cart-arrow-down"></i>
                                    </div>
                                    <span>Giỏ hàng</span>
                                    <b class="fs-cartic countTotalCart" style="display: none;">0</b>
                                </a>
                            </li>
                        </ul>

                        <div class="fs-search">
                            <form action="" method="get" autocomplete="off">
                                <label for="key" class="mf-vhiditem">Nhập tên điện thoại, máy tính, phụ kiện... cần tìm</label>
                                <input class="fs-stxt" type="text" id="key" name="" placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm" autocomplete="off" maxlength="50">
                                <span class="icon-cance" id="icon-cance" style="display:none" title="Xóa">✕</span>
                                <button type="submit" aria-label="Tìm kiếm" class="search-button" title="Tìm kiếm">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <div class="fs-sresult" id="result" style="display : none !important;">
                                    <div class="fs-sremain">
                                        <ul></ul>
                                    </div>
                                </div>
                                
                                <div class="fs-result suggest-box sugg-his" style="display: none;">
                                    <div class="suggest-title">Lịch sử tìm kiếm
                                        <span class="ic-clear">Xóa</span>
                                    </div>
                                    <ul>
                                    </ul>
                                </div>
                                <div class="fs-result suggest-box suggest-box-propensity" style="display: none;">
                                    <div class="suggest-title">Xu hướng tìm kiếm
                                    </div>
                                    <ul>
                                    </ul>
                                </div>
                                <div class="fs-result suggest suggest-box" style="display: none;">
                                    <div class="suggest-left">
                                    <div class="fs-result-box fs-suggest-page" style="display: none;">
                                                
                                        </div>
                                        <div class="fs-result-box fs-suggest-text">
                                            <ul></ul>
                                        </div>
                                        <!--<div class="line"></div> -->
                                        <div class="fs-result-box fs-suggest-cate">
                                            <ul></ul>
                                        </div>
                                    </div>
                                    <div class="suggest-right">
                                        <div class="fs-result-box fs-suggest-product">
                                            <div class="suggest-title">Sản phẩm được tìm nhiều
                                            </div>
                                            <ul></ul>
                                            <div class="suggest-title suggest-news">Bài viết được tìm nhiều
                                            </div>
                                            <ul class="news-list"></ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end new -->
                            </form>
                        </div>
                    </div>
    
                </div>

                <nav class="fs-menu">

                </nav>


    
                
        </header>

        <div class="container">
            <main>
                <div class="category_container">
                    <div class="row header-container">
                        <p>Trang san pham</p>
                    </div>

                    <div class="cdt-banner m-b-20">
                        <div class="img-slider">
                            <div class="slide active">
                              <img src="./assets/img/Slider/1.webp" alt="">
                              
                            </div>
                            <div class="slide">
                              <img src="./assets/img/Slider/2.webp" alt="">
                              
                                
                            </div>
                            <div class="slide">
                              <img src="./assets/img/Slider/3.webp" alt="">
                              
                            </div>
                            <div class="slide">
                              <img src="./assets/img/Slider/4.webp" alt="">
                              
                            </div>
                            <div class="slide">
                              <img src="./assets/img/Slider/5.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/6.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/7.webp" alt="">
                              
                            </div>
                            
                            <div class="slide">
                              <img src="./assets/img/Slider/8.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/9.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/10.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/11.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/12.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/13.webp" alt="">
                              
                            </div>
                      
                            <div class="slide">
                              <img src="./assets/img/Slider/14.webp" alt="">
                              
                            </div>
                      
                      
                            
                            <div class="navigation">
                              <div class="btn active"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                              <div class="btn"></div>
                      
                            </div>
                          </div>
                      
                          <script type="text/javascript">
                          var slides = document.querySelectorAll('.slide');
                          var btns = document.querySelectorAll('.btn');
                          let currentSlide = 1;
                      
                          // Javascript for image slider manual navigation
                          var manualNav = function(manual){
                            slides.forEach((slide) => {
                              slide.classList.remove('active');
                      
                              btns.forEach((btn) => {
                                btn.classList.remove('active');
                              });
                            });
                      
                            slides[manual].classList.add('active');
                            btns[manual].classList.add('active');
                          }
                      
                          btns.forEach((btn, i) => {
                            btn.addEventListener("click", () => {
                              manualNav(i);
                              currentSlide = i;
                            });
                          });
                      
                          // Javascript for image slider autoplay navigation
                          var repeat = function(activeClass){
                            let active = document.getElementsByClassName('active');
                            let i = 1;
                      
                            var repeater = () => {
                              setTimeout(function(){
                                [...active].forEach((activeSlide) => {
                                  activeSlide.classList.remove('active');
                                });
                      
                              slides[i].classList.add('active');
                              btns[i].classList.add('active');
                              i++;
                      
                              if(slides.length == i){
                                i = 0;
                              }
                              if(i >= slides.length){
                                return;
                              }
                              repeater();
                            }, 10000);
                            }
                            repeater();
                          }
                          repeat();
                          </script>

                    </div>

                    <div class="row fspdbox">

                      <div class="col-3 p-8 p-r-3=">
                        <div class="cdt-filter">

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Hãng sản xuất

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 filterBrand">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Apple (MacBook)">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Apple (MacBook)</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Asus">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Asus</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="HP">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">HP</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Acer">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Acer</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="MSI">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">MSI</label>
                                  
                                </a>
                              </div>


                              <div class="checkbox frowitem" >
                                <a href="" title="Lenovo">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Lenovo</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Dell">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Dell</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Microsoft (Surface)">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Microsoft (Surface)</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Gigabyte">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Gigabyte</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Fujitsu">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Fujitsu</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Chuwi">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Chuwi</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Avita">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Avita</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Masstel">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Masstel</label>
                                  
                                </a>
                              </div>

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            <div class="cdt-filter__title">Mức giá</div>

                            <div class="cdt-filter__checklist listfilterv4  filterPrice">
                              
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Dưới 10 triệu">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Dưới 10 triệu</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Từ 10-15 triệu">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Từ 10-15 triệu</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Từ 15-20 triệu">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Từ 15-20 triệu</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Từ 20-25 triệu">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Từ 20-25 triệu</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Trên 25 triệu">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Trên 25 triệu</label>
                                  
                                </a>
                              </div>
                            </div>


                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Màn hình

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Khoảng 13 inch">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Khoảng 13 inch</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Khoảng 14 inch">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Khoảng 14 inch</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Trên 15 inch">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Trên 15 inch</label>
                                  
                                </a>
                              </div>

                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >RAM

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="4 GB">

                                  <i class="fa-thin fa-square"></i>
                                  <label>4 GB</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="8 GB">

                                  <i class="fa-thin fa-square"></i>
                                  <label>8 GB</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="16 GB">

                                  <i class="fa-thin fa-square"></i>
                                  <label>16 GB</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="32 GB">

                                  <i class="fa-thin fa-square"></i>
                                  <label>32 GB</label>
                                  
                                </a>
                              </div>

                              
                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >CPU

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Intel celeron">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Intel celeron</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Intel Pentium">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Intel Pentium</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Intel Core i3">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Intel Core i3</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Intel Core i5">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Intel Core i5</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Intel Core i7">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Intel Core i7</label>
                                  
                                </a>
                              </div>


                              <div class="checkbox frowitem" >
                                <a href="" title="Intel Core i9">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">Intel Core i9</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="AMD Ryzen 3">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">AMD Ryzen 3</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="AMD Ryzen 5">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">AMD Ryzen 5</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="AMD Ryzen 7">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">AMD Ryzen 7</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="AMD Ryzen 9">

                                  <i class="fa-thin fa-square"></i>
                                  <label for="">AMD Ryzen 9</label>
                                  
                                </a>
                              </div>

                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Card Đồ Hoạ

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Nvidia Geforce Series">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Nvidia Geforce Series</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Amd  radeon series">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Amd  radeon series</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Card onboard">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Card onboard</label>
                                  
                                </a>
                              </div>

                              

                              
                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Ổ cứng

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="SSD 1 tb">

                                  <i class="fa-thin fa-square"></i>
                                  <label>SSD 1 tb</label>
                                   
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="SSD 512 gb">

                                  <i class="fa-thin fa-square"></i>
                                  <label>SSD 512 gb</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="SSD 256 gb">

                                  <i class="fa-thin fa-square"></i>
                                  <label>SSD 256 gb</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="SSD 128 gb">

                                  <i class="fa-thin fa-square"></i>
                                  <label>SSD 128 gb</label>
                                  
                                </a>
                              </div>

                              

                              
                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Tính năng đặc biệt

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Hỗ trợ công nghệ optane">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Hỗ trợ công nghệ optane</label>
                                   
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="CPU intel 10th">

                                  <i class="fa-thin fa-square"></i>
                                  <label>CPU intel 10th</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Sử dụng tấm nền ips">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Sử dụng tấm nền ips</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Màn hình cảm ứng">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Màn hình cảm ứng</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Window bản quyền">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Window bản quyền</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Mở khoá vân tay">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Mở khoá vân tay</label>
                                  
                                </a>
                              </div>

                              

                              
                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Nhu cầu

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Gaming đồ hoạ">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Gaming đồ hoạ</label>
                                   
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Sinh viên">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Sinh viên</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Văn phòng">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Văn phòng</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Doanh nhân">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Doanh nhân</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Mỏng nhẹ">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Mỏng nhẹ</label>
                                  
                                </a>
                              </div>

                              

                              
                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Laptop khuyến mãi

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Gaming đồ hoạ">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Asus TUF Gaming</label>
                                   
                                </a>
                              </div>

                              

                              

                              
                              

                            </div>




                          </div>

                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Trả góp ưu đãi

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 ">
                              <div class="checkbox checkboxAll frowitem active">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Trả góp 0%">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Trả góp 0%</label>
                                   
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Trả góp 0Đ">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Trả góp 0Đ</label>
                                  
                                </a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="" title="Trả góp 0% và 0Đ">

                                  <i class="fa-thin fa-square"></i>
                                  <label>Trả góp 0% và 0Đ</label>
                                  
                                </a>
                              </div>
                              

                            </div>




                          </div>


                        

                        </div>

                      </div>

                      <div class="col-9 p-0">
                        <div class="card fplistbox">
                          
                          <div class="card-body p-0 p-t-15 p-b-30 fplistbox">

                            <div class="cdt-normal p-l-15 p-r-15 m-b-25 sortfirstbox">
                              <div class="cdt-list-tab" >
                                <span>Ưu tiên xem: </span>

                                <div class="btn-group">
                                  <ul class="listfilterv4">
                                    <li class="frowitem sort sort default active">

                                      <a href="" class="btn btn-outline-secondary">Bán chạy nhất</a>
                                    </li>
                                    <li class="frowitem sort">
                                      <a class="btn btn-outline-secondary">Trả góp 0%</a>
                                    </li>
                                    <li class="frowitem sort">
                                      <a class="btn btn-outline-secondary">Giá thấp</a>
                                    </li>
                                    <li class="frowitem sort">
                                      <a class="btn btn-outline-secondary">Giá cao</a>
                                    </li>
                                    <li class="frowitem sort">
                                      <a class="btn btn-outline-secondary">Ưu đãi online</a>
                                    </li>
                                  </ul>

                                </div>
                              </div>



                              <div class="cdt-grid-list">
                                <label class="cdt-dropdown">
                                  <div class="cdt-dropdown-button">Bán chạy nhất
                                    
                                  </div>
                                    
                                  <ul class="cdt-dropdown-menu">
                                     <li class="frowitem sort sortdefault active">Bán chạy nhất</li>

                                     <li class="frowitem sort ">Trả góp 0%</li>

                                     <li class="frowitem sort ">Giá cao</li>

                                     <li class="frowitem sort ">Giá thấp</li>

                                     <li class="frowitem sort ">Ưu đãi online</li>


                                  </ul>
                                </label>

                                <span class="fa-solid fa-grid">

                                </span>

                                <span class="fa-solid fa-list"></span>
                              </div>

                            </div>

                            <div class="cdt-product-wrapper m-b-20">

                              <div class="cdt-product prd-lap product-sale">
                                <div class="cdt-product__img" style="background-image: url(./assets/img/Img_product/backgroundproduct.webp); background-position: center center;
                                background-repeat: no-repeat;">
                                  <a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H ">
                                    <img src="./assets/img/Img_product/Acernitrogamingan515-58-52sp.webp" alt="" height="215">
                                  </a>

                                  <div class="cdt-product__label">
                                    <span class="badge badge-warning">Trả góp 0%</span>
                                    <span class="badge badge-primary">Giảm 3.500.000đ</span>
                                  </div>

                                </div>

                                <div class="cdt-product-info">
                                  <h3><a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H" class="cdt-product__name">Acer Nitro Gaming AN515-58-52SP/i5-12500H</a>
                                  </h3>

                                  <div class="cdt-product__show-promo">
                                    <div class="progress pdiscount2">24.490.000 ₫
                                      <div class="progress-bar" style="width: 87%;"></div>
                                    </div>
                                    <div class="strike-price"><strike>27.990.000 ₫</strike></div>
                                  </div>

                                  <div class="cdt-product__config">
                                    <div class="cdt-product__config__param">
                                      <span data-title="Màn hình">
                                        <i class="fa-thin fa-laptop"></i>15.6 inch</span>
                                        <span data-title="CPU"><i class="fa-solid fa-microchip"></i>Core i5</span>
                                        <span data-title="RAM"><i class="fa-solid fa-memory"></i>8 GB (1 thanh 8 GB)</span>
                                        <span data-title="Ổ cứng"><i class="fa-solid fa-hard-drive"></i>SSD 512 GB</span>
                                        <span data-title="Đồ họa"><i class="fa-brands fa-fantasy-flight-games"></i>NVIDIA GeForce RTX 3050 4GB</span>
                                        <span data-title="Trọng lượng"><i class="fa-solid fa-weight-hanging"></i>2.5 kg</span>
                                    </div>

                                    <div class="cdt-product__img-promo">
                                      <span class=""><img src="./assets/img/Img_promo/balo.webp" alt="Tặng Balo Gaming cao cấp"></span>
                                      <span class=""><img src="/assets/img/Img_promo/mousegaming.webp" alt="Tặng Chuột Gaming GM03"></span>
                                      <span class=""><img src="/assets/img/Img_promo//mocavoucher.webp" alt="Giảm thêm đến 400.000 đồng khi thanh toán qua ví Moca trên ứng dụng Grab"></span>
                                      <span class="active"><img src="/assets/img/Img_promo/Tpbankvoucher.webp" alt="Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO"></span>
                                      <div id="plistppromotion40156" class="cdt-product__text-promo">Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO

                                      </div>
                                    </div>

                                  </div>

                                  <div class="cdt-product__btn">
                                    <a href="" class="btn btn-primary btn-sm btn-main">MUA NGAY</a>
                                    <a href="" class="btn btn-secondary btn-sm btn-sub">SO SÁNH</a>
                                  </div>
                                </div>

                              </div>

                              <div class="cdt-product prd-lap product-sale">
                                <div class="cdt-product__img" style="background-image: url(./assets/img/Img_product/backgroundproduct.webp); background-position: center center;
                                background-repeat: no-repeat;">
                                  <a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H ">
                                    <img src="./assets/img/Img_product/Acernitrogamingan515-58-52sp.webp" alt="" height="215">
                                  </a>

                                  <div class="cdt-product__label">
                                    <span class="badge badge-warning">Trả góp 0%</span>
                                    <span class="badge badge-primary">Giảm 3.500.000đ</span>
                                  </div>

                                </div>

                                <div class="cdt-product-info">
                                  <h3><a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H" class="cdt-product__name">Acer Nitro Gaming AN515-58-52SP/i5-12500H</a>
                                  </h3>

                                  <div class="cdt-product__show-promo">
                                    <div class="progress pdiscount2">24.490.000 ₫
                                      <div class="progress-bar" style="width: 87%;"></div>
                                    </div>
                                    <div class="strike-price"><strike>27.990.000 ₫</strike></div>
                                  </div>

                                  <div class="cdt-product__config">
                                    <div class="cdt-product__config__param">
                                      <span data-title="Màn hình">
                                        <i class="fa-thin fa-laptop"></i>15.6 inch</span>
                                        <span data-title="CPU"><i class="fa-solid fa-microchip"></i>Core i5</span>
                                        <span data-title="RAM"><i class="fa-solid fa-memory"></i>8 GB (1 thanh 8 GB)</span>
                                        <span data-title="Ổ cứng"><i class="fa-solid fa-hard-drive"></i>SSD 512 GB</span>
                                        <span data-title="Đồ họa"><i class="fa-brands fa-fantasy-flight-games"></i>NVIDIA GeForce RTX 3050 4GB</span>
                                        <span data-title="Trọng lượng"><i class="fa-solid fa-weight-hanging"></i>2.5 kg</span>
                                    </div>

                                    <div class="cdt-product__img-promo">
                                      <span class=""><img src="./assets/img/Img_promo/balo.webp" alt="Tặng Balo Gaming cao cấp"></span>
                                      <span class=""><img src="/assets/img/Img_promo/mousegaming.webp" alt="Tặng Chuột Gaming GM03"></span>
                                      <span class=""><img src="/assets/img/Img_promo//mocavoucher.webp" alt="Giảm thêm đến 400.000 đồng khi thanh toán qua ví Moca trên ứng dụng Grab"></span>
                                      <span class="active"><img src="/assets/img/Img_promo/Tpbankvoucher.webp" alt="Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO"></span>
                                      <div id="plistppromotion40156" class="cdt-product__text-promo">Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO

                                      </div>
                                    </div>

                                  </div>

                                  <div class="cdt-product__btn">
                                    <a href="" class="btn btn-primary btn-sm btn-main">MUA NGAY</a>
                                    <a href="" class="btn btn-secondary btn-sm btn-sub">SO SÁNH</a>
                                  </div>
                                </div>

                              </div>

                              <div class="cdt-product prd-lap product-sale">
                                <div class="cdt-product__img" style="background-image: url(./assets/img/Img_product/backgroundproduct.webp); background-position: center center;
                                background-repeat: no-repeat;">
                                  <a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H ">
                                    <img src="./assets/img/Img_product/Acernitrogamingan515-58-52sp.webp" alt="" height="215">
                                  </a>

                                  <div class="cdt-product__label">
                                    <span class="badge badge-warning">Trả góp 0%</span>
                                    <span class="badge badge-primary">Giảm 3.500.000đ</span>
                                  </div>

                                </div>

                                <div class="cdt-product-info">
                                  <h3><a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H" class="cdt-product__name">Acer Nitro Gaming AN515-58-52SP/i5-12500H</a>
                                  </h3>

                                  <div class="cdt-product__show-promo">
                                    <div class="progress pdiscount2">24.490.000 ₫
                                      <div class="progress-bar" style="width: 87%;"></div>
                                    </div>
                                    <div class="strike-price"><strike>27.990.000 ₫</strike></div>
                                  </div>

                                  <div class="cdt-product__config">
                                    <div class="cdt-product__config__param">
                                      <span data-title="Màn hình">
                                        <i class="fa-thin fa-laptop"></i>15.6 inch</span>
                                        <span data-title="CPU"><i class="fa-solid fa-microchip"></i>Core i5</span>
                                        <span data-title="RAM"><i class="fa-solid fa-memory"></i>8 GB (1 thanh 8 GB)</span>
                                        <span data-title="Ổ cứng"><i class="fa-solid fa-hard-drive"></i>SSD 512 GB</span>
                                        <span data-title="Đồ họa"><i class="fa-brands fa-fantasy-flight-games"></i>NVIDIA GeForce RTX 3050 4GB</span>
                                        <span data-title="Trọng lượng"><i class="fa-solid fa-weight-hanging"></i>2.5 kg</span>
                                    </div>

                                    <div class="cdt-product__img-promo">
                                      <span class=""><img src="./assets/img/Img_promo/balo.webp" alt="Tặng Balo Gaming cao cấp"></span>
                                      <span class=""><img src="/assets/img/Img_promo/mousegaming.webp" alt="Tặng Chuột Gaming GM03"></span>
                                      <span class=""><img src="/assets/img/Img_promo//mocavoucher.webp" alt="Giảm thêm đến 400.000 đồng khi thanh toán qua ví Moca trên ứng dụng Grab"></span>
                                      <span class="active"><img src="/assets/img/Img_promo/Tpbankvoucher.webp" alt="Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO"></span>
                                      <div id="plistppromotion40156" class="cdt-product__text-promo">Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO

                                      </div>
                                    </div>

                                  </div>

                                  <div class="cdt-product__btn">
                                    <a href="" class="btn btn-primary btn-sm btn-main">MUA NGAY</a>
                                    <a href="" class="btn btn-secondary btn-sm btn-sub">SO SÁNH</a>
                                  </div>
                                </div>

                              </div>

                              <div class="cdt-product prd-lap product-sale">
                                <div class="cdt-product__img" style="background-image: url(./assets/img/Img_product/backgroundproduct.webp); background-position: center center;
                                background-repeat: no-repeat;">
                                  <a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H ">
                                    <img src="./assets/img/Img_product/Acernitrogamingan515-58-52sp.webp" alt="" height="215">
                                  </a>

                                  <div class="cdt-product__label">
                                    <span class="badge badge-warning">Trả góp 0%</span>
                                    <span class="badge badge-primary">Giảm 3.500.000đ</span>
                                  </div>

                                </div>

                                <div class="cdt-product-info">
                                  <h3><a href="" title="Acer Nitro Gaming AN515-58-52SP/i5-12500H" class="cdt-product__name">Acer Nitro Gaming AN515-58-52SP/i5-12500H</a>
                                  </h3>

                                  <div class="cdt-product__show-promo">
                                    <div class="progress pdiscount2">24.490.000 ₫
                                      <div class="progress-bar" style="width: 87%;"></div>
                                    </div>
                                    <div class="strike-price"><strike>27.990.000 ₫</strike></div>
                                  </div>

                                  <div class="cdt-product__config">
                                    <div class="cdt-product__config__param">
                                      <span data-title="Màn hình">
                                        <i class="fa-thin fa-laptop"></i>15.6 inch</span>
                                        <span data-title="CPU"><i class="fa-solid fa-microchip"></i>Core i5</span>
                                        <span data-title="RAM"><i class="fa-solid fa-memory"></i>8 GB (1 thanh 8 GB)</span>
                                        <span data-title="Ổ cứng"><i class="fa-solid fa-hard-drive"></i>SSD 512 GB</span>
                                        <span data-title="Đồ họa"><i class="fa-brands fa-fantasy-flight-games"></i>NVIDIA GeForce RTX 3050 4GB</span>
                                        <span data-title="Trọng lượng"><i class="fa-solid fa-weight-hanging"></i>2.5 kg</span>
                                    </div>

                                    <div class="cdt-product__img-promo">
                                      <span class=""><img src="./assets/img/Img_promo/balo.webp" alt="Tặng Balo Gaming cao cấp"></span>
                                      <span class=""><img src="/assets/img/Img_promo/mousegaming.webp" alt="Tặng Chuột Gaming GM03"></span>
                                      <span class=""><img src="/assets/img/Img_promo//mocavoucher.webp" alt="Giảm thêm đến 400.000 đồng khi thanh toán qua ví Moca trên ứng dụng Grab"></span>
                                      <span class="active"><img src="/assets/img/Img_promo/Tpbankvoucher.webp" alt="Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO"></span>
                                      <div id="plistppromotion40156" class="cdt-product__text-promo">Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO

                                      </div>
                                    </div>

                                  </div>

                                  <div class="cdt-product__btn">
                                    <a href="" class="btn btn-primary btn-sm btn-main">MUA NGAY</a>
                                    <a href="" class="btn btn-secondary btn-sm btn-sub">SO SÁNH</a>
                                  </div>
                                </div>

                              </div>

                              


                            </div>

                            <div class="cdt-product--loadmore">
                              <a class="btn btn-light">Xem thêm</a>
                            </div>



                          </div>


                        </div>
                
                      </div>


                    </div>

                </div>

            </main>

        </div>

        <div class="footer">
            

        </div>
    </div>
</body>
</html>