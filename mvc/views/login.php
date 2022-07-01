
<?php
ob_start();
session_start();
if(array_key_exists("username", $_POST)){
		$username = $_POST['username'];
		$password = $_POST['password'];
		require_once ROOT . DS . 'services' . DS . 'GuestServices.php';
		$service = new GuestServices();
		$checker = $service->checkAccount($username, $password);
		if($checker === True){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				// header("Location: profile");
		}
}
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
		if($_SESSION['username'] != '' && $_SESSION['password'] != '') {
				header("Location: profile");
		}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/account.css">
		<link rel="stylesheet" href="public/css/nav_bar.css" type="text/css">
		<link rel="stylesheet" href="public/css/footer_container.css" type="text/css">
		<title>Home | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<?php  ?>
		<div class="container">
        <div class="modal">
    <div class="modal__overlay"></div>
    <div class="modal__body">
        <!-- Login form -->
        <form action="/KACoffe/v1/auth/login" method="POST" >
            <div class="auth-form auth-login">
                <div class="container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <a href="/cnw-1/register" class="auth-form__switch auth-form__switch-register">Đăng ký</a>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="email" class="auth-form__input" name="email" placeholder="Email" required>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu của bạn" required>
                        </div>
                        <% if (warning) { %>
                            <div class="alert-warning mt-3 p-1 pl-2"><%= warning %></d>
                        <% } %>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="/KACoffe/v1/auth/forgot-password" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu ?</a>
                        </div>
                    </div>
                
                    <div class="auth-form__controls">
                        <a href="/KACoffe/v1" class="btn">TRỞ LẠI</a>
                        <button type="submit" class="btn btn--primaryy">ĐĂNG NHẬP</button>
                    </div>

                    <div class="auth-form__socials">
                        <a href="" class="btn btn--with-icon">
                            <i class="fab fa-facebook-square"></i> Kết nối với Facebook
                        </a>
                        <a href="" class="btn btn--with-icon">
                            <i class="fab fa-google"></i> Kết nối với Google
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
		</div>