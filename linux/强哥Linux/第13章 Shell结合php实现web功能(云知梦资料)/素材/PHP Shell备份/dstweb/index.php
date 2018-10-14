<?php 
$public='/public';
$bscss='/public/bs/css';
$bsjs='/public/bs/js';
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dstweb-首页</title>
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
		        <li class="active"><a href="/index.php">首页</a></li>
		        <li><a href="user/index.php">用户管理</a></li>
		        <li><a href="system/index.php">系统管理</a></li>
		      </ul>
		    </div>
		</nav>

		<!-- 内容 -->
		<div class="jumbotron">
		  <h3>PHP+Shell操作系统</h3>
		  <p>
		  	<img src="<?php echo $public ?>/img/linux.jpg" alt="">
		  </p>

		  <a href="reset.php" class='btn btn-warning btn-lg' onclick="return confirm('您确认重启系统吗?')">重启系统</a>
		  <a href="shut.php" class='btn btn-danger btn-lg' onclick="return confirm('您确认关闭系统吗?')">关闭系统</a>
		</div>
	</div>		
</body>
</html>