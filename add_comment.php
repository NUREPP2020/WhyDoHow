<?php
$user = filter_var(trim($_POST['user']),FILTER_SANITIZE_STRING);
$post = filter_var(trim($_POST['post']),FILTER_SANITIZE_STRING);
$text = filter_var(trim($_POST['text']),FILTER_SANITIZE_STRING);

mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}
$today = date("Y-m-d H:i:s");
$query = $db->query("INSERT INTO `comment`(`id_post`, `id_user`, `date`, `text`) VALUES ('$post','$user','$today','$text')");
$db->close();
header('Location: /viewpost.php?id='.$post );