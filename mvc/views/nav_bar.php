<?php
global $path_project;
?>

<div class="nav_bar">
	<div class="logo">
		<a href=<?php echo "/" . $path_project . "/" ?> style="font-weight:900; font-size:20px"> Group 11</a>
	</div>
	<nav id = "nav">
			<ul id = "menuitem">
				<li><a href=<?php echo "/" . $path_project . "/"?>><span>Trang chủ</span></a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "about" ?>>Tin tức</a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "products" ?>>Sản phẩm</a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "contact" ?>>Liên hệ</a></li>
				<li><a href=<?php echo "/" . $path_project . "/" . "login" ?>>
				<?php  
				   if (isset($_SESSION['username'])!=''){
					echo $_SESSION['username'];
				   }
				   else {
					echo 'Đăng nhập';
				   }

				?>
			
			</a></li>
			    <?php 
				    if (isset($_SESSION['username'])!=''){
						?>
					<li><a href="library/logout.php">Logout</a></li>
					<?php 
					}
				?>
			</ul>

	</nav>
	<div class="cart-logo">
		<a href=<?php echo "/" . $path_project . "/" . "cart" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/cart.png" ?> width="30px"> &nbsp;</a>
		<a href=<?php echo "/" . $path_project . "/" . "search" ?>><img src=<?php echo "/" . $path_project . "/" . "images/logo/searchbox.jpg" ?> width="30px"></a>
		<!-- <div class="menu"> -->
		<img src=<?php echo "/" . $path_project . "/" . "images/logo/menu.png" ?> alt="" class = "menu" onclick="menuToggle()" />
		<!-- </div> -->
	</div>
</div>
<script type="text/javascript" src = <?php echo "/" . $path_project . "/" . "public/javascript/nav_bar.js" ?>></script>
