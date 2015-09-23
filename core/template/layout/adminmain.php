<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo CShop::app()->systemOption()->sitetitle . ' - ' . $this->pageTitle?></title>
<link rel="stylesheet" href="<?php echo Cshop::$baseurl?>/static/css/admin.css">
<link href="<?php echo Cshop::$baseurl?>/static/css/perfect-scrollbar.css" rel="stylesheet">

<script type="text/javascript" src="<?php echo Cshop::$baseurl?>/static/js/script.js"></script>
</head>
<body>
<div id="header">
	<div class="inner-header">
		<div class="toplogo" onclick="window.location = '<?php echo CShop::$baseurl?>';" style="cursor:pointer;">
		</div>
		<div id ="topmenu">
			<div class="menu">
				<div class="menu-main-container">
					<ul id="menu-main" class="menu">
						<li class="menu-item "><a href="<?php echo CShop::$baseurl?>" class="active"><?php echo CShop::app()->systemOption()->sitetitle?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> 
</div>
<div id="content">
	<?php echo $content?>
</div>
<div id="footer"><a href="http://irprog.com" target="_blank">Cshop</a></div>
</body>
</html>
