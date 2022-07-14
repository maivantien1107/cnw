<?php session_start();

	require_once ROOT . DS . 'application' . DS . 'products' . DS . 'PCApplication.php';
	require_once ROOT . DS . 'application' . DS . 'products' . DS . 'MouseProductsApplication.php';
  require_once ROOT . DS . 'application' . DS .'SupplierApplication.php';
  require_once ROOT . DS . 'application' . DS .'FilterApplication.php';
  require_once ROOT . DS . 'application' . DS . 'products' . DS . 'CPUApplication.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/main_header.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/main_banner.css">
    <link rel="stylesheet" href="public/css/main_product.css">
    <link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="public/css/nav_bar.css" >
    <!-- <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.1-web/css/all.css"> -->
</head>
<body>
    <div class="app">
        <?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
        <div class="container">
            <main>
                <div class="category_container">
                    <div class="row header-container">
                        <p>Trang san pham</p>
                    </div>

                    <div class="row fspdbox">

                      <div class="col-3 p-8 p-r-3=">
                        <div class="cdt-filter">
                            <!-- left menu supplier -->
                          <div class="cdt-filter__block">
                            
                            <div class="cdt-filter__title" >Hãng sản xuất

                            </div>

                            <div class="cdt-filter__checklist listfilterv4 filterBrand">
                              <div class="checkbox checkboxAll frowitem">
                                <a title="Tất cả">
                                <input name='chkmasv[]'  value='' class='check_search' type='checkbox'/>Tất cả</a>
                              </div>
                              <?php 
                                 $app=new FilterApplication();
                                 $data_url=$app->getUrl();
                                 $sup= new SupplierApplication();
                                 $listsupplier=$sup->getAll();
                                
                                 foreach($listsupplier as $supplier){
                                  $supplier1=$supplier->getSupplier();
                                  $result=$app->getHref('nha-san-xuat',$supplier1);
                              ?> 
                              <div class="checkbox frowitem" >
                                <a href="filter&<?php echo $result?>" title="<?php echo $supplier->getSupplier(); ?>">

                                <input name='chkmasv[]'  value='' class='check_search' type='checkbox'/>
                                  <label for=""> <?php echo $supplier->getSupplier(); ?></label>
                                  
                                </a>
                              </div>

                              <?php
                                 }
                              ?>                             

                            </div>
                          </div>

                          <div class="cdt-filter__block">
                            <div class="cdt-filter__title">Mức giá</div>

                            <div class="cdt-filter__checklist listfilterv4  filterPrice">
                              
                              <div class="checkbox checkboxAll frowitem ">
                                <a title="Tất cả">
                                  <i class="fa-thin fa-square"></i>Tất cả</a>
                              </div>

                              <div class="checkbox frowitem" >
                                <a href="filter&muc-gia=1" title="Dưới 10 triệu">

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
                              <?php 
                                 $cpu_tmp=new CPUApplication();
                                 $listcpu=$cpu_tmp->getAll();
                                 foreach($listcpu as $cpu){

                              ?>
                               <div class="checkbox frowitem" >
                                <a href="" title="<?php echo $cpu->getCPU(); ?>">

                                  <i class="fa-thin fa-square"></i>
                                  <label><?php echo $cpu->getCPU();?></label>
                                  
                                </a>
                              </div>
                              <?php    
                                 }
                              ?>
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
                         <!-- // Sản phẩm -->
                            <div class="cdt-product-wrapper m-b-20">
                              <?php
                                  //get all laptop 
                                  $listLaptop=$app->getAll();
                                  if ($listLaptop){
                                  foreach($listLaptop as $laptop){
                                    $path = $laptop->getModel();
					                          $path = str_replace(' ', '-', $path);
                              ?>
                                  <div class="cdt-product prd-lap product-sale">
                                <div class="cdt-product__img" style="background-image: url(public/img/Img_product/backgroundproduct.webp); background-position: center center;
                                background-repeat: no-repeat;">
                                  <a href="<?php echo "details/".$laptop->getProductID()."/".$path; ?>" title="<?php  echo $laptop->getModel(); ?> ">
                                    <img src="<?php echo $laptop->getImage();?>" alt="" height="215">
                                  </a>

                                  <div class="cdt-product__label">
                                    <span class="badge badge-warning">Trả góp 0%</span>
                                    <span class="badge badge-primary">Giảm 3.500.000đ</span>
                                  </div>

                                </div>

                                <div class="cdt-product-info">
                                  <h3><a href="<?php echo "details/".$laptop->getProductID()."/".$path; ?>" title="<?php echo $laptop->getModel(); ?>" class="cdt-product__name"><?php echo $laptop->getModel(); ?></a>
                                  </h3>

                                  <div class="cdt-product__show-promo">
                                    <div class="progress pdiscount2"><?php echo $laptop->getPrice(); ?> ₫
                                      <div class="progress-bar" style="width: 87%;"></div>
                                    </div>
                                    <div class="strike-price"><strike>27.990.000 ₫</strike></div>
                                  </div>

                                  <div class="cdt-product__config">
                                    <div class="cdt-product__config__param">
                                      <span data-title="Màn hình">
                                        <i class="fa-thin fa-laptop"></i><?php echo $laptop->getScreen(); ?></span>
                                        <span data-title="CPU"><i class="fa-solid fa-microchip"></i><?php echo $laptop->getCpu(); ?></span>
                                        <span data-title="RAM"><i class="fa-solid fa-memory"></i><?php echo $laptop->getRam(); ?></span>
                                        <span data-title="Ổ cứng"><i class="fa-solid fa-hard-drive"></i><?php echo $laptop->getMemory();?> GB</span>
                                        <span data-title="Đồ họa"><i class="fa-brands fa-fantasy-flight-games"></i><?php echo $laptop->getCard(); ?></span>
                                        <span data-title="Trọng lượng"><i class="fa-solid fa-weight-hanging"></i><?php echo $laptop->getWeigh(); ?> kg</span>
                                    </div>

                                    <!-- <div class="cdt-product__img-promo">
                                      <span class=""><img src="./assets/img/Img_promo/balo.webp" alt="Tặng Balo Gaming cao cấp"></span>
                                      <span class=""><img src="/assets/img/Img_promo/mousegaming.webp" alt="Tặng Chuột Gaming GM03"></span>
                                      <span class=""><img src="/assets/img/Img_promo//mocavoucher.webp" alt="Giảm thêm đến 400.000 đồng khi thanh toán qua ví Moca trên ứng dụng Grab"></span>
                                      <span class="active"><img src="/assets/img/Img_promo/Tpbankvoucher.webp" alt="Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO"></span>
                                      <div id="plistppromotion40156" class="cdt-product__text-promo">Ưu đãi đến 1.1 triệu khi mở thẻ TPBANK EVO

                                      </div>
                                    </div> -->

                                  </div>

                                  <div class="cdt-product__btn">
                                    <a href="" class="btn btn-primary btn-sm btn-main">MUA NGAY</a>
                                    <a href="" class="btn btn-secondary btn-sm btn-sub">SO SÁNH</a>
                                  </div>
                                </div>

                              </div>
                              
                        
                             <?php 
                             }
                            }
                            else { 
                              echo "Không có sản phẩm phù hợp";
                            }
                             ?>

                              <!-- <div class="cdt-product prd-lap product-sale">
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

                              -->
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
    </div>
    <script type="text/javascript" src="public/javascript/product.js"></script>

