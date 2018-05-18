<!DOCTYPE html>
<html>
<head>
<title>login</title>
<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<script src="js/jquery.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="container">
		<div class="dreamcrub">
			<ul class="breadcrumbs">
				<li class="home">
						<a href="index.html" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
				</li>
				<li>
					Autenticação
				</li>
			</ul>
			<ul class="previous">
				<li><a href="index.php">Voltar</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>

	<section id="main">
			<div class="container">
				<form action="painel.php">
					<div class="login">
						<h4>login</h4><br><br>
						<div class="cus_info_wrap">
							<label>
							Email:
							<span class="require">*</span>
							</label><br><br>
							<input type="text" value="" placeholder="seu email">
						</div>
						<div class="cus_info_wrap">
							<label>
							Senha:
							<span class="require">*</span>
							</label><br><br>
							<input type="password" value="" placeholder="sua senha">
							<div class="button1">
								<input type="submit" value="ENTRAR" class="botton">
							</div>
						</div>
					</div><!-- login -->
				</form>
			</div><!-- container -->
	</section>
</body>
</html>