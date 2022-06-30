<?php
session_start();
    $success = 0;
    $uploadedFile = '';
    
    //File upload path
    $uploadPath = 'mess/';
	$filename = $_FILES["myfile"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$newfilename = md5($file_basename) . $file_ext;
	
    $targetPath =  $uploadPath . basename($newfilename);
	$disp_path = basename($newfilename);
    if(@move_uploaded_file($_FILES['myfile']['tmp_name'],$targetPath)){
		$_SESSION['file-url']=$disp_path;
		session_write_close();
        $success = 1;
        $uploadedFile = $targetPath;
    }
    
    sleep(1);
?>
<script type="text/javascript">window.top.window.stopUpload(<?php echo $success; ?>,'<?php echo $uploadedFile; ?>');</script>