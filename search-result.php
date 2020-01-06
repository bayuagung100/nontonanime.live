<?php
include 'config/func.php';
if($_GET['q']) {
	$strip = urlencode($_GET['q']);
	$plus = str_replace(' ', '-', $strip);
} else {
	$plus = 'naruto';
}
include 'head.php'; 
if ($_GET['page']) {
	$pagination = $_GET['page'];
}else{
	$pagination = "1";
}
$url = grab(''.$spath.'page/'.$pagination.'?s='.$plus.'&post_type=anime&page');
$url3 = strstr($url, '<div id=sct_content class=fl>');
?>
<div id="content">
	<div class="col-md-8">
		<center>
			<?php include 'ads/native.php'; ?>
		</center>
		<div class="terbaru">
			<div class="stl">
				<div class="icon-list">
					<i class="fa fa-fire"></i>
				</div>
				Search result for "Search  : <?php echo $plus; ?>"
			</div>
			<div class="episodes">
				<?php
				$data = explode('<div class=node_gen>', $url3);
				$count = count($data);
				$count = $count-1;

				for($i=1; $i<=$count; $i++) {
					$perma = potong($data[$i], '<a href=', ' ');
					$perma =  str_ireplace(''.$spath.'', '/', $perma);
					$title = potong($data[$i], '<h2>', '</h2>');
					$title1 = potong($title, 'title="', '"');
					$id = potong($data[$i], '/video', '/');
					$thumb3 = potong($data[$i], 'src=', ' ');
					$path1=$thumb3 ;
					$type11 = pathinfo($path1, PATHINFO_EXTENSION);
					$data1 = file_get_contents($path1);
					$base64 = 'data:image/' . $type11 . ';base64,' . base64_encode($data1);
					$thumb2 = potong($data[$i], 'srcset="', '"');
					$desc = potong($data[$i], '<p>', '</p>');



					?>
					<div class="col-md-3 col-xs-6 box">
						<div class="eps">
							<a href="<?php echo $perma; ?>" title="<?php echo $title1; ?>">
								<img width="200" height="300" src="<?php echo $base64; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title1; ?>" />
								<div class="type BluRay">Subbed</div>
								<!--<div class="ep"></div>-->
								<div class="ttl">
									<h2><?php echo $title1; ?></h2>
								</div>

							</a>
						</div>
					</div>

					<?php
				}
				?>
			</div>
			<div class="pagination">
				<?php 
				if (empty($_GET['page'])) {
					$no = 1+1;
					$next = '&page='.$no;
				}elseif (!empty($_GET['page'])) {
					$no = $_GET['page']+1;
					$next = '?page='.$no;
				}

				if (!empty($_GET['page'])) {
					$no = $_GET['page']-1;
					$pre = '?page='.$no;
				} ?>

				<?php
				$link = 'https://nontonanime.live/search/'.$plus;
				if (empty($_GET['page']) or $_GET['page'] == 1 ) { 
					echo "";
				}else{ ?>
				<a href="<?php echo $link; ?><?php echo $pre; ?>#content" class="pull-left btn btn-primary anchor-scrolls" style="color: white;">Previous</a>
				<?php } 

				if ($count != 12) { 
					echo "";
				} else { ?>
				<a href="<?php echo $link; ?><?php echo $next; ?>#content" class="pull-right btn btn-primary anchor-scrolls" style="color: white;" >Next</a> 
				<?php } ?>
			</div>
		</div>
	</div>

	<!--batas content index -->
	<?php include 'sidex.php'; ?>
</div>
<?php include 'foot.php'; ?>