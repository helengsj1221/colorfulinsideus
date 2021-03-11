<?php
include("public/config.php");
$memberid = $_POST['memberid'];
$password = $_POST['password'];
$name = $_POST['name'];
$addr = $_POST['addr'];

require_once "public/config.php";
$query = "INSERT INTO MEMBER(MEMBER_SEQNO,MEMBER_ID,MEMBER_PASSWD,MEMBER_NAME,MEMBER_ADDR)VALUES('MEMBER".$memberid."','".$memberid."','".$password."','".$name."','".$addr."')";
$result = mysqli_query($con,$query);

header("location:login.php?sig_suc=註冊成功");

?>