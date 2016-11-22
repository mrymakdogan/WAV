<?php
	include("../connect.php");

	$xname = $_GET["name"];
	$xemail = $_GET["email"];
	$xcomment = $_GET["comment"];

	$name = htmlspecialchars($xname);
	$email = htmlspecialchars($xemail);
	$comment = htmlspecialchars($xcomment);

	$sql = mysql_query("insert into xss (name,email,comment) value ('$name', '$email', '$comment')");


	if($sql){
		echo "Yorum gönderildi";
        header( "Refresh:1; http://localhost/xss/index.php" ) ;
	}
	else{
		echo "Eklenemedi";
	}

?>

