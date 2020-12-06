<?php
require('config.php');

$id = $_POST['MEMBER_ID'];
$password = $_POST['MEMBER_PASSWD'];
$refer = $_POST['refer'];

if ($id == '' || $password == '')
{
    header('Location: login.php?refer='. urlencode($_POST['refer']));
}
else
{
    $con = mysql_connect($hostname, $username, $password);
    mysql_select_db($dbname, $con);
    
    $query = "SELECT * FROM MEMBER WHERE MEMBER_ID = '$id' AND MEMBER_PASSWD = password('$password')";
    
    $result = mysql_query($query, $con)
    or die ('Error in query');
    //以下未改
    if (mysql_num_rows($result))
    {
        $row = mysql_fetch_row($result);
        
        $query = "UPDATE susers SET guid = '$row[1]' WHERE userid = $row[0]";
        
        mysql_query($query, $con)
        or die('Error in query');
        
        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);
        
        if (empty($refer) || !$refer)
        {
            $refer = 'index.php';
        }
        
        header('Location: '. $refer);
    }
    else
    {
        // Not authenticated
        header('Location: login.php?refer='. urlencode($refer));
    }
}