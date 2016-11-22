<?php
$dizin = 'uploads/';

   if ( $_FILES['user_file']['name'] != '' )
   {	
     	$src = $_FILES['user_file']['name'];
     	$names = explode(".", $src);

     	$ext = array("jpeg","jpg","png");

     	if (in_array($names[1], $ext)){
	   		move_uploaded_file($_FILES['user_file']['tmp_name'], './uploads/'.$_FILES['user_file']['name']);

	   		 echo "Dosya başarıyla yüklendi.";
	         header( "Refresh:1; http://localhost/file-upload/index.php" ) ;
	    }
	    else{
	    	echo "Hatalı işlem, yalnızca .jpeg,.jpg,.png formatında dosya yükleyebilirsiniz.";
	    }
	}else{
		echo "Dosya bulunamadı.";
	}

?>
