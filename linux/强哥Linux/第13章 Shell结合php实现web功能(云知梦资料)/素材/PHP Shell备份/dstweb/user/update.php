<?php 
$user=$_POST['user'];
$pass=$_POST['pass'];

$passwd="echo {$pass} |sudo passwd --stdin {$user}";
exec($passwd,$arr,$s2);

if($s2==0){
	echo "<script>location='index.php'</script>";
}

 ?>