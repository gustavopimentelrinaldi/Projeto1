<?php
	session_start();
	require_once '../controller/connectionProduct.php';
	include ('../controller/product_controller.php');
	$login = isset($_GET['login']) ? $_GET['login'] : 0;
	$logout = isset($_GET['logout']) ? $_GET['logout'] : 0;
	$create = isset($_GET['create']) ? $_GET['create'] : 0;
?>
<html lang="pt-BR">
	<head>
		<title>Backoffice</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/css-BS4/bootstrap.min.css"/>
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
			<?php
			  $query = "SELECT * FROM product";
			  $result = mysqli_query($conn, $query);
			  if(mysqli_num_rows($result) > 0) {
				while( $row = mysqli_fetch_assoc($result) ) {
					echo "<div class='card-deck mb-3 text-center'>";           
						echo "<div class='card mb-4 box-shadow'>";
							echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';  
							echo "<div class='card-header'>";
							  echo '<h4 class="my-0 font-weight-normal">' . $row["nome"] . '</h4>';
							echo "</div>"; 
							echo "<div class='card-body'>";
							 echo '<h3 class="my-0 font-weight-normal"><span class="badge badge-info">' . $row["valor"] . 'R$</span></h3>';
							 echo "<ul class='list-unstyled mt-3 mb-4>";
								echo '<li>' . $row["descricao"] . '</li>';
							 echo "</ul>";
							 echo '<h3>';
								echo '<span class="badge badge-light float-right">Estoque: ';
									echo '<span class="badge badge-warning">' . $row["estoque"] . '</span>';
								echo '</span>';
							 echo '</h3>';
							echo "</div>";
							echo "<a href='editaProduto.php' class='btn btn-sm btn-danger text-white'>Modificar</a>";
						echo "</div>";
					echo "</div>";
				}
			  }else {
				  echo "<div class='alert alert-warning container'>Nenhum cadastro para mostrar!</div>";
			  }
			?>
			</div>
		</section>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>