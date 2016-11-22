<?php

$dizin = 'uploads/';

   if ( $_FILES['user_file']['name'] != '' )
   {
     	$src = $_FILES['user_file']['name'];
   		move_uploaded_file($_FILES['user_file']['tmp_name'], './uploads/'.$_FILES['user_file']['name']);

   		 echo "Dosya başarıyla yüklendi.";
         header( "Refresh:1; http://localhost/file-upload/index.php" ) ;
	}else{
		echo "Dosya bulunamadı.";
	}

?>
