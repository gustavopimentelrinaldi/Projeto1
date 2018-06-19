<?php
	$productID = $_GET['id'];
	$query = "(SELECT * FROM product WHERE id='$productID')";
  
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
			$nome         = $row['nome'];
			$valor        = $row['valor'];
			$descricao       = $row['descricao'];
			$estoque   = $row['estoque'];
			$imagem         = $row['imagem'];
		}
	}

	if( isset($_POST['update']) ){
    // set variables
    $nome         = validateFormData( $_POST["nome"] );
    $valor        = validateFormData( $_POST["valor"] );
    $descricao       = validateFormData( $_POST["descricao"] );
    $estoque   = validateFormData( $_POST["estoque"] );
    $imagem         = validateFormData( $_POST["imagem"] );
    
    // new database query & result
    $query = "UPDATE product
							SET product.nome = '$nome',
							product.valor = '$valor',
							product.descricao = '$descricao',
							product.estoque = '$estoque',
							product.imagem = '$imagem'

							WHERE product.id = '$productID'";
    
    $result = mysqli_query($conn, $query);
    
    if($result) {
      // redirect to client page with query string
			header("Location: painel.php?update=1");
    } else {
      echo "Error updating record: " . mysqli_error($conn); 
    }
	}

	// if confirm delete button was submitted
	if(isset($_POST['confirm-delete'])){
		// new database query & result
		$query = "DELETE FROM product WHERE id='$productID'";
		$result = mysqli_query($conn, $query);
		
		if($result) {
			// redirect to client page with query string
			header("Location: painel.php?delete=1");
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	}
  mysqli_close($conn);
?>