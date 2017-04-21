<?php
include('silveruploadtask.php');

$target_dir = "mainfile_uploads/";
$target_dir2 = "previewfile_uploads/";
$target_file = $target_dir . $lastid;
$target_file2 = $target_dir2 . $lastid;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    
//    <!-----Mainfile checks----->
	
	
	$check = getimagesize($_FILES["mainfile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["mainfile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "rtf" && $imageFileType != "txt" ) {
    echo "Sorry, only DOC, DOCX, RTF & TXT files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["mainfile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["mainfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//    <!-----previewfile checks----->
	
	$check = getimagesize($_FILES["previewfile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }



// Check if file already exists
if (file_exists($target_file2)) {
    echo "Sorry, preview file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["previewfile"]["size"] > 5000000) {
    echo "Sorry, your preview file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "rtf"
&& $imageFileType != "txt" ) {
    echo "Sorry, only DOC, DOCX, RTF & TXT files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your preview file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["previewfile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["previewfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your preview file.";
    }
}
?>
