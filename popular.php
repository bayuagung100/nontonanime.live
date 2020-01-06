<?php
include 'config/func.php';
$art=$_GET['genre'];
if($_GET['page']) {
	$page = $_GET['page'];
	$url = ''.$spath.'/popular-series';
} else {
	$url = ''.$spath.'/popular-series';
}

include 'head.php'; 
$url3 = strstr(grab($url), '<div id=sct_content class=fl>');
$genre = potong($url3, '<h1>', '</h1>');
$paging = potong($url3, '<div class=pagination>', '</div>');
$paging =  str_ireplace(''.$spath.'', '', $paging);
//$paging =  str_ireplace('\'>', '\'><div class=\'pg\'>', $paging);
//$paging =  str_ireplace('</', '</div></', $paging);
$paging =  str_ireplace('genres', 'genre', $paging);
//$paging =  str_ireplace('page-numbers dots', 'pg', $paging);
//$paging =  str_ireplace('&hellip;</div></span>', '&hellip;</span>', $paging);
//$paging =  str_ireplace('>Next', '><div class=\'pg\'>Next', $paging);
//$paging =  str_ireplace('&laquo; Previous</div>', '<div class=\'pg\'>&laquo; Previous</div>', $paging);
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
				Top List Anime
			</div>
			<div class="episodes row">
				<?php
				$data = explode('<div class=ndseries>', $url3);
				$count = count($data);
				$count = $count-1;

				for($i=1; $i<=$count; $i++) {
					$perma = potong($data[$i], 'href=', '>');
					$perma =  str_ireplace(''.$spath.'', '', $perma);
					$title1 = potong($data[$i], '<div class=title>', '</div>');
				//$title1 = potong($title, '\'>', '</a>');
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
								<img width="200" height="300" src="<?php echo $base64 ; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title1; ?>" />
								<div class="type BluRay">Subbed</div>
								<div class="ep">Top Series</div>
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