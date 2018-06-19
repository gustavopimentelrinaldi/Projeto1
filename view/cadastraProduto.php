<?php
	include('../model/functions.php');
	include('../controller/cadastro_controller.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastrar produto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>

	<nav class="navigation bg-secondary">
		<div class="container">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
	      <a class="brand my-0 mr-md-auto font-weight-normal text-light" href="index.php"><h5>AutoPartsStore - REGISTER</h5></a>
	      <a class="btn btn-outline-warning mr-2 text-light" href="index.php">Voltar</a>
	    </div>
    </div>
	</nav>

	<form class="form-signin mt-5 mb-5" method="post" action="../controller/cadastro_controller.php">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Cadastrar produto</h1>
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
    <label for="valor" class="mt-2">Valor</label>
    <input type="text" id="valor" name="valor" class="form-control" placeholder="Preço">
    <label for="descricao" class="mt-2">Descrição</label>
    <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Descrição">
    <label for="estoque" class="mt-2">Quantidade em estoque</label>
    <input type="text" id="estoque" name="estoque" class="form-control" placeholder="Estoque">
    <label for="imagem" class="mt-2">Imagem</label>
    <input type="file" id="imagem" name="imagem" class="form-control" placeholder="File">
    <input id="add" name="add" class="btn btn-lg btn-primary btn-block mt-4" type="submit"></input>
    
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
  </form>

	
</body>
</html>