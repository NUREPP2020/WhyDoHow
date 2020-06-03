<?php
$id = $_GET['id'];

if($_GET['id'] == $_COOKIE['userId'])
{
    header('Location: /myprofile.php');
}
else
{
    header('Location: /otherprofile.php?id='.$id );
}
