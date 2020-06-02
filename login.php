<?php
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password1']),FILTER_SANITIZE_STRING);

mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}
$query = $db->query("SELECT * FROM `login_mail` WHERE `mail`= '$email' ");
$user = mysqli_fetch_assoc($query);
if (count($user) == 0) {
    $db->close();
    header('Location: /index.php');
}
//$password = md5($password . "asdbjb123bkhbasjbc");
if($user['password'] != $password)
{
    $db->close();
    header('Location: /index.php');
}
else{
    $query = $db->query("SELECT * FROM `user` WHERE `id_user`= '{$user['id_user']}' ");
    $users = mysqli_fetch_assoc($query);
    setcookie('userId', $user['id_user'], time() + 3600*24, "/");
    setcookie('userName', $users['name'], time() + 3600*24, "/");
    setcookie('userImage', $users['image'], time() + 3600*24, "/");
    $db->close();

//сделать переход в кабинет
    header('Location: /myprofile.php');
}
