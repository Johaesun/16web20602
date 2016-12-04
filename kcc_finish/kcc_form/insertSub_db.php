<?php
include '../htdocs/db.php';

$phonNum_1= $_POST['phonNum_1'].$_POST['phonNum_2'].$_POST['phonNum_3'];
$phon_check = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3",$phonNum_1);
$name_Ko=$_POST['name_Ko'];
$insert= "insert into kcc_form set 
name_Ko='{$name_Ko}',
name_En='{$_POST["name_En"]}',
birth_Year='{$_POST["birth_Year"]}',
birth_Month='{$_POST["birth_Month"]}',
birth_Day='{$_POST["birth_Day"]}',
id='{$_POST["id"]}',pw='{$_POST["pw"]}',
pw_Re='{$_POST["pw_Re"]}',
number_1='{$_POST["number_1"]}',
number_2='{$_POST["number_2"]}',
number_3='{$_POST["number_3"]}',
phonNum_1='{$phon_check}',
answer='{$_POST["answer"]}',
email='{$_POST["email"]}',
home_post='{$_POST["home_post"]}',
home_address1='{$_POST["home_address1"]}',
stay='{$_POST["stay"]}',
work_name='{$_POST["work_name"]}',
work_kinds='{$_POST["work_kinds"]}',
work_spot='{$_POST["work_spot"]}',
work_post1='{$_POST["work_post1"]}',
work_address1='{$_POST["work_address1"]}',
work_address2='{$_POST["work_address2"]}',
work_number1='{$_POST["work_number1"]}',
work_number2='{$_POST["work_number2"]}',
work_number3='{$_POST["work_number3"]}',
fax_number1='{$_POST["fax_number1"]}',
fax_number2='{$_POST["fax_number2"]}',
fax_number3='{$_POST["fax_number3"]}',
wed='{$_POST["wed"]}',
wed_year='{$_POST["wed_year"]}',
wed_month='{$_POST["wed_month"]}',
wed_day='{$_POST["wed_day"]}'";

$pdo -> query($insert);
echo "<script>location.href='../index.php';</script>";
?>