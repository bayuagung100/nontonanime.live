<!Doctype html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="id">
<head>

	<link rel="icon" type="image/png" href="https://nontonanime.live/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="googlebot" content="index,follow" />
	<meta name="adz2younet-site-verification" content="20126fac4ece93025fd49477603276b6">
	<meta name="cpm-adcom-site-verification" content="e99056e8f99aee86cc20d5686d8ef13c">
	<?php 
	$search = array(
      '-',
      '.html'
     );
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($actual_link, 'nontonanime.live/nonton/') or strpos($actual_link, 'nontonanime.live/anime/')) { ?>
	<title>Nonton Anime <?php echo ucwords(str_ireplace($search, ' ', $_GET['video'])); ?> Subtitle Indonesia - NontonAnime</title>
	<?php }else{ ?>
	<title>Nonton Anime Subtitle Indonesia Terbaru <?php echo date('Y'); ?> dan Terlengkap full episode - NontonAnime</title>
	<?php } ?>

	<link href="//fonts.googleapis.com/css?family=Droid Sans:regular,700&subset=latin" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="/style.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
	<?php if (strpos($actual_link, 'nontonanime.live/nonton/')) { ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>">
	<?php }elseif (strpos($actual_link, 'nontonanime.live/anime/')) { ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>">
	<?php }else{ ?>
	<link rel="canonical" href="<?php echo $actual_link; ?>">
	<?php } ?>
		<meta name="Author" content="Nonton Anime">

	<?php if (strpos($actual_link, 'nontonanime.live/nonton/')) { 
		$descrrr = potong($url2, '<div class="infobox">', '<div class="inr">');
		$titleee = potong($descrrr, '<h3>', '</h3>');
		$kettt = potong($descrrr, '<div class="seno">', '</div>'); 
		$kettt = str_replace("<p>","",$kettt);
		$kettt = str_replace("</p>","",$kettt);
		$kettt = str_replace("&#8230;","",$kettt);
		$kettt = trim(preg_replace('/\s+/', ' ', $kettt)); ?>
		<meta name="description" content="<?php echo $titleee; ?> - <?php echo $kettt; ?> - Nonton Anime <?php echo $titleee; ?> Subtitle Indonesia"/>
		
		<?php }else{ ?>
		<meta name="description" content="NontonAnime - Web Nonton Anime Subtitle Indonesia Terbaru <?php echo date('Y'); ?> dan Terlengkap full episode. Streaming Anime Online Terlengkap. Nonton Online Streaming Film Anime terbaik terlengkap. Download Film Anime Terbaru. Gratis."/>
		<?php } ?>
		<meta name="Keywords" content="<?php $titlee = str_ireplace('-', ' ', $_GET['video']); echo str_ireplace('.html', '', $titlee); ?>, Nonton Anime 21, NontonAnime21, Nonton Anime terbaru dan terlengkap, Nonton Anime, Anime Indo, Nonton Anime Subtitle Indonesia, Download Anime, Situs Anime online gratis, Download Anime Subtitle Indonesia, Animeindoweb, Film Anime Terbaru 2018, Nonton Anime Indo terbaru, Nonton anime samehadaku gratis, Movieu Online, Layarkacaxxi, Streaming anime Subtitle Indonesia, Nonton Naruto Subtitle Indonesia, Nonton Anime Online, Nonton Anime Favorit, Streaming Anime, Streaming Anime Subtitle indonesia, Nonton Streaming Anime, Layarkaca21 Cinema indonesia, Nonton Film Anime, Nonton Film Anime Subtitle Indonesia, Nonton Anime Web, Video Naruto, Nonton Anime Naruto, Download Film, LK21 Film Download, Animeindo, Situs Nonton Anime Subtitle Indonesia, Anime Subtitle Indonesia terbaru 2017, Nonton Naruto Subtitle Indonesia, Nonton Naruto Shippuden, Nonton Film Boruto, Nonton Boruto Full Episode, Nonton Anime One Piece, Nonton Anime action gratis, Nonton Anime Subtitle Indonesia Terlengkap, Nonton Anime Subtitle Indonesia One Punch Man, nonton anime Subtitle Indonesia dragon ball super, Layarkaca21, icinema3satu, Anime Spring Subtitle Indonesia, Daftar Anime Samehadaku, Samehadaku Net, Anime Subtitle Indonesia Samehadaku">
		
			<?php if (strpos($actual_link, 'nontonanime.live/nonton/')) { 
			$descrrr = potong($url2, '<div class="infobox">', '<div class="inr">');
			$titleee = potong($descrrr, '<h3>', '</h3>'); ?>
			<meta property="og:title" content="Nonton Anime <?php echo $titleee; ?> Subtitle Indonesia - Nontonanime" />
			<?php }else{ ?>
			<meta property="og:title" content="Nonton Anime Subtitle Indonesia Terbaru <?php echo date('Y'); ?> dan Terlengkap full episode" />
			<?php } ?>
			<meta property="og:locale" content="id_ID" />
			
			<?php if (strpos($actual_link, 'nontonanime.live/nonton/')) { ?>
			<meta property="og:url" content="<?php echo $actual_link; ?>"/>
			<?php }elseif (strpos($actual_link, 'nontonanime.live/anime/')) { ?>
			<meta property="og:url" content="<?php echo $actual_link; ?>"/>
			<?php }else{ ?>
			<meta property="og:url" content="<?php echo $actual_link; ?>"/>
			<?php } ?>

			<?php if (strpos($actual_link, 'nontonanime.live/nonton/')) { 
				$descrrr = potong($url2, '<div class="infobox">', '<div class="inr">');
				$titleee = potong($descrrr, '<h3>', '</h3>');
				$kettt = potong($descrrr, '<div class="seno">', '</div>'); 
				$kettt = str_replace("<p>","",$kettt);
				$kettt = str_replace("</p>","",$kettt);
				$kettt = str_replace("&#8230;","",$kettt);
				$kettt = trim(preg_replace('/\s+/', ' ', $kettt)); ?>
				<meta property="og:description" content="<?php echo $titleee; ?> - <?php echo $kettt; ?> -  - Nonton Anime <?php echo $titleee; ?> Subtitle Indonesia" />
				<?php }else{ ?>
				<meta property="og:description" content="NontonAnime - Web Nonton Anime Subtitle Indonesia Terbaru <?php echo date('Y'); ?> dan Terlengkap full episode. Streaming Anime Online Terlengkap. Nonton Online Streaming Film Anime terbaik terlengkap. Download Film Anime Terbaru. Gratis." />
				<?php } ?>
				<?php if ($thumb == '') {
					$covershare = 'https://nontonanime.live/cover.png';
				}else{
					$covershare = 'https://nontonanime.live/cover.png';
				} ?>
				<meta property="og:image" content="<?php echo $covershare; ?>"/>
				<meta property="og:site_name" content="Nonton Anime" />
				<meta property="og:type" content="Object" />
				<script type="application/ld+json">
					{
						"@context": "https://schema.org",
						"@type": "WebSite",
						"url": "https://nontonanime.live",
						"name": "NontonAnime",
						"alternateName": "Nonton Anime",
						"potentialAction": 
						{
							"@type": "SearchAction",
							"target": "https://nontonanime.live/search/{q}",
							"query-input": "required name=q"
						}
					}
				</script>

				<!-- / Yoast SEO plugin. -->
				<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
				<!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

				<!-- Optional theme -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

				<!-- Latest compiled and minified JavaScript -->

				<meta name="generator" content="Nonton Anime" />
				<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>
				
                <!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109063463-7"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-109063463-7');
				</script>

				
				<!-- Safelinku.com Full Page Script Exclude-->
				<!-- <script type="text/javascript">
					var go_url = 'https://idsly.bid/';
					var api = '2be5b2c519fd1c34798c58211b1f2efb3169932c';
					var shorten_exclude = ['nontonanime.live', 'www.dmca.com', 'dolohen.com','www.hoki228.com','www.pasaranqq.com',
					'www.raja111.com','bit.ly','www.11juni.org','rumahceme.com','www.suhubl.com','www.pasaranindo.com','jasaqq88.com',
					'bandarqq1.com']; 
				</script>
				<script src='https://rawcdn.githack.com/riandiramdani/safelinku.com/dfea660cf01dddb004f50c30a69b4d2e58157e34/script.js'></script>-->
				<!-- Safelinku.com Full Page Script Exclude-->

            <style>
            .potong {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            </style>
			</head>
			<body>
			<div id='shadow'>
			</div>
			
			<nav class="navbar navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/" title="Nonton Anime">
								<img src="/nonton-anime.png" alt="Nonton Anime" title="Nonton Anime">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li>
									<a href="/" title="Nonton Anime">Home</a>
								</li>
								<li>
									<a href="/genres" title="Genre Anime">Genre</a>
								</li>
								<li>
									<h4 class="menu-h4"><a href="/anime-list" title="List Anime">List Anime</a></h4>
								</li>
								<li>
									<a href="/movie-list" title="Movie Anime">Movie</a>
								</li>
								<li>
									<h4 class="menu-h4"><a href="/popular-series" title="Populer Series Anime">Popular Series</a></h4>
								</li>
								<li>
									<h4 class="menu-h4"><a href="/anime-ongoing" title="Anime Ongoing">Anime Ongoing</a></h4>
								</li>
							</ul>
							<form method="get" id="searchform" action="/search.php">
								<input id="s" class="search-live" type="text" placeholder="Cari anime disini..." name="q"/>
								<button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				
			<div class="container">
			<div class="row">
			    <?php include "ads/468.php"?>

				<!-- <div class="col-sm-12 text-center potong" style="margin-top: 10px">
					<a href="http://bit.ly/306QG0z" target="_blank">
						<img style="width:1070px; height:90px;"title="CMD368 Situs Judi Online, Judi Bola, Domino Qiu Qiu, Daftar Judi Bola, Agen Judi Bola Terpercaya" src="https://nontonanime.live/ads/banner/Web-Blog-Banner-1070x90.gif" >
				  </a> 
				</div> -->
			</div>
            </div>


				<div class="container">
					<div class="row">
