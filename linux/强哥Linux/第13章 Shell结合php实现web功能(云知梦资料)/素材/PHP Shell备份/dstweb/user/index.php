<?php 
$public='/public';
$bscss='/public/bs/css';
$bsjs='/public/bs/js';

$shell="ls /home";
exec($shell,$arr);

foreach($arr as $val){
	exec("cat /etc/passwd|grep {$val}|awk -F: '{print $1,$3,$4,$6,$7}'",$row);
}

foreach($row as $val2){
	$row2=explode(' ',$val2);
	$users[]=$row2;
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dstweb-用户管理</title>
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
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>查看用户:</h3>
			</div>
			<table class='table table-bordered table-hover'>
			  	<tr>
			  		<th>用户名</th>
			  		<th>UID</th>
			  		<th>GID</th>
			  		<th>家目录</th>
			  		<th>登录Shell</th>
			  		<th>重设密码</th>
			  		<th>删除用户</th>
			  	</tr>
			  	<?php 
			  	foreach($users as $user){
			  		echo "<tr>";
			  		echo "<td>{$user[0]}</td>";
			  		echo "<td>{$user[1]}</td>";
			  		echo "<td>{$user[2]}</td>";
			  		echo "<td>{$user[3]}</td>";
			  		echo "<td>{$user[4]}</td>";
			  		echo "<td><a href='edit.php?user={$user['0']}'>重设密码</a></td>";
			  		echo "<td><a href='delete.php?user={$user['0']}' onclick=\"return confirm('您确认删除用户吗?')\">删除用户</a></td>";
			  		echo "</tr>";
			  	}
			  	 ?>
			</table>
			<div class="panel-footer">
				<a href="add.php">添加用户</a>
			</div>
		</div>
	</div>		
</body>
</html>