<?php
include("public/config.php");

if (!isset($_COOKIE['MEMBER_SEQNO']))
{
    header('Location: login.php?refer='. urlencode(getenv('REQUEST_URI')));
}
$guid = $_COOKIE['MEMBER_SEQNO'];

$query = "SELECT * FROM `MEMBER` WHERE `MEMBER_SEQNO` = '".$guid."'";
$result = mysqli_query($con,$query);

if (!mysqli_num_rows($result))
{
    header('Location: login.php?refer='. urlencode(getenv('REQUEST_URI')));
}
?>