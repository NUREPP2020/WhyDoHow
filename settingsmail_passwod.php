<?php
$pass1 = filter_var(trim($_POST['password1']),FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['password2']),FILTER_SANITIZE_STRING);

$pass1 =md5($pass1 . "asdbjb123bkhbasjbc");
mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('localhost', 'root', 'root', 'whydohow');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}
$query = $db->query("SELECT * FROM `login_mail` WHERE `id_user`= '{$_COOKIE['userId']}' ");
$user = mysqli_fetch_assoc($query);
if($pass1 != $user['password'])
{
    header('Location: /WhyDoHow-master/settingsmail.php' );
}


$pass2 =md5($pass2 . "asdbjb123bkhbasjbc");
$query = $db->query("UPDATE `login_mail` SET `password`= '$pass2' WHERE `id_user` = '{$_COOKIE['userId']}'");
$db->close();
header('Location: /WhyDoHow-master/myprofile.php' );
