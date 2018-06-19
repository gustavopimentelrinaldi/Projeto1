<?php
  $query = "SELECT * FROM product";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0) {
	while( $row = mysqli_fetch_assoc($result) ) {
		echo '<div class="col-md-4">';           
			echo '<div class="card mb-4 box-shadow">';
				echo '<img class="card-img-top" src="data:image/jpeg;base64,' . base64_encode($row["imagem"]) . '" />';  
				echo '<hr><h3 class="card-title container">' .$row["nome"]. '</h3>';
				echo '<div class="card-body">';
				 echo '<p class="mb-4 font-weight-normal text-muted">' . $row["descricao"] . '</p>';
				 echo '<div d-flex justify-content-between align-items-center">';
						echo '<h4><span class="badge badge-light float-left">Estoque: '. $row["estoque"] .'</h4></span>';
						echo '<button type="button" class="btn btn-success float-right">'.$row["valor"].'R$</button>';
				 echo '</div>';
				 
				echo "</div>";
			echo '</div>';
		echo '</div>';
	}
  }else {
	  echo '<div class="alert alert-warning container">Nenhum cadastro para mostrar!</div>';
  }
?>