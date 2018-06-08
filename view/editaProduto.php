<!DOCTYPE html>
<html>
<head>
<title>Edita produto</title>
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
			<li>Editar</li>
		</ul>
		<ul class="previous">
			<li><a href="painel.php">Voltar</a></li>
		</ul>
		<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div class="edita">				
			<div class="edita-form">
				<h2>Editar Produto</h2>
				<form method="post" action="index.html">
					<div>
						<span><label>id</label></span>
						<span><input name="idProduto" value="1" disabled/></span>
					</div>
					<div>
						<span><label>Nome</label></span>
						<span><input name="userName" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Preço</label></span>
						<span><input name="userEmail" type="text" class="textbox"></span>
					</div>
					<div>
						<span><label>Quantidade em estoque</label></span>
						<span><input name="userPhone" type="text" class="textbox"></span>
					</div>
				<div>
						<span><input type="submit" class="" value="Editar"></span>
				</div>
				</form>
			</div>
			<div class="clearfix"></div>		
		</div>
	</div>

</body>
</html>