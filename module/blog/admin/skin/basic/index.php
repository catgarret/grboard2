<?php if(!defined('GR_BOARD_2')) exit(); ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>GR Board 2 - Blog - Control Center</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="/<?php echo $grboard; ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
		<link href="/<?php echo $grboard; ?>/lib/bootstrap_material_design/css/material.min.css" rel="stylesheet" media="screen" />
		<link href="/<?php echo $grboard; ?>/lib/bootstrap_material_design/css/ripples.min.css" rel="stylesheet" media="screen" />
		<link href="/<?php echo $grboard; ?>/lib/bootstrap_material_design/css/roboto.min.css" rel="stylesheet" media="screen" />
		<link href="/<?php echo $skinResourcePath; ?>/style.css" rel="stylesheet" media="screen" />
		<script src="/<?php echo $grboard; ?>/lib/jquery.js"></script>
		<script src="/<?php echo $grboard; ?>/lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="/<?php echo $grboard; ?>/lib/bootstrap_material_design/js/material.min.js"></script>
		<script src="/<?php echo $grboard; ?>/lib/bootstrap_material_design/js/ripples.min.js"></script>
		<script> $(function(){ $.material.init(); });</script>
		<script src="/<?php echo $skinResourcePath; ?>/<?php echo $manage; ?>.js"></script>
	</head>
	<body>
		
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo $_SERVER['HTTP_HOST']; ?></a>
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="/<?php echo $grboard; ?>/blog" title="<?php echo $lang['home_info']; ?>">
						<span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li class="<?php echo (($manage=='config')?'active':''); ?>"><a href="/<?php echo $grboard; ?>/blog/admin/manage/config" title="<?php echo $lang['config_info']; ?>">
						<span class="glyphicon glyphicon-cog"></span> Configuration</a></li>
					<li class="<?php echo (($manage=='category')?'active':''); ?>"><a href="/<?php echo $grboard; ?>/blog/admin/manage/category" title="<?php echo $lang['category_info']; ?>">
						<span class="glyphicon glyphicon-th-list"></span> Category</a></li>
					<li class="<?php echo (($manage=='link')?'active':''); ?>"><a href="/<?php echo $grboard; ?>/blog/admin/manage/link" title="<?php echo $lang['link_info']; ?>">
						<span class="glyphicon glyphicon-link"></span> Link</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://grboard.com" title="Build the GR Board 2 better, together."> 
						<span class="glyphicon glyphicon-link"></span> GR Board <sup>2</sup></a></li>
				</ul>
			</div>
		</div>
	</nav>			
	
	<div class="container">
		<?php include $manage.'.php'; ?>
	</div>

	</body>
</html>