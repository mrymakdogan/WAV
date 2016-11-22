<?php
	include("../connect.php");

	$name = $_GET["name"];
	$email = $_GET["email"];
	$comment = $_GET["comment"];

	$sql = mysql_query("insert into xss (name,email,comment) value ('$name', '$email', '$comment')");

	if($sql){
		echo "Yorum gönderildi";
        header( "Refresh:1; http://localhost/xss/index.php" ) ;
	}
	else{
		echo "Eklenemedi";
	}

?>
