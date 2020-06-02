<?php
mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}

$query = $db->query("SELECT * FROM `login_mail` WHERE `id_user`= '{$_COOKIE['userId']}'");
$users= mysqli_fetch_assoc($query);
if (count($users) != 0) {
    $db->close();
    header('Location: /settingsmail.php' );
} else {
    $db->close();
    header('Location: /settingsapi.php' );
}
