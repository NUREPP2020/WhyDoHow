<?php
$name = filter_var(trim($_GET['name']),FILTER_SANITIZE_STRING);
$description = filter_var(trim($_GET['description']),FILTER_SANITIZE_STRING);
$privat = filter_var(trim($_GET['privat']),FILTER_SANITIZE_NUMBER_INT);
$email = filter_var(trim($_GET['email']),FILTER_SANITIZE_STRING);


if(strlen($_GET['image']) < 2)
{
    $image = $_COOKIE['userImage'];
} else{
    $image = $_GET['image'];
}

mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('localhost', 'root', 'root', 'whydohow');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}

$query = $db->query("SELECT * FROM `login_mail` WHERE `mail`= '$email' ");
$user = mysqli_fetch_assoc($query);
if (count($user) != 0) {
    $db->close();
    header('Location: /WhyDoHow-master/settingsmail.php' );
}
$query = $db->query("SELECT * FROM `login_google` WHERE `mail`= '$email' ");
$user = mysqli_fetch_assoc($query);
if (count($user) != 0) {
    $db->close();
    header('Location: /WhyDoHow-master/settingsmail.php' );
}

$query = $db->query("SELECT * FROM `login_facebook` WHERE `mail`= '$email' ");
$user = mysqli_fetch_assoc($query);
if (count($user) != 0) {
    $db->close();
    header('Location: /WhyDoHow-master/settingsmail.php' );
}


$query = $db->query("UPDATE `user` SET `name`= '$name',`image`= '$image',`description`= '$description',`privat`= '$privat' WHERE `id_user` = '{$_COOKIE['userId']}'");
$query = $db->query("UPDATE `login_mail` SET `mail`= '$email' WHERE `id_user` = '{$_COOKIE['userId']}' ");
$id = $_COOKIE['userId'];
setcookie('userId', $id, time() + 3600*24, "/");
setcookie('userName', $name, time() + 3600*24, "/");
setcookie('userImage', $image, time() + 3600*24, "/");


$db->close();
header('Location: /WhyDoHow-master/myprofile.php' );
