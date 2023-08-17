<?php
// Veritabanı bağlantısı için database.php dosyasını çağırıyorum.
include("config/Database.php"); 
session_start(); // cookie tutması için
if (!empty($_COOKIE['login'])){
    header("location: panel.php"); 
}
if(isset($_POST['submitButton'])) {
    // Verileri Getir
    $email = $_POST['email_address'];
    $password = $_POST['password'];
    $convertPassword = md5($password); // databasede şifreleme
    $query = "SELECT * FROM Kullanicilar WHERE Email='$email' and Password='$convertPassword' "; 	
    if($result = mysqli_query($db, $query)) {
		$rowcount= mysqli_num_rows($result);
		if($rowcount>0) {
			session_destroy();//var olan veriyi siliyor yeni datayı yazabilmek için
			setcookie("login",true,time()+31556926);
			//Sayfa yönlendirme kodu ve parametre ile geçiş
			header('location:panel.php');
		}
		else{
			echo '<script>alert("Hatalı Email")</script>';
		}
    } else {
        echo 'Email ya da şifre hatalı.'.$db->error.'';
    }		
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Betler Multipurpose Forms HTML Template">
    <meta name="author" content="Ansonika">
    <title>Makro Teknik | GİRİŞ EKRANI</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-lg-6 background-image p-0" data-background="url(img/main_bg_3.jpg)">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	                <a href="#0" id="logo"><img src="img/logo.svg" alt="" width="46" height="40"></a>
	                <div id="social">
	                    <ul>
                        <li><a href="https://www.facebook.com/makroteknikendustri/"><i class="social_facebook"></i></a></li>
	                        <li><a href="https://www.youtube.com/channel/UCemlCCPcboEjWv2D0PAX06g"><i class="social_youtube"></i></a></li>
	                        <li><a href="https://instagram.com/makro_teknik?igshid=18sfn3pimwek0"><i class="social_instagram"></i></a></li>
							<li><a href="https://tr.linkedin.com/company/makro-teknik"><i class="social_linkedin"></i></a></li>

	                    </ul>
	                </div>
	                <!-- /social -->
	                <div class="text-start">
	                	<small>Welcome back</small>
	                    <h1>Duis aute irure dolor in reprehenderit in voluptate velit esse.</h1>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto position-relative">
	                        <h4 class="mb-4">Giriş</h4>
	                        <form class="input_style_2" method="post">
	                            <div class="form-group">
	                                <label for="email_address">Email</label>
	                                <input type="email" name="email_address" id="email_address" class="form-control" Required>
	                            </div>
	                            <div class="form-group">
	                                <label for="password">Şifre</label>
	                                <input type="password" name="password" id="password" class="form-control" Required>
	                            </div>
	                            <button type="submit" name="submitButton" class="btn_1 full-width">Giriş</button>
	                        </form>
	                      
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© ORNEK TEKNIK - Tüm hakları saklıdır. Dijital Ajans : LEVELUP</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/common_func.js"></script>

</body>
</html>