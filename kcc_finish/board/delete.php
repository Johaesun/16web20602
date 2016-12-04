<?php
include "../htdocs/db.php";
$sql="delete from board where idx='{$_GET['idx']}'";
$sql_2="delete from bar where idx='{$_GET['idx']}'";
$pdo -> query($sql);
$pdo -> query($sql_2);

echo "<script>location.href='board.php'</script>";
?>