<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Visualizar</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/half-slider.css" />
</head>

<body>
	<nav id="flipkart-navbar">
		<div class="container">
			<div class="row row2">
				<div class="col-sm-2">
					<h2><span class="smallnav menu">AutoParts Store</span></h2>
					<h1 class="largenav navbar-brand">AutoPeças</h1>
				</div>
				<div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
					<div class="row">
						<input class="flipkart-navbar-input col-xs-11" type="" placeholder="Search for Products, Brands and more" name="">
						<button class="flipkart-navbar-button col-xs-1">
							<svg width="15px" height="15px">
									<path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
							</svg>
						</button>
					</div>
				</div>
				<div class="acesso largenav col-sm-2">
					<a class="acesso-button">
						Acessar
						<span class="item-number ">0</span>
					</a>
				</div>
			</div>
		</div>
	</nav>

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/disco-de-freio-solido.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Disco de Freio</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/filtro-de-oleo.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Filtro de Óleo</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/regulador-de-pressao.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Regulador de pressão</h2>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="preview">
			<div class="container">
				<div class="col-lg-12">
					<h1>Half Slider by Start Bootstrap</h1>
					<p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>half-slider.css</code>file.</p>
				</div>
			</div>
		</div>
        <hr>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>