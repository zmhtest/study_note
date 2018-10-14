<?php 
$public='/public';
$bscss='/public/bs/css';
$bsjs='/public/bs/js';

$uptime="uptime";

$share="df -Th";

$mem="free -m";
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dstweb-系统管理</title>
	<link rel="stylesheet" href="<?php echo $bscss ?>/bootstrap.min.css">
	<script src="<?php echo $bsjs ?>/jquery.min.js"></script>
	<script src="<?php echo $bsjs ?>/bootstrap.min.js"></script>
	<style>
		.navbar-brand{
			padding:5px;
		}

		body{
			margin-top:65px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">
		      	<img src="<?php echo $public ?>/img/logo.png" height='40px'>
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="/">首页</a></li>
		        <li><a href="/user/index.php">用户管理</a></li>
		        <li><a href="/system/index.php">系统管理</a></li>
		      </ul>
		    </div>
		</nav>

		<!-- 内容 -->

		<h3 class="page-header">
			系统平均负载:
		</h3>
		<p>
<pre>
	<?php system($uptime,$s1); ?>
</pre>
		</p>

		<h3 class='page-header'>
			空间使用率:
		</h3>
		<p>
<pre>
	<?php system($share); ?>
</pre>	
		</p>

		<h3 class="page-header">
			内存使用率:
		</h3>
		<p>
<pre>
	<?php system($mem); ?>
</pre>
		</p>
	</div>		
</body>
</html>