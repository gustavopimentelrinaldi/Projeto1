<?php
  require_once '../controller/connectionProduct.php';
  if( isset( $_POST['add'] ) ) {
    $nome = $valor = $descricao = $estoque = $imagem = "";
    $nome         = htmlspecialchars( $_POST["nome"] );
    $valor        = htmlspecialchars( $_POST["valor"] );
    $descricao       = htmlspecialchars( $_POST["descricao"] );
    $estoque   = htmlspecialchars( $_POST["estoque"] );
    $imagem         = htmlspecialchars( $_FILES["imagem"] );
    
    if($nome) {
      $query = "INSERT INTO product (id, nome, valor, descricao, estoque, imagem) VALUES (default, '$nome', '$valor', '$descricao', '$estoque', '$imagem')";
      $result = mysqli_query( $conn, $query );

      if($result) {
        header("Location: ../view/painel.php?create=1");
      } else {
        echo "Error: ". $query ."<br>" . mysqli_error($conn);
      }
    }
  }
  mysqli_close($conn);
?>