<?php
	include('../model/functions.php');
	include('../controller/cadastro_controller.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastrar produto</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
					<a href="index.html" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
				</li>
				<li>Cadastrar</li>
			</ul>
			<ul class="previous">
				<li><a href="index.php">Voltar</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="edita">				
			<div class="edita-form">
				<h2>Cadastrar produto</h2>
				<form method="post" action="../controller/cadastro_controller.php">
					<div>
						<span><label>Nome</label></span>
						<span><input id="nome" name="nome" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Valor</label></span>
						<span><input id="valor" name="valor" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Descrição</label></span>
						<span><input id="descricao" name="descricao" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Quantidade em estoque</label></span>
						<span><input id="estoque" name="estoque" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Imagem</label></span>
						<span><input id="imagem" name="imagem" type="file" class="textbox"></span>
					</div>
				<div>
						<span><input type="submit" class="" id="add" name="add" value="Cadastrar"></span>
				</div>
				</form>
			</div>
		<div class="clearfix"></div>		
		</div>
	</div>
</body>
</html>