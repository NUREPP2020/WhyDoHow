<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password1']),FILTER_SANITIZE_STRING);


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
    header('WhyDoHow-master/registration.php' );
}
$query = $db->query("SELECT * FROM `login_google` WHERE `mail`= '$email' ");
$user = mysqli_fetch_assoc($query);
if (count($user) != 0) {
    $db->close();
    header('WhyDoHow-master/registration.php' );
}

$query = $db->query("SELECT * FROM `login_facebook` WHERE `mail`= '$email' ");
$user = mysqli_fetch_assoc($query);
if (count($user) != 0) {
    $db->close();
    header('WhyDoHow-master/registration.php' );
}



$query = $db->query("INSERT INTO `user` (`name`,`image`,`description`,`privat`,`id_role`) VALUES('$name','user.png',' ','0','1')");

$query = $db->query("SELECT * FROM `user` ORDER BY `id_user` DESC LIMIT 1");
$user = mysqli_fetch_assoc($query);


$use = filter_var(trim($user['id_user']),FILTER_SANITIZE_NUMBER_INT);
$password = md5($password . "asdbjb123bkhbasjbc");
$query = $db->query("INSERT INTO `login_mail` (`id_user`,`mail`,`password`) VALUES('$use','$email','$password')");


setcookie('userId', $use, time() + 3600*24, "/");
setcookie('userName', $name, time() + 3600*24, "/");
setcookie('userImage', 'user.png', time() + 3600*24, "/");
$db->close();

//сделать переход в кабинет
header('Location: /WhyDoHow-master/myprofile.php');
