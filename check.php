<?php 
$connect = mysqli_connect("localhost", "root", "", "commganga");
if(isset($_POST["user_name"])){
	$sql = "SELECT * FROM user WHERE username = '".$_POST["user_name"]."'";
	$result = mysqli_query($connect, $sql);
	if(mysqli_num_rows($result) > 0){
		echo '<span> Username not avaible</span>';
	}else {
		echo '<span> Username avaible</span>';
	}
}
?>