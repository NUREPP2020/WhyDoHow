<?php
$user = filter_var(trim($_POST['user']),FILTER_SANITIZE_STRING);
$post = filter_var(trim($_POST['post']),FILTER_SANITIZE_STRING);

mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}

$query = $db->query("SELECT * FROM `liked` WHERE `id_post` = '$post' AND `id_user` = '$user'");
$count = mysqli_fetch_assoc($query);
if($count == 0)
{
    $query = $db->query("INSERT INTO `liked`(`id_user`, `id_post`) VALUES ($user,$post)");
    $query = $db->query("UPDATE `post` SET `like_count` = `like_count` + 1 WHERE `id_post` = '$post'");
    $db->close();
    header('Location: /viewpost.php?id='.$post );
}
else{
    $query = $db->query("DELETE FROM `liked` WHERE `id_post` = '$post' AND `id_user` = '$user'");
    $query = $db->query("UPDATE `post` SET `like_count` = `like_count` - 1 WHERE `id_post` = '$post'");
    $db->close();
    header('Location: /viewpost.php?id='.$post );
}
