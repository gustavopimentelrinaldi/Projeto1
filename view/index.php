<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Auto Peças</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.js"></script>
</head>

<body id="index">
	<nav>
		<div class="container">
			<div class="row row2">
				<div class="col-sm-2">
					<h2><span class="smallnav menu">AutoParts Store</span></h2>
					<h1 class="largenav navbar-brand">AutoPeças</h1>
				</div>
				<div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
					<div class="row">
						<input class="col-xs-11" type="" placeholder="Procurar peça" name="">
						<button class="nav-button col-xs-1">
							<svg width="15px" height="15px">
									<path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
							</svg>
						</button>
					</div>
				</div>
				<div class="acesso largenav col-sm-2">
					<a href="login.php" class="acesso-button">
						Acessar
						<span class="item-number ">0</span>
					</a>
				</div>
			</div>
		</div>
	</nav>

	<section class="produtos">
		<div class="container">
			<div class="products-section-head text-center">
				<h3><span>P</span>eças</h3>
				<p>“Conferir estoque”</p>
			</div>
			<ul id="filters" class="clearfix">
				<li><span class="filter active" data-filter="filtro disco amortecedor regulador"><label class="active"></label>Tudo</span></li>
				<li><span class="filter" data-filter="filtro"><label></label>Filtro</span></li>
				<li><span class="filter" data-filter="disco"><label></label>Disco</span></li>
				<li><span class="filter" data-filter="amortecedor"><label></label>Amortecedor</span></li>
				<li><span class="filter" data-filter="regulador"><label></label>Regulador</span></li>
			</ul>

			<div id="portfoliolist">
				<?php include('port.php'); ?>
			</div><!-- port list -->
		</div><!-- container -->
	</section>


  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
		$(function () {
			var filterList = {
				init: function () {
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						onMixEnd: filterList.hoverEffect()
					});				
				},
				hoverEffect: function () {
					$('#portfoliolist .portfolio').hover(
						function () {
							$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
						},
						function () {
							$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
						}		
					);				
				}
			};
			filterList.init();
		});	
	</script>
</body>
</html>