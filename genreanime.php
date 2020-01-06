<?php
include 'config/func.php';
$art=$_GET['genre'];
if($_GET['page']) {
	$page = $_GET['page'];
	$url = ''.$spath.'/genres'.$page.'';
} else {
	$url = ''.$spath.'/genres';
}
include 'head.php'; 
$url3 = strstr(grab($url), '<div id=sct_content class=fl>');
$listanime = potong($url3, '<ul class=gen>', '</ul>');
$listanime = str_ireplace('<a class=series', '<br/><a class=series', $listanime);
$listanime = str_ireplace(''.$spath.'', '', $listanime);
$listanime = str_ireplace('genres', 'genre', $listanime);
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
				List Genre Anime
			</div>

			
			<div id="sct_content" class="fl">
				<ul class="gen genrehome">
					<?php echo $listanime; ?>
				</ul>
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