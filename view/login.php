<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
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
				<form method="post" action="../controller/backoffice_controller.php">
					<div class="login">
						<h4>login</h4><br><br>
						<div class="cus_info_wrap">
							<label>
							Email:
							<span class="require">*</span>
							</label><br><br>
							<input type="text" id="email" name="email" value="" placeholder="seu email">
						</div>
						<div class="cus_info_wrap">
							<label>
							Senha:
							<span class="require">*</span>
							</label><br><br>
							<input type="password" name="senha" value="" placeholder="sua senha">
							<div class="button1">
								<button type="submit" id="senha" class="botton">Entrar</button>
							</div>
							<?php
								if($erro == 1){
									echo '<p class="mt-3" style="color: #FF0000;">Usuário e ou senha inválido(s)</p>';
								}
							?>
						</div>
					</div><!-- login -->
				</form>
			</div><!-- container -->
	</section>

	<script>
		$(document).ready( function(){
			//verificar se os campos de usuário e senha foram devidamente preenchidos
			$('#log').click(function(){
				var campo_vazio = false;
				if($('#email').val() == ''){
					$('#email').css({'border-color': '#A94442'});
					campo_vazio = true;
				} else {
					$('#email').css({'border-color': '#CCC'});
				}
				if($('#senha').val() == ''){
					$('#senha').css({'border-color': '#A94442'});
					campo_vazio = true;
				} else {
					$('#senha').css({'border-color': '#CCC'});
				}
				if(campo_vazio) return false;
			});
		});	
	</script>
</body>
</html>