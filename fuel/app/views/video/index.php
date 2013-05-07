<div class="video-main">
	<div class="video-container">
		<iframe src="http://player.vimeo.com/video/65287562?badge=0&amp;color=f0c800" width="960" height="460" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
	</div>
</div>
<div class="video-list">
	<a href="#" class="prev scroller_nav"></a>
	<a href="#" class="next scroller_nav"></a>

	<div class="video-scroller">

		<?php if (isset($video_items) and is_array($video_items)):?>

		<?php $x = 1; ?>

		<?php foreach( $video_items as $video_item ):?>

		<div class="video-item" data-video="<?php echo $video_item['vimeo']; ?>">
			<a href="" class="video-container" rel="<?php echo $x++;?>">
				<?php echo Asset::img($video_item['img']); ?>
				<div class="play_overlay"></div>
			</a>
			<div class="video-meta">
				<h2><a href=""><?php echo $video_item['title'];?></a></h2>
				<p><?php echo $video_item['desc'];?></p>
			</div>
		</div>

		<?php endforeach; ?>

		<?php endif; ?>

	</div>
</div>