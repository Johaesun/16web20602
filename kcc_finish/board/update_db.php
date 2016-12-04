<?php
include "../htdocs/db.php";
$update="update board set 
title='{$_POST["title"]}',
notice='{$_POST["notice"]}' 
where idx='{$_GET['idx']}'";
$pdo->query($update);
echo "<script>location.href='board.php'</script>";
?>