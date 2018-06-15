<?php
	session_start();
	$login = isset($_GET['login']) ? $_GET['login'] : 0;
	$logout = isset($_GET['logout']) ? $_GET['logout'] : 0;
?>
<html lang="pt">
	<head>
		<title>Backoffice</title>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/panel.css">
	</head>
	<body>
		<nav class="navigation">
			<div class="container">
				<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
		      <a class="brand my-0 mr-md-auto font-weight-normal" href="index.php"><h5>AutoPartsStore</h5></a>
		      <nav class="my-2 my-md-0 mr-md-3">
		        <a class="p-2 text-dark" href="#"><?php echo $_SESSION['user_name']; ?></a>
		        <a class="p-2 text-dark" href="#"><?php echo $_SESSION['user_cpf']; ?></a>
		        <a class="p-2 text-dark" href="#"><?php echo $_SESSION['user_email']; ?></a>
		      </nav>
		      <a class="btn btn-outline-primary mr-2" href="cadastraProduto.php">Cadastrar Produto</a>
		      <a class="btn btn-outline-danger" href="../controller/logout_controller.php" name="logout">Sair</a>
		    </div>
	    </div>
		</nav>
  
		<section class="list">
	    <div class="container">
	    	<?php include('../controller/alert_controller.php'); ?>
	    	<div class="row">
		      <div class="card-deck mb-3 text-center">
		        <div class="card mb-4 box-shadow">
		        	<img src="images/filtro-de-oleo.jpg" alt="">
		        	<div class="card-header">
		            <h4 class="my-0 font-weight-normal">Filtro de óleo</h4>
		          </div>
		          <div class="card-body">
		            <h3><span class="badge badge-info ">300,00R$</span></h3>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Qualidade tal</li>
		              <li>...</li>
		            </ul>
		            <h3><span class="badge badge-light float-right">Estoque: <span class="badge badge-warning">354</span></span></h3>
		          </div>
		          <a href="editaProduto.php" class="btn btn-sm btn-danger text-white">Modificar</a>
		        </div>
		        <div class="card mb-4 box-shadow">
		        	<img src="images/coxim-do-amortecedor-dianteiro.jpg" alt="">
		        	<div class="card-header">
		            <h4 class="my-0 font-weight-normal">Coxim do amortecedor</h4>
		          </div>
		          <div class="card-body">
		            <h3><span class="badge badge-info ">300,00R$</span></h3>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Qualidade tal</li>
		              <li>...</li>
		            </ul>
		            <h3><span class="badge badge-light float-right">Estoque: <span class="badge badge-warning">490</span></span></h3>
		          </div>
		          <a href="editaProduto.php" class="btn btn-sm btn-danger text-white">Modificar</a>
		        </div>
		        <div class="card mb-4 box-shadow">
		        	<img src="images/disco-de-freio-solido.jpg" alt="">
		        	<div class="card-header">
		            <h4 class="font-weight-normal">Disco de freio sólido</h4>
		          </div>
		          <div class="card-body">
		            <h3><span class="badge badge-info ">300,00R$</span></h3>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Qualidade tal</li>
		              <li>...</li>
		            </ul>
		            <h3><span class="badge badge-light float-right">Estoque: <span class="badge badge-warning">354</span></span></h3>
		          </div>
		          <a href="editaProduto.php" class="btn btn-sm btn-danger text-white">Modificar</a>
		        </div>
					</div>
				</div>

				<div class="row">
		      <div class="card-deck mb-3 text-center">
		        <div class="card mb-4 box-shadow">
		        	<img src="images/regulador-de-pressao.jpg" alt="">
		        	<div class="card-header">
		            <h4 class="my-0 font-weight-normal">Filtro de óleo</h4>
		          </div>
		          <div class="card-body">
		            <h3><span class="badge badge-info ">300,00R$</span></h3>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Qualidade tal</li>
		              <li>...</li>
		            </ul>
		            <h3><span class="badge badge-light float-right">Estoque: <span class="badge badge-warning">354</span></span></h3>
		          </div>
		          <button class="btn btn-sm btn-danger">Modificar</button>
		        </div>
		        <div class="card mb-4 box-shadow">
		        	<img src="images/coxim-do-amortecedor-dianteiro.jpg" alt="">
		        	<div class="card-header">
		            <h4 class="my-0 font-weight-normal">Coxim do amortecedor</h4>
		          </div>
		          <div class="card-body">
		            <h3><span class="badge badge-info ">300,00R$</span></h3>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Qualidade tal</li>
		              <li>...</li>
		            </ul>
		            <h3><span class="badge badge-light float-right">Estoque: <span class="badge badge-warning">490</span></span></h3>
		          </div>
		          <a href="editaProduto.php" class="btn btn-sm btn-danger text-white">Modificar</a>
		        </div>
		        <div class="card mb-4 box-shadow">
		        	<img src="images/disco-de-freio-solido.jpg" alt="">
		        	<div class="card-header">
		            <h4 class="font-weight-normal">Disco de freio sólido</h4>
		          </div>
		          <div class="card-body">
		            <h3><span class="badge badge-info ">300,00R$</span></h3>
		            <ul class="list-unstyled mt-3 mb-4">
		              <li>Qualidade tal</li>
		              <li>...</li>
		            </ul>
		            <h3><span class="badge badge-light float-right">Estoque: <span class="badge badge-warning">354</span></span></h3>
		          </div>
		          <a href="editaProduto.php" class="btn btn-sm btn-danger text-white">Modificar</a>
		        </div>
					</div>
				</div>
	    </div>
		</section>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>