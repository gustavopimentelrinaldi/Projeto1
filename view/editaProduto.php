<?php
    session_start();
    include('../controller/connectionProduct.php');
    include('../model/functions.php');
    include('../controller/editaProduto.php');
?> 
<!DOCTYPE html>
<html>
<head>
<title>Edita produto</title>
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
    	      <a class="brand my-0 mr-md-auto font-weight-normal text-light" href="index.php"><h5>AutoPartsStore - EDIT</h5></a>
    	      <a class="btn btn-outline-warning mr-2 text-light" href="painel.php">Voltar</a>
    	    </div>
        </div>
	</nav>
    <?php
    // if delete button was submitted
    if(isset($_POST['delete'])){
        echo 
        "<div class='del alert alert-warning alert-dismissible text-center'>
            <h3>Você tem certeza de que quer excluir esse produto?</h3><br>
            <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$productID' method='post'>
                <button type='submit' class='btn btn-danger' name='confirm-delete'>
                Sim!</button>
                <a class='btn btn-secondary' href='painel.php'>Oops, não!</a>
            </form>
        </div>";
    }
    ?>
	<form class="form-signin mt-5 mb-5" method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $productID; ?>">
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Editar produto</h1>
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $nome; ?>" placeholder="Email address">
    <label for="valor" class="mt-2">Valor</label>
    <input type="text" id="valor" name="valor" class="form-control" value="<?php echo $valor; ?> " placeholder="Password">
    <label for="descricao" class="mt-2">Descrição</label>
    <input type="text" id="descricao" name="descricao" class="form-control" value="<?php echo $descricao; ?> " placeholder="Descrição">
    <label for="estoque" class="mt-2">Quantidade em estoque</label>
    <input type="text" id="estoque" name="estoque" class="form-control" value="<?php echo $estoque; ?> " placeholder="Estoque">
    <label for="imagem" class="mt-2">Imagem</label>
    <input type="file" id="imagem" name="imagem" class="form-control" value="" placeholder="File">
    <input id="update" name="update" class="btn btn-lg btn-primary btn-block mt-4" value="Atualizar" type="submit"></input>
    <input id="delete" name="delete" class="btn btn-lg btn-outline-danger btn-block mt-4" value="Excluir" type="submit"></input>
    
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018</p>
  </form>

</body>
</html>