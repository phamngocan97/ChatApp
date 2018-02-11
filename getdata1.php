<?php
echo "aa";
	 $connect = mysqli_connect("192.168.0.6","unaux_21534080","","unaux_21534080_sstudent");
	mysqli.query($connect,"SET NAMES 'utf-8'");

	$query = "SELECT * FROM Infor";
	if(mysqli.query($connect,$query)){
		echo "success";
	}
	else{
		echo "fail";
	}
?>