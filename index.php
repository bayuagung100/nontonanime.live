<?php
include 'config/func.php';
if($_GET['page']) {
	$page = $_GET['page'];
	$url = ''.$spath.'page/'.$page.'/';
} else {
	$url = ''.$spath.'';
}
$hot = strstr(grab($url), '<div class="wrap mobilewrap">');
$thumb = potong($hot, 'src="', '"'); 
include 'head.php'; ?>
<div class="col-md-12" style="float: inherit;">
	<div class="h1anime">
		<h1>Nonton Anime</h1>
	</div>
	<div class="genrehome">
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/action" title="action">Action</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/adventure" title="adventure">Adventure</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/based-on-a-comic" title="based-on-a-comic">Based on a Comic</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/card-game" title="card-game">Card Game</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/cars" title="cars">Cars</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/comedy" title="comedy">Comedy</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/crime" title="crime">Crime</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/dementia" title="dementia">Dementia</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/demons" title="demons">Demons</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/drama" title="drama">Drama</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/ecchi" title="ecchi">Ecchi</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/family" title="family">Family</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/fantasy" title="fantasy">Fantasy</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/friendship" title="friendship">Friendship</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/game" title="game">Game</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/action" title="action">Action</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genre/harem" title="harem">Harem</a>
		<a class="col-md-2" href="<?php echo $dpath; ?>genres" title="genres">All Genre</a>
	</div>
</div>
<?php
echo '<div class="col-md-12">
<div id="content">
	<div class="stl"><div class="icon-list"><i class="fa fa-fire"></i></div> <h2 class="h2-category">Hot Update Minggu Ini</h2></div>
	<div class="carousel" height="225px" data-flickity=\'{ "autoPlay": true,"wrapAround": true }\'>';
		$urlhot = explode('<div class=node>', $hot);
// menghitung banyaknya data yang terdapat pada array
		$count = count($urlhot);
		$count = $count-1;

// mengulang sebanyak data yang terdapat pada array
// disini saya menggunakan for
		for($i=1; $i<=7; $i++) {
			$title = potong($urlhot[$i], '<div class=title>', '</div>');
			$id2 = potong($urlhot[$i], 'href=', '>');
			$id2 =  str_ireplace(''.$spath.'', '/nonton/', $id2);
			$cover = potong($urlhot[$i], 'src=', ' ');
			$path=$cover;
			$type1 = pathinfo($path, PATHINFO_EXTENSION);
			$data = file_get_contents($path);
			$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
			$stat = potong($urlhot[$i], '<span class=sub>', '</span>');
			$episode = potong($urlhot[$i], '<div class=episode>', '</div>');
//$judul2 = potong($urlxxx[$i], '<h2 class="title-main-obj ellipsis-2">', '</h2>');
//$arties = potong($urlxxx[$i], '<h4 class="title-sub ellipsis-2">', '</h4>');

			echo '
			<div class="col-md-2 col-xs-6">
				<div class="carousel-cell">
					<a rel="789" href="'.$id2.'" title="'.$title.'">
						<img width="200" height="300" src="'.$base64.'" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="'.$title.'" />
						<div class="ep">'.$episode.'</div>
						<div class="ctl">
							<h2>'.$title.'</h2>
						</div>
					</a>
				</div>
			</div>';
		}
		echo '</div>
		<!--end Hot Update Minggu Ini -->
		<div class="row">
			<div class="col-md-8">
				<center>';
					include 'ads/native.php'; ?>
				</center>
				<div class="terbaru">
					<div class="stl">
						<div class="icon-list">
							<i class="fa fa-fire"></i>
						</div>
						<h2 class="h2-category">Episode Terbaru</h2>
					</div>
					<div class="alert alert-info alert-dismissible fade in">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Info!</strong> Anime yang jaman baheula sedang dalam proses reupload. Jika ada video rusak, ditunggu saja, mohon bersabar, ini ujian.
					</div>
					<div class="episodes row">
						<?php
						$urlx = strstr(grab($url), '<div id=sct_content class="fl mobilewrap">');
						$paging = potong($urlx, '<div class=pagination>', '</div>');
						$paging =  str_ireplace(''.$spath.'', ''.$dpath.'', $paging);
						//$paging =  str_ireplace(''.$dpath.'/page/page/', ''.$dpath.'page/', $paging);
							//$urlxx = strstr(grab($url), '<div id="episodes">');

						$urlxxx = explode('<div class=node>', $urlx);
							// menghitung banyaknya data yang terdapat pada array
						$count = count($urlxxx);
						$count = $count-1;

							// mengulang sebanyak data yang terdapat pada array
							// disini saya menggunakan for
						for($i=1; $i<=$count; $i++) {
							$title = potong($urlxxx[$i], '<div class=title>', '</div>');
							$id2 = potong($urlxxx[$i], 'href=', '>');
							$id2 =  str_ireplace(''.$spath.'', '/nonton/', $id2);
							$cover = potong($urlxxx[$i], 'src=', ' ');
							$path=$cover;
							$type1 = pathinfo($path, PATHINFO_EXTENSION);
							$data = file_get_contents($path);
							$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
							$stat = potong($urlxxx[$i], '<span class=sub>', '</span>');
							$episode = potong($urlxxx[$i], '<div class=episode>', '</div>');
								//$judul2 = potong($urlxxx[$i], '<h2 class="title-main-obj ellipsis-2">', '</h2>');
								//$arties = potong($urlxxx[$i], '<h4 class="title-sub ellipsis-2">', '</h4>');

							?>    
							<div class="col-md-3 col-xs-6">
								<div class="box">
									<div class="eps">
										<a href="<?php echo $id2; ?>" title="<?php echo $title; ?>">
											<img width="200" height="300" src="<?php echo $base64; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="<?php echo $title; ?>" alt="<?php echo $title; ?>" />
											<div class="ep"><?php echo $episode; ?></div>
											<div class="ctl">
												<h2><?php echo $title; ?></h2>
											</div>

										</a>
									</div>
								</div>
							</div>

							<?php
						}
						?>
						<div class="paginasi">
							<style type="text/css">
								.paginasi {
									display: table;
									margin: auto;
									margin-bottom: 20px;
								}
								.paginasi .page-numbers {
									background: #be1212;
									color: white;
									padding: 5px 10px;
									border-radius: 5px;
									margin-left: 1px;
									margin-right: 1px;
								}
								.paginasi .dots, .paginasi .current {
									background: transparent;
									color: #555;
								}
							</style>
							<?php echo $paging; ?>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="terbaru">
							<div class="stl">
								<div class="icon-list">
									<i class="fa fa-fire"></i>
								</div>
								<h2 class="h2-category">Popular Ongoing Update</h2>
							</div>
							<div class="episodes row">
								<?php
								$urlx = strstr(grab($url), '<ul class=og_up>');
								$paging = potong($urlx, '<div class=pagination>', '</div>');
								$paging =  str_ireplace(''.$spath.'', '', $paging);
							//$urlxx = strstr(grab($url), '<div id="episodes">');

								$urlxxx = explode('<li>', $urlx);
							// menghitung banyaknya data yang terdapat pada array
								$count = count($urlxxx);
								$count = 10-1;

							// mengulang sebanyak data yang terdapat pada array
							// disini saya menggunakan for
								for($i=1; $i<=$count; $i++) {
									$title = potong($urlxxx[$i], '<h2>', '</h2>');
									$id2 = potong($urlxxx[$i], 'href=', ' ');
									$id2 =  str_ireplace(''.$spath.'', '/', $id2);
									$cover = potong($urlxxx[$i], 'src=', ' ');
									$path=$cover;
									$type1 = pathinfo($path, PATHINFO_EXTENSION);
									$data = file_get_contents($path);
									$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
									$stat = potong($urlxxx[$i], '<span class=sub>', '</span>');
									$episode = potong($urlxxx[$i], '<div class=episode>', '</div>');
								//$judul2 = potong($urlxxx[$i], '<h2 class="title-main-obj ellipsis-2">', '</h2>');
								//$arties = potong($urlxxx[$i], '<h4 class="title-sub ellipsis-2">', '</h4>');

									?>    
									<div class="col-md-4 col-xs-6">
										<div class="box">
											<div class="eps">
												<a href="<?php echo $id2; ?>" title="<?php echo $title; ?>">
													<img style="width: 100%; height: auto!important; min-height: 150px;" src="<?php echo $base64; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="<?php echo $title; ?>" alt="<?php echo $title; ?>" />
													<div class="ctl">
														<h2 style="font-size: 11px;"><?php echo $title; ?></h2>
													</div>

												</a>
											</div>
										</div>
									</div>

									<?php
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="terbaru">
							<div class="stl">
								<div class="icon-list">
									<i class="fa fa-fire"></i>
								</div>
								<h2 class="h2-category">Anime Series Terbaru</h2>
							</div>
							<style type="text/css">
								.pagination {
									display: inline-block;
									padding-left: 0;
									margin: 20px 0;
									border-radius: 4px;
									margin: auto;
									display: table;
									margin-bottom: 30px;
									padding: 20px;
									width: 100%;
									background: #eee;
								}
							</style>
							<div class="episodes row">
								<?php
								$urlx = strstr(grab($url), '<div class=nd>');

								$urlxxx = explode('<div class=ndseries>', $urlx);
								// menghitung banyaknya data yang terdapat pada array
								$count = count($urlxxx);
								$count = 10-1;

								// mengulang sebanyak data yang terdapat pada array
								// disini saya menggunakan for
								for($i=1; $i<=$count; $i++) {
									$title = potong($urlxxx[$i], '<div class=title>', '</div>');
									$id2 = potong($urlxxx[$i], 'href=', '>');
									$id2 =  str_ireplace($spath, '/', $id2);
									$cover = potong($urlxxx[$i], 'src=', ' ');
									$path=$cover;
									$type1 = pathinfo($path, PATHINFO_EXTENSION);
									$data = file_get_contents($path);
									$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
									$stat = potong($urlxxx[$i], '<span class=sub>', '</span>');
									$episode = potong($urlxxx[$i], '<div class=episode>', '</div>');
									?>    
									<div class="col-md-4 col-xs-6">
										<div class="box">
											<div class="eps">
												<a href="<?php echo $id2; ?>" title="<?php echo $title; ?>">
													<img style="width: 100%; height: auto!important; min-height: 150px;" src="<?php echo $base64; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="<?php echo $title; ?>" alt="<?php echo $title; ?>" />
													<div class="ctl">
														<h2 style="font-size: 11px;"><?php echo $title; ?></h2>
													</div>

												</a>
											</div>
										</div>
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--batas content index -->
			<?php include 'side.php'; ?>
		</div>
	</div>
	<?php include 'foot.php'; ?>