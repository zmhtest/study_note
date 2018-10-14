<?php 
$user=$_POST['user'];
$pass=$_POST['pass'];

$shell="sudo useradd {$user}";
exec($shell,$arr,$s1);

$passwd="echo {$pass} |sudo passwd --stdin {$user}";
exec($passwd,$arr,$s2);

if($s1==0 && $s2==0){
	echo "<script>location='index.php'</script>";
}

 ?>