	<div class="col-md-4">
		<div class="bl">
			<div class="blc">
				
				<div class="stl"><div class="icon-list"><i class="fa fa-fire"></i></div> <h2 class="h2-category">Fanspage</h2></div>
				
				    <?php include 'ads/fp.php'; ?>
				    <?php include 'ads/250.php'; ?>
			</div>
			<div class="blc">
				<div class="stl"><div class="icon-list"><i class="fa fa-fire"></i></div> <h2 class="h2-category">Popular Ongoing Update</h2></div>
				<ul class='nth'>
					<?php
					$ong = strstr(grab($url), '<div class=ong>');
					$ong1 = potong($ong, '<ul class=og_up>', '</ul>');
					$urlon = explode('<li>', $ong1);
					$count = count($urlon);
					$count = $count-1;
					for($i=1; $i<=$count; $i++) {
						$title = potong($urlon[$i], '<h2>', '</h2>');
						$id2 = potong($urlon[$i], 'href=', ' ');
						$id2 =  str_ireplace(''.$spath.'', '', $id2);
						$cover = potong($urlon[$i], 'src=', ' ');
						$path=$cover;
						$type1 = pathinfo($path, PATHINFO_EXTENSION);
						$data = file_get_contents($path);
						$base64 = 'data:image/' . $type1 . ';base64,' . base64_encode($data);
						?>
						<li>
							<div class="img">
								<img width="200" height="300" src="<?php echo $base64; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?php echo $title; ?>" />
							</div>
							<div class="nf">
								<a class="lnk" href="<?php echo $id2; ?>" title="<?php echo $title; ?>" target="_blank"><?php echo $title; ?></a>
							</div>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
			
			<?php include 'ads/contact.php'; ?>
			
		</div>
	</div>
</div>
</div>