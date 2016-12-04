<?php
include "../htdocs/db.php";
require_once "../htdocs/h.php";

$today = date("y.m.d");
$insert = "insert into board set 
title='{$_POST["title"]}',
notice='{$_POST["notice"]}',
date='{$today}'";
$result=$pdo->query($insert);

$_dir = '../f_up';
$file=$_FILES['upload']['name'];
if(!$file){
$img_insert="insert into bar set
upload='1'";
$pdo->query($img_insert);
	}
else {
$file_dir=$_SERVER ['DOCUMENT_ROOT']."\\f_up\\";
$file_path=$file_dir.md5(microtime()).$file;

if($_FILES["upload"]["size"]<5000000){
move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
}else{
    echo "<script>alert('파일 용량이 너무 큽니다.')</script>";
}
;
$img_insert="insert into bar set
upload='{$file_path}'";
$pdo->query($img_insert);
}
echo "<script>location.href='board.php'</script>";
?>
