<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Store</title>
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/c34d1e1b2b.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- header>div.container.display-flex>div.flex-none+div.flex-stretch+div.flex-none.nav.container.display-flex>li*4>a[href="#articles$"]>{Article$} -->
	<header>
		<!-- Hambuger Menu -->
<!-- 			<nav class="navbar">
			<div class="navbar_logo">
				<a href="">Fruit Shop</a>
			</div>
			<ul class="navbar_menu">
				<li><a href=""></a>Products</li>
				<li><a href=""></a>Order</li>
				<li><a href=""></a>Sale</li>
				<li><a href=""></a>login</li>
			</ul>
			<ul class="navbar_icons">
				<li><i class="fa-sharp fa-solid fa-cart-shopping"></i></li>
			</ul>
			<a href="" class="navbar_toogleBtn">
				<i class="fa-solid fa-bars"></i>
			</a>
		</nav> -->
		<!-- Hambuger Menu -->

			<div class="container display-flex">
				<div class="flex-none">
					<h1>Fruit Store</h1>
				</div>
			<div class="flex-stretch"></div>
			<div class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="#article1">Ripe fruit</a></li>
					<li><a href="#article2">Unripe fruit</a></li>
				</ul>
			</div>
		</div>
	</header>


	<div class="container">
		<div class="card soft">
			<h2>Grid</h2>
	    <!-- Class 3 -->
				<div class="grid gap xs-small md-medium text-center">
							<div class="col-xs-6">Column 6</div>
							<div class="col-xs-6">Column 6</div>
							
							<div class="col-xs-4">Column 4</div>
							<div class="col-xs-4">Column 4</div>
							<div class="col-xs-4">Column 4</div>

							<div class="col-xs-3">Column 3</div>
							<div class="col-xs-3">Column 3</div>
							<div class="col-xs-3">Column 3</div>
							<div class="col-xs-3">Column 3</div>

							<div class="col-xs-2">Column 2</div>
							<div class="col-xs-2">Column 2</div>
							<div class="col-xs-2">Column 2</div>
							<div class="col-xs-2">Column 2</div>
							<div class="col-xs-2">Column 2</div>
							<div class="col-xs-2">Column 2</div>					

							<div class="grid ten col-xs-12 gap">
								<div class="col-xs-2">Column 2</div>
								<div class="col-xs-2">Column 2</div>
								<div class="col-xs-2">Column 2</div>
								<div class="col-xs-2">Column 2</div>
								<div class="col-xs-2">Column 2</div>
							</div>
						</div>
					</div>
				</div>

	<div class="container">
		<div class="card soft">
			<h2>Responsive Grid</h2>
			<div class="grid gap text-center">
				<div class="col-xs-12 col-md-6">Column 6</div>
				<div class="col-xs-12 col-md-6">Column 6</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>

				<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>
				<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
				<div class="col-xs-12 col-md-3 col-xl-4">Column 4</div>
				<div class="col-xs-12 col-md-3 col-xl-2">Column 2</div>

				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-3">Column 3</div>
				<div class="col-xs-12 col-md-4 col-xl-6">Column 6</div>
			</div>
		</div>
	</div>

	<!--div.container>div.grid.gap.xs-small.md-medium>div.col-xs-6.col-md-3*4>div.card.soft>img -->
	<div class="container">
		<div class="grid gap xs-small md-medium">
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"><img src="http://via.placeholder.com/500" alt="" class="media-image"></div>
			</div>
		</div>
	</div>
	<!-- Class3 -->

	<div class="container">
		<article id="article1" class="article">
			<h2>Ripe fruit</h2>
			<div class="article-body">
				<p>It recommend it to those that need fresh fruits right away.</p>
			</div>
		</article>
		<article id="article2" class="article">
			<h2>Unripe fruit</h2>
			<div class="article-body">
				<p>It is recommended for consumers who need storage, not fruits that can be eaten right away.</p>
			</div>
		</article>
	</div>	

	<div class="view-window"style="background-image:url(img/apple.jpeg)"></div>
	<div class="container">
		<article id="article1" class="article">
			<h2>Article 3</h2>
			<div class="article-body">
				<p>I think everyone has had an unsatisfactory experience about the delivered the fruit.<br>Sometimes unripe green bananas and mangoes come, so you couldn't eat them and had to wait a week. And once, avocados cam which was too ripe and about to rot. However, if there is not enough time to go and buy goods,you have no choice but to use this delivery system even though you know this problem. Single households that consume fruit slowly may need unripe bananas and avocados,but consumers who want to eat fruit right away like who live with many family members want moderately ripe good to eat right away.<br>From now on, you can decide the degree of ripe fruits and receive the corresponding fruits.
				</p>
			</div>
		</article>
	</div>
	
	<!-- <div class="view-window"style="background-image:url(img/avocado.jpeg)"></div>
	<div class="container">
		<article id="article2" class="article">
			<h2>Article 2</h2>
			<div class="article-body">
				<p>Avocado</p>
			</div>
		</article>
	</div>

	<div class="view-window"style="background-image:url(img/donut peach.jpeg)"></div>
	<div class="container">
		<article id="article3" class="article">
			<h2>Article 3</h2>
			<div class="article-body">
				<p>Donut peach</p>
			</div>
		</article>
	</div>

	<div class="view-window"style="background-image:url(img/lime.jpeg)"></div>
	<div class="container">
		<article id="article4" class="article">
			<h2>Article 4</h2>
			<div class="article-body">
				<p>Lime</p>
			</div>
		</article>
	</div>

	<div class="view-window"style="background-image:url(img/mango.jpeg)"></div>
	<div class="container">
		<article id="article5" class="article">
			<h2>Article 5</h2>
			<div class="article-body">
				<p>Mango</p>
			</div>
		</article>
	</div>
	
	<div class="view-window"style="background-image:url(img/melon.jpeg)"></div>
	<div class="container">
		<article id="article6" class="article">
			<h2>Article 6</h2>
			<div class="article-body">
				<p>Melon</p>
			</div>
		</article>
	</div>

	<div class="view-window"style="background-image:url(img/orange.jpeg)"></div>
	<div class="container">
		<article id="article7" class="article">
			<h2>Article 7</h2>
			<div class="article-body">
				<p>Orange</p>
			</div>
		</article>
	</div>

	<div class="view-window"style="background-image:url(img/pear.jpeg)"></div>
	<div class="container">
		<article id="article8" class="article">
			<h2>Article 8</h2>
			<div class="article-body">
				<p>Pear</p>
			</div>
		</article>
	</div>
		
	<div class="view-window"style="background-image:url(img/pineapple.jpeg)"></div>
	<div class="container">
		<article id="article9" class="article">
			<h2>Article 9</h2>
			<div class="article-body">
				<p>Pineapple</p>
			</div>
		</article>
	</div>
	
	<div class="view-window"style="background-image:url(img/pomegranate.jpeg)"></div>
	<div class="container">
		<article id="article10" class="article">
			<h2>Article 10</h2>
			<div class="article-body">
				<p>Pomegranate</p>
			</div>
		</article>
	</div>

	<div class="view-window"style="background-image:url(img/tomato.jpeg)"></div>
	<div class="container">
		<article id="article11" class="article">
			<h2>Article 11</h2>
			<div class="article-body">
				<p>Tomato</p>
			</div>
		</article>
	</div>
	
	<div class="view-window"style="background-image:url(img/watermelon.jpeg)"></div>
	<div class="container">
		<article id="article12" class="article">
			<h2>Article 12</h2>
			<div class="article-body">
				<p>Watermelon</p>
			</div>
		</article>
	</div> -->
	<!-- class 9/20 -->
	
</body>
</html>