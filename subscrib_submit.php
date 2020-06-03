<?php
$user = filter_var(trim($_POST['user']),FILTER_SANITIZE_STRING);
$me = filter_var(trim($_POST['me']),FILTER_SANITIZE_STRING);

mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}

$query = $db->query("SELECT * FROM `subscribes` WHERE `id_user_lead` = '$me' AND `id_user_follow` = '$user'");
$count = mysqli_fetch_assoc($query);
if($count == 0)
{
    $query = $db->query("INSERT INTO `subscribes`(`id_user_lead`, `id_user_follow`) VALUES ($me,$user)");
    $db->close();
    header('Location: /otherprofile.php?id='.$user );
}
else{
    $query = $db->query("DELETE FROM `subscribes` WHERE `id_user_lead` = '$me' AND `id_user_follow` = '$user'");
    $db->close();
    header('Location: /otherprofile.php?id='.$user );
}
