<?php 
$user=$_GET['user'];

$shell="sudo userdel -r {$user}";
exec($shell,$arr,$status);

if($status==0){
	echo "<script>location='index.php'</script>";
}
 ?>