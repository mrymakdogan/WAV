<?php
   
$page = $_GET['page'];
if ($page=="") {
	include("index.php");
} else { 
	include ($page . '.php'); 
}

?>
