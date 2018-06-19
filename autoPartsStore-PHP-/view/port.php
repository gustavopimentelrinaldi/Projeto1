<?php
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0) {
while( $row = mysqli_fetch_assoc($result) ) {
	echo "<div class='portfolio filtro mix_all'>";           
		echo "<div class='portfolio-wrapper'>";
			echo "<a href='preview.php' class='b-link-stripe b-animate-go thickbox'>";
				echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';  
			echo "</a>";
			echo "<div class='title'>";
				echo "<div class='colors'>";
					echo '<h4>' . $row["nome"] . '</h4>';
					echo '<p>';
						echo 'Colors: ';
						echo '<ul>';
							echo '<a href="#"><li class="color1"></li></a>';
						echo '</ul>';
					echo '</p>';
				echo "</div>";
				echo "<div class='main-price'>";
					echo '<h3><span>$</span>' . $row["valor"] . '</h3>';
				echo "</div>";
				echo "<div class='clearfix'></div>";	
		echo "</div>";
	echo "</div>";
}
}else {
  echo "<div class='alert alert-warning container'>Nenhum cadastro para mostrar!</div>";
}
?>