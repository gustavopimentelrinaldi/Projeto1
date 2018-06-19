<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/style.css"/>
</head>
<body id="login">

	<nav class="navigation bg-secondary">
		<div class="container">
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
	      <a class="brand my-0 mr-md-auto font-weight-normal text-light" href="index.php"><h5>AutoPartsStore - LOGIN</h5></a>
	      <a class="btn btn-outline-warning mr-2 text-light" href="index.php">Voltar</a>
	    </div>
    </div>
	</nav>

	<form class="form-signin mt-5" method="post" action="../controller/backoffice_controller.php">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Password">
    
    <button id="log" name="login" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <?php
			if($erro == 1){
				echo '<p class="mt-3" style="color: #FF0000;">Usuário e ou senha inválido(s)</p>';
			}
		?>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
  </form>

</body>
</html>