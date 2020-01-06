<?php
include 'config/func.php';
$id=$_GET['video'];
$url = ''.$spath.'anime/'.$id.'';

include 'head.php'; 
$urlx = strstr(grab($url), '<div id=sct_content class=fl>');
$img = potong($urlx, 'src=', ' ');
$path=$img;
$type1 = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
$judul = potong($urlx, '<h1 style="border-bottom: 0;">', '</h1>');

$inf = potong($urlx, '</h2><p>', '<div class=clear></div>');
$sta =  potong($urlx, '<ul>', '</ul>');
$sta =  str_ireplace('<li>', '<span>', $sta);
$sta =  str_ireplace('</li>', '</span>', $sta);
$sta =  str_ireplace(''.$spath.'genres/', '/genre/', $sta);
?>

<div id="content">
	<!--end Hot Update Minggu Ini -->
	<div class="col-md-8">
		<?php include 'ads/native.php'; ?>
		<div class="terbaru">
			<div class="stl">
				<div class="icon-list">
					<i class="fa fa-fire"></i>
				</div>
				<?php echo $judul; ?>
			</div>
			<div class="episodes">
				<div class="sn">
					<img width="200" height="300" src="<?php echo $base64; ?>" class="attachment- size- wp-post-image" alt="<?php echo $_GET['video']; ?>" title="<?php echo $judul; ?>" itemprop="image" />
					<div class="sinopsis" itemprop="description"><?php echo $inf; ?><br /><div class="ads"></div></div>
				</div>
				<div class="anf">
					<?php echo $sta; ?>
				</div>
				<?php
			//$urlxx = strstr(grab($url), '<div id="episodes">');

			//$urlxxx = explode('<ul class="eps_lst">', $urlx);
				$daftar =  potong($urlx, '<ul class=eps_lst>', '</ul>');
				$daftar =  str_ireplace(' style="background: #181818 !important;"', '', $daftar);
				$daftar =  str_ireplace(''.$spath.'', '/nonton/', $daftar);

				?> 
			</div>
			<div id="sct_content" class="fl">
				<div class="stl">
					<div class="icon-list">
						<i class="fa fa-fire"></i>
					</div>
					List Episode
				</div>
				<div class="nodeinfo">
					<ul class="eps_lst">
						<?php echo $daftar; ?>
					</ul>
				</div>
			</div>

			<div class="pagination">

			</div>
		</div>
	</div>
	<!--batas content index -->
	<?php include 'sidex.php'; ?>
</div>
<?php include 'foot.php'; ?>