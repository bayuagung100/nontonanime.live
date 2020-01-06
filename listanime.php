<?php
include 'config/func.php';
$art=$_GET['genre'];
if($_GET['page']) {
	$page = $_GET['page'];
	$url = ''.$spath.'/anime-list#'.$page.'';
} else {
	$url = ''.$spath.'/anime-list';
}

include 'head.php'; 
$url3 = strstr(grab($url), '<div id=sct_content class=fl>');
$listanime = potong($url3, '<div class=list>', '<div id=sct_sidebar class=fr>');
$listanime = str_ireplace('<li><a class=series', '<li><a class=series', $listanime);
$listanime = str_ireplace('</li></ul><span>', '</li></ul><span>', $listanime);
$listanime = str_ireplace(''.$spath.'', '', $listanime);
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
				List Anime Series
			</div>
			<div class="episodes">


			</div>
			<div id="sct_content" class="fl">
				<div class="list nth">
					<?php echo $listanime; ?>

					<div class="pagination">
						<?php echo $paging; ?>
					</div>
				</div>
			</div>
			<!--batas content index -->
			<?php include 'sidex.php'; ?>
		</div>
		<?php include 'foot.php'; ?>