<?php
if(isset($_GET['name']))
{
    $email = filter_var(trim($_GET['email']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_GET['name']),FILTER_SANITIZE_STRING);


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
        header('Location: /WhyDoHow-master/registration.php' );
    }
    $query = $db->query("SELECT * FROM `login_google` WHERE `mail`= '$email' ");
    $user = mysqli_fetch_assoc($query);
    if (count($user) != 0) {
        $db->close();
        header('Location: /WhyDoHow-master/registration.php' );
    }
    $query = $db->query("SELECT * FROM `login_facebook` WHERE `mail`= '$email'");
    $user = mysqli_fetch_assoc($query);
    if (count($user) != 0)
    {
        $query = $db->query("SELECT * FROM `user` WHERE `id_user`= '{$user['id_user']}}'");
        $user = mysqli_fetch_assoc($query);

        setcookie('userId', $user ['id_user'], time() + 3600*24, "/");
        setcookie('userName', $user ['name'], time() + 3600*24, "/");
        setcookie('userImage', $user ['image'], time() + 3600*24, "/");
        $db->close();

        header('Location: /WhyDoHow-master/myprofile.php');
    }
    else
    {
        $db->begin_transaction();
        $query = $db->query("INSERT INTO `user` (`name`,`image`,`description`,`privat`,`id_role`) VALUES('$name','user.png',' ','0','1')");

        $query = $db->query("SELECT * FROM `user` ORDER BY `id_user` DESC LIMIT 1");
        $user = mysqli_fetch_assoc($query);


        $use = filter_var(trim($user['id_user']),FILTER_SANITIZE_NUMBER_INT);
        $query = $db->query("INSERT INTO `login_facebook` (`id_user`,`mail`) VALUES('$use','$email')");
        $db->commit();

        setcookie('userId', $use, time() + 3600*24, "/");
        setcookie('userName', $name, time() + 3600*24, "/");
        setcookie('userImage', 'user.png', time() + 3600*24, "/");
        $db->close();

        header('Location: /WhyDoHow-master/myprofile.php');
    }
}
else{
    header('Location: /WhyDoHow-master/registration.php');
}