<?php
include 'config/func.php';
$art=$_GET['genre'];
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$art = explode('/genre/', $actual_link);
$art = $art[1];
if($_GET['page']) {
	$page = $_GET['page'];
	$url = $spath.'genres/'.$art.'/page/'.$page;
} else {
	$url = $spath.'genres/'.$art;
}
include 'head.php'; 
$url3 = strstr(grab($url), '<div id=sct_content class=fl>');
$genre = potong($url3, '<h1>', '</h1>');
$paging = potong($url3, '<div class=pagination>', '</div>');
$paging =  str_ireplace(''.$spath.'', '', $paging);
$paging =  str_ireplace('genres', ''.$dpath.'genre', $paging);
//$paging =  str_ireplace(''.$dpath.'genre', '', $paging);

//$paging =  str_ireplace('\'>', '\'><div class=\'pg\'>', $paging);
//$paging =  str_ireplace('</', '</div></', $paging);

//$paging =  str_ireplace('/s/', '/genre/', $paging);
//$paging =  str_ireplace('page-numbers dots', 'pg', $paging);
//$paging =  str_ireplace('&hellip;</div></span>', '&hellip;</span>', $paging);
//$paging =  str_ireplace('>Next', '><div class=\'pg\'>Next', $paging);
//$paging =  str_ireplace('&laquo; Previous</div>', '<div class=\'pg\'>&laquo; Previous</div>', $paging);

?>
<div id="content">
	<div class="col-md-8">
		<center>
			<?php include 'ads/728.php'; ?>
		</center>
		<div class="terbaru">
			<div class="stl">
				<div class="icon-list">
					<i class="fa fa-fire"></i>
				</div>
				Search result for "Search  : <?php echo $art; ?>"
			</div>
			<div class="episodes row">
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
					$type11 = pathinfo($thumb3, PATHINFO_EXTENSION);
					$data1 = grab($thumb3);
					$base64 = 'data:image/' . $type11 . ';base64,' . base64_encode($data1);
					$thumb2 = potong($data[$i], 'srcset="', '"');
					$desc = potong($data[$i], '<p>', '</p>');
					?>
					<div class="col-md-3 col-xs-6 box">
						<div class="eps">
							<a href="<?php echo $perma; ?>" title="<?php echo $title1; ?>">
								<img width="200" height="300" src="<?php echo $base64; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title1; ?>"/>
								<div class="type BluRay">Subbed</div>
								<div class="ep"><?php echo $genre;?></div>
								<div class="ctl">
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
				<?php echo $paging; ?>
			</div>
		</div>
	</div>
	<!--batas content index -->
	<?php include 'sidex.php'; ?>
</div>
<?php include 'foot.php'; ?>