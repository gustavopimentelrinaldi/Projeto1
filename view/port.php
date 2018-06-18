<div class="portfolio filtro mix_all">
	<div class="portfolio-wrapper">		
		<a href="preview.php" class="b-link-stripe b-animate-go  thickbox">
			<?php 
				$query = "SELECT * FROM product WHERE id = 3";
			  $result = mysqli_query($conn, $query);
			  $row = mysqli_fetch_assoc($result);
	    	echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';
			?>
		</a>
		<div class="title">
			<div class="colors">
			<h4><?php echo $row['nome']; ?></h4>
			<p> Colors:
				<ul>
					<a href="#"><li class="color1"></li></a>
				</ul>
			</p>
			</div>
			<div class="main-price">
				<h3><span>$</span><?php echo $row['valor']; ?></h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- port -->		

<div class="portfolio disco mix_all">
	<div class="portfolio-wrapper">		
		<a href="preview.php" class="b-link-stripe b-animate-go thickbox">
			<?php 
				$query = "SELECT * FROM product WHERE id = 1";
			  $result = mysqli_query($conn, $query);
			  $row = mysqli_fetch_assoc($result);
	    	echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';
			?>
		</a>
		<div class="title">
			<div class="colors">
			<h4>Disco de freio</h4>
			<p> Colors:
				<ul>
					<a href="#"><li class="color1"></li></a>
				</ul>
			</p>
			</div>
			<div class="main-price">
				<h3><span>$</span><?php echo $row['valor']; ?></h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- port -->	

<div class="portfolio amortecedor mix_all">
	<div class="portfolio-wrapper">		
		<a href="preview.php" class="b-link-stripe b-animate-go  thickbox">
			<?php 
				$query = "SELECT * FROM product WHERE id = 2";
			  $result = mysqli_query($conn, $query);
			  $row = mysqli_fetch_assoc($result);
	    	echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';
			?>
		</a>
		<div class="title">
			<div class="colors">
			<h4>Amortecedor</h4>
			<p> Colors:
				<ul>
					<a href="#"><li class="color1"></li></a>
				</ul>
			</p>
			</div>
			<div class="main-price">
				<h3><span>R$</span>210,99</h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- port -->	

<div class="portfolio regulador mix_all">
	<div class="portfolio-wrapper">		
		<a href="preview.php" class="b-link-stripe b-animate-go  thickbox">
			<?php 
				$query = "SELECT * FROM product WHERE id = 4";
			  $result = mysqli_query($conn, $query);
			  $row = mysqli_fetch_assoc($result);
	    	echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';
			?>
		</a>
		<div class="title">
			<div class="colors">
			<h4>Regulador</h4>
			<p> Colors:
				<ul>
					<a href="#"><li class="color1"></li></a>
				</ul>
			</p>
			</div>
			<div class="main-price">
				<h3><span>R$</span>250,00</h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- port -->	

<div class="portfolio regulador mix_all">
	<div class="portfolio-wrapper">		
		<a href="preview.php" class="b-link-stripe b-animate-go  thickbox">
			<?php 
				$query = "SELECT * FROM product WHERE id = 4";
			  $result = mysqli_query($conn, $query);
			  $result = mysqli_query($conn, $query);
			  $row = mysqli_fetch_assoc($result);
	    	echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';
			?>
		</a>
		<div class="title">
			<div class="colors">
			<h4>Regulador</h4>
			<p> Colors:
				<ul>
					<a href="#"><li class="color1"></li></a>
				</ul>
			</p>
			</div>
			<div class="main-price">
				<h3><span>R$</span>200,00</h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- port -->	

<div class="portfolio regulador mix_all">
	<div class="portfolio-wrapper">		
		<a href="preview.php" class="b-link-stripe b-animate-go  thickbox">
			<?php 
				$query = "SELECT * FROM product WHERE id = 4";
			  $result = mysqli_query($conn, $query);
			  $row = mysqli_fetch_assoc($result);
	    	echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagem']) . '" />';
			?>
		</a>
		<div class="title">
			<div class="colors">
			<h4>Regulador</h4>
			<p> Colors:
				<ul>
					<a href="#"><li class="color1"></li></a>
				</ul>
			</p>
			</div>
			<div class="main-price">
				<h3><span>R$</span>310,00</h3>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div><!-- port -->	