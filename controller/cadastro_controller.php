<?php
  require_once '../controller/connectionProduct.php';

  if( isset( $_POST['add'] ) ) {
    $nome = $valor = $descricao = $estoque = $imagem = "";
    $nome         = htmlspecialchars( $_POST["nome"] );
    $valor        = htmlspecialchars( $_POST["valor"] );
    $descricao       = htmlspecialchars( $_POST["descricao"] );
    $estoque   = htmlspecialchars( $_POST["estoque"] );
    $imagem         = $_FILES["imagem"];
  
    if($nome) {
      $query = "INSERT INTO product (id, nome, valor, descricao, estoque, imagem) VALUES (default, '$nome', '$valor', '$descricao', '$estoque', '$imagem')";
      $stmt = $conn->prepare($query);
      $stmt->bind_param($imagem);
      $stmt->send_long_data(2, $imagem);

      $stmt->execute();

      if($stmt) {
        header("Location: ../view/painel.php?create=1");
      } else {
        echo "Error: ". $query ."<br>" . mysqli_error($conn);
      }
    }
  }
  mysqli_close($conn);
?>