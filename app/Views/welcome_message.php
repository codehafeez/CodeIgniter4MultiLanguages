<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CodeIgniter 4 Multi Language Website</title>
</head>
<body style="padding:40px;">

	<h1><?php echo lang('app.msg'); ?></h1>
	<h1><?php echo lang('app.welcome'); ?></h1>
	<h1><?php echo lang('app.chooseLang'); ?></h1>

	<br/><br/>
	<a href="<?=base_url('/en')?>">Click to Change Language en</a>
	<br/><br/>
	<a href="<?=base_url('/fr')?>">Click to Change Language fr</a>
	<br/><br/>
	<a href="<?=base_url('/ur')?>">Click to Change Language ur</a>

</body>
</html>
