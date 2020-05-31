<?php
mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('localhost', 'root', 'root', 'whydohow');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}

$query = $db->query("SELECT * FROM `login_mail` WHERE `id_user`= '{$_COOKIE['userId']}'");
$users= mysqli_fetch_assoc($query);
if (count($users) != 0) {
    $db->close();
    header('Location: /WhyDoHow-master/settingsmail.php' );
} else {
    $db->close();
    header('Location: /WhyDoHow-master/settingsapi.php' );
}
