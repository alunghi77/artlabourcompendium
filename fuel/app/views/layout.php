<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Art Labour Compendium</title>

	<?php echo Asset::css(array(
		'//code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css',
		'bootstrap.css',
		'bgstretcher.css',
		'style.css',
		)
	); ?>

	<?php echo Asset::js(array(
		'//code.jquery.com/jquery-1.9.1.min.js',
		'//code.jquery.com/ui/1.10.0/jquery-ui.js',
		'bgstretcher.js',
		'site.js')
	); ?>

</head>
<body >
	<div class="container">
		<?php echo $content; ?>
	</div>
</body>
</html>