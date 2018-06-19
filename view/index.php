<?php 
	require_once '../controller/connectionProduct.php';
	include ('../controller/product_controller.php');
	$login = isset($_GET['login']) ? $_GET['login'] : 0;
	$logout = isset($_GET['logout']) ? $_GET['logout'] : 0;
	$create = isset($_GET['create']) ? $_GET['create'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Auto Peças</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/jquery.js"></script>
</head>

<body>
	<nav class="navigation bg-secondary">
		<div class="container">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
	      <a class="brand my-0 mr-md-auto font-weight-normal text-light" href="index.php"><h5>AutoPartsStore</h5></a>
	      <a class="btn btn-info mr-2" href="login.php">Entrar</a>
	    </div>
    </div>
	</nav>

	<section class="produtos">
		<div class="container">
			<?php include('../controller/alert_controller.php'); ?>
			<div class="products-section-head text-center">
				<h3><span class="text-success">P</span>eças</h3>
				<p class="text-muted">“Conferir estoque”</p>
			</div>
			<div class="list" id="portfoliolist">
				<div class="container">
					<div class="row justify-content-center">
						<?php include('port.php'); ?>
					</div>
				</div>
			</div><!-- port list -->
		</div><!-- container -->
	</section>
</body>
</html>