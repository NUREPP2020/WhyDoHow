<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Мой профиль</title>
    <script>//Universal resize event
        function universalResize() {
            if (typeof (Event) === 'function') { // modern browsers
                window.dispatchEvent(new Event('resize'));
            } else {

                var evt = window.document.createEvent('UIEvents');
                evt.initUIEvent('resize', true, false, window, 0);
                window.dispatchEvent(evt);
            }
        };</script>

</head>
<body>
<?php
require('header.php');
$userId = $_GET['id'];

mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e) {
    echo "Error:" . $e->getMessage();
}
$query = $db->query("SELECT COUNT(*) AS `lol` FROM `subscribes` WHERE `id_user_lead`= '$userId'");
$leadquery = mysqli_fetch_assoc($query);
$lead = $leadquery['lol'];
$query = $db->query("SELECT COUNT(*) AS `lol` FROM `subscribes` WHERE `id_user_follow`= '$userId'");
$followquery = mysqli_fetch_assoc($query);
$follow = $followquery['lol'];
$query = $db->query("SELECT COUNT(*) AS CounPost FROM `post` WHERE `id_user` = '$userId'");
$countquery = mysqli_fetch_assoc($query);
$countpost = $countquery['CounPost'];
$query = $db->query("SELECT * FROM `user` WHERE `id_user`= '$userId'");
$user = mysqli_fetch_assoc($query);
$description = filter_var(trim($user['description']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($user['name']), FILTER_SANITIZE_STRING);
$Image = filter_var(trim($user['image']), FILTER_SANITIZE_STRING);
$role = filter_var(trim($user['id_role']), FILTER_SANITIZE_NUMBER_INT);

$likeq = 'none';
$query = $db->query("SELECT * FROM `subscribes` WHERE `id_user_follow` = '$userId' AND `id_user_lead` = '{$_COOKIE['userId']}'");
$l  = mysqli_fetch_assoc($query);
if(count($l) == 0)
{
    $likeq = 'black';
}
else
{
    $likeq = 'red';
}

?>
<main class="main-block">
    <div class="centerDivs profile-header">
        <div class="row" style="border-color: #363533">
            <div class="col-3">
                <div class="col"><img src="img/<?=$Image?>" alt="ава" class="rounded-circle profile-image-avatar">
                </div>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col"><span class="profile-span-name"><?=$name?></span></div>
                    <div class="col" style="float: left">
                        <form action="subscrib_submit.php" method="post">
                            <input name="me" type="hidden" value="<?=$_COOKIE['userId']?>">
                            <input name="user" type="hidden" value="<?=$userId?>">
                            <?php
                            if(isset($_COOKIE['userId']))
                            {
                                echo '<button class="btn  btn-my-dark-color btn-my-dark-size profile-button-settings" type="submit">';

                                if($likeq == 'black')
                                {
                                    echo 'Подписаться';
                                }
                                else
                                {
                                    echo 'Отписаться';
                                }

                                echo '</button>';
                            }
                        ?>
                        </form>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <!-- Button trigger modal -->
                    <div class="col" data-toggle="modal" data-target="#modalSubscribers"
                    "><span class="profile-span-stats"><b><?=$lead?></b> подписчики</span></div>
                <!-- Modal -->
                <div class="modal fade" id="modalSubscribers" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content orange-background">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLongTitle">Подписчики</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php
                                $query1 = $db->query("SELECT * FROM `subscribes` WHERE `id_user_lead`= '$userId'");
                                while($user = mysqli_fetch_assoc($query1))
                                {
                                    $query2 = $db->query("SELECT * FROM `user` WHERE `id_user`= '{$user['id_user_follow']}'");
                                    $use = mysqli_fetch_assoc($query2);
                                    echo"
                                    <a href=\"otherprofile.php?id={$use['id_user']}\">
                                    <div class=\"row\"
                                         style=\"margin: 2px;\">
                                        <div class=\"col-2\">
                                            <img src=\"img/{$use['image']}\" alt=\"\" style=\"width: 60px\"
                                                 class=\"rounded-circle\">
                                        </div>
                                        <div class=\"col subscriptions-img\">
                                            <span class=\"subscriptions-text\">  {$use['name']}</span>
                                        </div>
                                    </div>
                                </a>
                                    ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <div class="col" data-toggle="modal" data-target="#modalSubscriptions"
                "><span class="profile-span-stats"><b><?=$follow?></b> подписки</span></div>
            <!-- Modal -->
            <div class="modal fade" id="modalSubscriptions" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content orange-background">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLongTitle">Подписки</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php
                            $query1 = $db->query("SELECT * FROM `subscribes` WHERE `id_user_follow`= '$userId'");
                            while($user = mysqli_fetch_assoc($query1))
                            {
                                $query2 = $db->query("SELECT * FROM `user` WHERE `id_user`= '{$user['id_user_lead']}'");
                                $use = mysqli_fetch_assoc($query2);
                                echo"
                                    <a href=\"otherprofile.php?id={$use['id_user']}\">
                                    <div class=\"row\"
                                         style=\"margin: 2px;\">
                                        <div class=\"col-2\">
                                            <img src=\"img/{$use['image']}\" alt=\"\" style=\"width: 60px\"
                                                 class=\"rounded-circle\">
                                        </div>
                                        <div class=\"col subscriptions-img\">
                                            <span class=\"subscriptions-text\">  {$use['name']}</span>
                                        </div>
                                    </div>
                                </a>
                                    ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <span class="profile-span-stats"><b><?=$countpost?></b> публикации</span>
            </div>
        </div>
        <div class="row line profile-description">
            <?php
            echo $description;
            ?>
        </div>
    </div>
    </div>
    </div>
    <hr>
    <?php
    if ($role == 2) {
        echo "
        <!--забаненый профиль-->
    <div class=\"centerDivs\">
    <span class=\"banprofile-span\"><img src=\"img/ban.png\" alt=\"\" class=\"banprofile-image\"><b> ЭТОТ ПРОФИЛЬ БЫЛ ЗАБЛОКИРОВАН</b></span>
    </div>
        ";
    } else {
        echo "
        <!--мелкие постыы-->
<div class=\"centerDivs\">";
        $link = mysqli_connect('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `post` WHERE `id_user`= '$userId'";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_array($result)) {
                    $sql1 = "SELECT COUNT(*) AS CountCom FROM `comment` WHERE `id_post`= '{$rows['id_post']}'";
                    $result1 = mysqli_query($link, $sql1);
                    $r = mysqli_fetch_array($result1);
                    echo '<a  href="viewpost.php?id=' . $rows['id_post'] . '">';

                    echo '<div class="item post">';
                    echo '<div class="h-100 d-inline-block img-wrap post-for-image">';
                    echo '  <img src="data:image/jpeg;base64,' . base64_encode($rows['preview']) . '" alt="категория" class="post-image">';
                    echo '  <p class="post-image-category" style="background-color: rgba(0, 0, 0, 0.27); color:white;    border-radius: 17px;width: 60%;left: 37%;">';
                    echo $rows['id_category'];
                    echo '</p>';
                    echo '</div>';
                    echo '<div class="col">';
                    echo '<div class="row post-date">';
                    echo $rows['date'];
                    echo '</div>';
                    echo '<div class="post-header" style="font-size:19px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 1; -webkit-box-orient: vertical;">';
                    echo '<b>';
                    echo $rows['header'];
                    echo '</b>';
                    echo '</div>';
                    echo '<div class="row" style="padding: 10px">';
                    echo '<p class="post-text">';
                    echo strip_tags($rows['text']);
                    echo '</p>';
                    echo '</div>';
                    echo '  <div class="row post-statistics">';
                    echo '<div class="col post-statistics-like">';
                    echo '<div class="row " style="padding: 0">';
                    echo '<img src="img/heart.png" alt="" class="post-statistics-image">';
                    echo '</div>';
                    echo '<div class="row post-statistics-values">';
                    echo    $rows['like_count'];
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col post-statistics-comment">';
                    echo '<div class="row" style="padding: 0">';
                    echo '<img src="img/comment.png" alt="" class="post-statistics-image">';
                    echo '</div>';
                    echo '<div class="row post-statistics-values">';
                    echo    $r['CountCom'];
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col post-statistics-views">';
                    echo '<div class="row" style="padding: 0">';
                    echo '<img src="img/eye.png" alt="" class="post-statistics-image">';
                    echo '</div>';
                    echo '<div class="row post-statistics-values"> ';
                    echo $rows['view_count'];
                    echo ' </div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    echo '</a>';
                }
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($link);
    }
    ?>


</main>
<?php
require('footer.php');
$db->close();
?>
</body>
</html>

