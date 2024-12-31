<?php


$folder_name = $_POST['folder_name'].'/';
$page_name = $_POST['page_name'];
$html_string = $_POST['html_string'];

if(!is_dir($directoryName)){
    mkdir($folder_name, 0755, true);
}

$myFile = $folder_name.$page_name.".php";
$fh = fopen($myFile, 'w');
fwrite($fh, $html_string);
fclose($fh);