<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Makro Teknik | %5 İndirim Kazanma Fırsatı">
    <meta name="author" content="Levelup Agency">
    <title>Ornek Teknik | %5 İndirim Kazanma Fırsatı</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
    <style>
        #lottie-container {
            width: 250px;
            height: 250px;
            margin: auto;
        }
        .modal-body {
            text-align:center;
        }
    </style>
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
	                        <li><a href=""><i class="social_facebook"></i></a></li>
	                        <li><a href=""><i class="social_youtube"></i></a></li>
	                        <li><a href=""><i class="social_instagram"></i></a></li>
							<li><a href=""><i class="social_linkedin"></i></a></li>

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
	                        <h4 class="mb-3">Teşekkürler, %5 İndirim Kodunuz:</h4>
                            <h3 class="mb-3"><?php echo $_GET['code']; ?></h5>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© ORNEK TEKNIK - Tüm hakları saklıdır. Dijital Ajans : LEVELUP</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

	<!-- Modal terms -->
	<div class="modal fade" id="discound-code" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel"></h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    <div id="lottie-container"></div>
					<h5>%5 İndirim Kodunuz: </h5><h2><?php echo $_GET['code']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Kapat</button>
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
    <script>
// Lottie animasyonunu yükleyin
var animationContainer = document.getElementById('lottie-container');
var anim = lottie.loadAnimation({
  container: animationContainer, // Animasyonun görüntüleneceği HTML elementi
  renderer: 'svg', // SVG, Canvas veya HTML
  loop: true, // Döngü
  autoplay: true, // Otomatik başlat
  path: 'img/success.json' // JSON dosyasının yolu
});
</script>

    <script>
    window.onload = function() {
        var modal = new bootstrap.Modal(document.getElementById('discound-code'));
        modal.show();
    };
</script>
</body>
</html>