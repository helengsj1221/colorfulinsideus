<?php
include("public/config.php");

$id = $_POST['MEMBER_ID'];
$password = $_POST['MEMBER_PASSWD'];
$refer = $_POST['refer'];

if ($id == '' || $password == '')
    header('Location: login.php?refer='. urlencode($_POST['refer']));
else
{
    $query = "SELECT * FROM `MEMBER` WHERE `MEMBER_ID` = '".$id."' AND `MEMBER_PASSWD` = '".$password."'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result))
    {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $cookieexpiry = (time() + 21600);
        setcookie("MEMBER_SEQNO", $row['MEMBER_SEQNO'], $cookieexpiry);
        
        if (empty($refer) || !$refer)
        {
            $refer = 'shop.php';
        }
        
        header('Location: '. $refer);
    }
    else
    {
        header('Location: login.php?refer='. urlencode($refer));
    }
}
?>