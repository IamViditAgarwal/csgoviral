<?php
$error_img = array();
if ($_FILES['upload_image']['error'] > 0) {
    switch ($_FILES['upload_image']['error']){
        case 1:
            $error_img[] = 'File size exceeds the limit UPLOAD_MAX_FILE_SIZE';
            break;
        case 2:
            $error_img[] = 'File size exceeds the limit MAX_FILE_SIZE';
            break;
        case 3:
            $error_img[] = 'Failed to load part of a file';
            break;
        case 4:
            $error_img[] = 'The file was not loaded';
            break;
        case 6:
            $error_img[] = 'No temporary folder';
            break;
        case 7:
            $error_img[] = 'Could not write the file to disk';
            break;
        case 8:
            $error_img[] = 'PHP-extension stopped the file upload';
            break;
    }
} else {
    if ($_FILES['upload_image']['type'] == 'image/jpeg' || $_FILES['upload_image']['type'] == 'image/jpg' || $_FILES['upload_image']['type'] == 'image/png' ) {
        $imgtext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['upload_image']['name']));
        $uploaddir = './images/';
        $newfilename = $_POST['form_name'].'-'.$id.rand(10,100).'.'.$imgtext;
        $uploadfile = $uploaddir.$newfilename;

        if (move_uploaded_file($_FILES['upload_image']['tmp_name'], $uploadfile)) {
            $result = mysql_query("UPDATE cases SET picture='$newfilename' WHERE id='$id'",$bd);
        } else {
            $error_img[] = "Error loading file";
        }
    } else {
        $error_img[] = "Allowed extensions: jpeg, jpg, png";
    }
}
?>