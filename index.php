    <?php 

	// Veritabanı bağlantısı için database.php dosyasını çağırıyorum.
	include("config/Database.php"); 


    if(isset($_POST['submitButton'])) {

		// Verileri Getir
		$nameSurname = $_POST['adinizSoyadiniz'];
		$email = $_POST['email'];
		$phone = $_POST['telefon'];
		$company = $_POST['firmaAdi'];
		
		function generateRandomCode($length = 6) {
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = '';
			for ($i = 0; $i < $length; $i++) {
				$randomIndex = mt_rand(0, strlen($characters) - 1);
				$code .= $characters[$randomIndex];
			}
			return $code;
		}

		$indirimKodu = generateRandomCode();

		$query = "INSERT INTO Formlar (Ad_Soyad, Email, Telefon, Firma_Adi, Indirim_Kodu) VALUES ('$nameSurname', '$email', '$phone', '$company', '$indirimKodu')"; 	
		if(mysqli_query($db, $query)) {
			
			//Sayfa yönlendirme kodu ve parametre ile geçiş
			header('location:tesekkurler.php?code='.$indirimKodu.'');

		} else {
			echo 'Hata bir sonraya yönlendirme.';
		}	
    }
	

    ?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Makro Teknik | %5 İndirim Kazanma Fırsatı">
    <meta name="author" content="Levelup Agency">
    <title>Makro Teknik | %5 İndirim Kazanma Fırsatı</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-lg-6 background-image p-0" data-background="url(img/main_bg_4.jpg)">
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
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <h4 class="mb-3">Formu Doldurun</h4>
	                        <form class="input_style_2" method="POST" action="">
	                        	<div class="form-group">
	                                <label for="full_name">Ad Soyad</label>
	                                <input type="text" name="adinizSoyadiniz" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="email_address">Email Adresi</label>
	                                <input type="email" name="email" class="form-control" required>
	                            </div>
								<div class="form-group">
	                                <label for="email_address">Telefon Numarası</label>
	                                <input type="tel" name="telefon" class="form-control" pattern="[1-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" placeholder="(555) 555 55 55" required>
	                            </div>
	                            <div class="form-group">
	                            	<label for="message_field">Firma Adı</label>
	                                <input type="text" name="firmaAdi" class="form-control" required>
	                            </div>
	                            <div class="form-group terms mb-4">
								    <label class="container_check"><a href="#" data-bs-toggle="modal" data-bs-target="#kvkk-txt">Kişisel Verilerin Korunması Bildirimi</a> 'ni okuduğumu ve anladığımı kabul ediyorum.
								        <input type="checkbox" name="agree" id="agree">
								        <span class="checkmark"></span>
								    </label>
								</div>
								<div class="form-group terms mb-4">
								    <label class="container_check"><a href="#" data-bs-toggle="modal" data-bs-target="#pazarlama-txt">Pazarlama izni metni</a> 'ni okuduğumu ve anladığımı kabul ediyorum.
								        <input type="checkbox" name="agree" id="agree">
								        <span class="checkmark"></span>
								    </label>
								</div>
	                            <button type="submit" name="submitButton" class="btn_1 full-width">Gönder</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© Makro Teknik - Tüm hakları saklıdır. Dijital Ajans : LEVELUP</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

	<!-- Modal terms -->
	<div class="modal fade" id="kvkk-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">KVKK</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="pazarlama-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Pazarlama</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/common_func.js"></script>

</body>
</html>