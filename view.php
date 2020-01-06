<?php

include 'config/func.php';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$se = explode('?page=', $actual_link);
$se = $se[1];
$id=$_GET['video'];
if($se > 1) {
	$url = ''.$spath.''.$id.'/'.$se.'';
} else {
	$url= ''.$spath.''.$id.'';
}
// inisial page
$url2 = strstr(grab($url), '<div id=sct_content class="fl mobilewrap">');



$descr = potong($url2, '<div class=infobox>', '<div class=inr>');
$img = potong($descr, 'src=', ' ');
$path=$img;
$type1 = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/

' . $type1 . ';base64,' . base64_encode($data);
$title = potong($descr, '<h3>', '</h3>');
$ketx = potong($descr, '<div class=seno>', '</div>');
$ket = potong($descr, '<div class=r>', '<div class=inr>');
$ket2 = potong($ket, '</p>', '</a></span>');
$ket2 =  str_ireplace('</div>', '', $ket2);
$ket2 =  str_ireplace('/genres/', '/genre/', $ket2);
$typeee = potong($ket2, '<span><b>Type</b>: ', '</span>');
//$ket2 = potong('</div></div>', '', $ket2);



// echo $title;

if ($typeee == "Movie") {
	$popular_movie	= file_get_contents('https://api.themoviedb.org/3/search/movie?query='.urlencode($title).'&api_key=e648b29f537a9d76a548abfd40a4ecef&include_adult=false');
	$pop = json_decode($popular_movie, true);
}elseif ($typeee == "TV") {
	$popular_tv	= file_get_contents('https://api.themoviedb.org/3/search/tv?query='.urlencode($title).'&api_key=e648b29f537a9d76a548abfd40a4ecef');
	$pop = json_decode($popular_tv, true);
}
// echo "<br>";
// echo $pop["results"][0]["backdrop_path"];
$popp = $pop["results"][0]["backdrop_path"];
if ($popp == "") {
	$popp = "https://4.bp.blogspot.com/-CZq57pqRWhE/V8oMIOz92ZI/AAAAAAAAB2Q/xaQ29e4-WT0JVufgxCPakavJORHHtHX0ACLcB/s1600/79410.jpg";
}else{
	$popp = 'https://image.tmdb.org/t/p/w533_and_h300_bestv2'.$pop["results"][0]["backdrop_path"];
}


$down = potong($url2, '<div class=ctr>', '</a>');
$down1 = potong($down, '<a href=', ' ');
$server = potong($url2, '<ul class=server>', '</ul>');
$film = potong($url2, '<div class=preview>', '<div class=ctr>');
$film =  str_ireplace('</div>', '', $film);
$film =  str_ireplace(';</script>', ';</script></div>', $film);
$film =  str_ireplace('https://1.bp.blogspot.com/-G-6NYcx2hnc/WJd0teiG-oI/AAAAAAAAMxY/kyYvt-FZgRQ9qJURhZR_9FXtFkIWipsqwCPcBGAYYCw/s1600/bb.jpg', '', $film);

// <a href="https://media.go2speed.org/brand/files/lazada/9195/ID_PuasaleTeasing_640x213.jpg" target="_blank">https://media.go2speed.org/brand/files/lazada/9195/ID_PuasaleTeasing_640x213.jpg</a>
$bar = potong($url2, '<div class="ep_nav fr">', '</div>');
$bar =  str_ireplace('<span class="nav next"><a href='.$spath.'', '<span class="nav next"><a href=/nonton/', $bar);
$bar =  str_ireplace('<span class="nav prev"><a href='.$spath.'', '<span class="nav prev"><a href=/nonton/', $bar);
$bar =  str_ireplace('<span class="nav all"><a href='.$spath.'', '<span class="nav all"><a href=/', $bar);

include 'head.php'; ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<br><br>
<div id="content">
	<div class="col-md-8">

			<?php include 'ads/native.php'; ?>
		

		<div class="">
			<div class="">
				<article class="post" itemscope itemtype="http://schema.org/Movie">

					<ul class="mirror">

						<style>
							.player-embed {height: auto;}
							.player-embed iframe {height: auto;}
							.anm_vid h1{border-bottom:none!important}
							.anm_vid .ep_nav{padding:4px 0;font-size:11px;font-weight:700;margin:0;margin-bottom:5px;text-decoration:none}
							.anm_vid a{color:#0077b6}
							.anm_vid .ep_nav .all{display:inline-block;}
							.anm_vid .ep_nav .next{float:right;margin-left: 8px;}
							.anm_vid .ep_nav .prev{float:left;margin-right: 8px;}
							.anm_vid .ep_nav a{padding:4px 7px;border-radius:4px;border:1px solid #272727;color:#999;background:#1b1b1b!important}
							.anm_vid .ep_nav a:hover{background:#003a59!important;border:1px solid #003a59;color:#CFCFCF;text-decoration:none}
							.jw-preview {background-image: url("<?php echo $film; ?>")!important;}
						</style>

						<div class="anm_vid">
							<!-- AddToAny BEGIN -->
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style" align="left">
								<a class="a2a_button_facebook"></a>
								<a class="a2a_button_twitter"></a>
								<a class="a2a_button_google_plus"></a>
								<a class="a2a_button_pinterest"></a>
								<a class="a2a_button_reddit"></a>
								<a class="a2a_button_wordpress"></a>
								<a class="a2a_button_whatsapp"></a>
								<a class="a2a_button_line"></a>
								<a class="a2a_button_blogger_post"></a>
								<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
							</div>

							<?php
							$title = potong($descr, '<h4>', '</h4>');
							$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
							?>
							<script>
								var a2a_config = a2a_config || {};
								a2a_config.linkname = "<?php echo $title; ?> ";
								a2a_config.linkurl = "<?php echo $actual_link; ?>";
							</script>
							<script async src="https://static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->
							<br/>
							<div class="ep_nav fr">
								<?php echo $bar; ?>
							</div>
						</div>
					</ul>  
                    <?php include"ads/bettingads2.php"?>

					<div class="alert alert-info alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Info!</strong> Anime yang jaman baheula sedang dalam proses reupload. Jika ada video rusak, ditunggu saja, mohon bersabar, ini ujian.
					 </div>
                    <br>
					<div id="embed_holder">
						<div class="player-embed" id="pembed">
							
							<?php echo $film; ?>
						</div>

						<div class="videonavi">
							<div class="l">
								<span class="lightSwitcher">Cinema mode ON</span>
							</div>
						</div>
					</div>
					<?php include"ads/bettingads.php"?>
					<?php include"ads/bettingads2bawah.php"?>
					<center>Jika video di atas tidak muncul, silakan gunakan mirror video di bawah ini : </center><hr>
					<ul class="server">
						<?php echo $server; ?>
					</ul>

					<?php
					$descr = potong($url2, '<div class=infobox>', '<div class=inr>');
					$img = potong($descr, 'src=', ' ');
					$path=$img;
					$type1 = pathinfo($path, PATHINFO_EXTENSION);
					$data = file_get_contents($path);
					$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
					$title = potong($descr, '<h3>', '</h3>');
					$ketx = potong($descr, '<div class=seno>', '</div>');
					$ket = potong($descr, '<div class=r>', '<div class=inr>');
					$ket2 = potong($ket, '</p>', '</a></span>');
					$ket2 =  str_ireplace('</div>', '', $ket2);
					$ket2 =  str_ireplace('genres', 'genre', $ket2);
					$ket2 =  str_ireplace($spath, '/', $ket2);
					//$ket2 = potong('</div></div>', '', $ket2);
					?>
					<h1 style="font-size: 25px;"><a href="/nonton/<?php echo $id; ?>" rel="bookmark" title="<?php echo $title; ?> Subtitle Indonesia" itemprop="url"><meta itemprop="name" content="1 Night (2017)"><?php echo $title; ?> Subtitle Indonesia</a></h1>
					<div class="sn">
						<img width="200" height="300" src="<?php echo $base64; ?>" class="attachment- size- wp-post-image" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" itemprop="image" />
						<div class="sinopsis" itemprop="description">
							<?php echo $ketx; ?>
						</div>
					</div>
					<div class="anf">
						<?php echo $ket2; ?>
					</a></span>
				</div>
				<div class="bdl">
					<a class="trailer" href="http://dolohen.com/afu.php?zoneid=2388352" ref='nofollow noreferrer' target="_blank">Fast Download</a>
					<a class="download" href="<?php echo $down1; ?>" target="_blank">Download</a></div>
				
				</article>
			</div>
		</div>
	</div>
	<?php include 'sidex.php'; ?>
	
	<?php include 'foot.php'; ?>