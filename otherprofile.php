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
try{
    $db = new mysqli('localhost', 'root', 'root', 'whydohow');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}
$query = $db->query("SELECT * FROM `subscribes` WHERE `id_user_lead`= '$userId' GROUP BY `id_user_lead`,`id_user_follow`");
$leadquery = mysqli_fetch_assoc($query);
$lead = count($leadquery);
$query = $db->query("SELECT * FROM `subscribes` WHERE `id_user_follow`= '$userId' GROUP BY `id_user_lead`,`id_user_follow`");
$followquery = mysqli_fetch_assoc($query);
$follow = count($followquery);
$query = $db->query("SELECT * FROM `post` WHERE `id_user`= '$userId'");
$countquery = mysqli_fetch_assoc($query);
$countpost = count($countquery);
$query = $db->query("SELECT * FROM `user` WHERE `id_user`= '$userId'");
$user= mysqli_fetch_assoc($query);
$description = filter_var(trim($description['description']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($description['name']),FILTER_SANITIZE_STRING);
$Image = filter_var(trim($description['image']),FILTER_SANITIZE_STRING);
$role = filter_var(trim($description['id_role']),FILTER_SANITIZE_NUMBER_INT);
?>
<main class="main-block">
    <div class="centerDivs profile-header">
        <div class="row" style="border-color: #363533">
            <div class="col-3">
                <div class="col"><img src="img/<?=$Image?>" alt="ава" class="rounded-circle profile-image-avatar">
                </div>
                <div class="col">
                    <button class="btn  btn-my-dark-color btn-my-dark-size profile-button-new" type="submit">
                        <img src="img/девушка1.jpg" alt="" class="profile-button-new-image">Добавить NewHow
                    </button>
                </div>
                <div class="col">
                    <button class="btn  btn-my-dark-color btn-my-dark-size profile-button-new" type="submit">
                        <img src="img/девушка1.jpg" alt="" class="profile-button-new-image">Запустить стрим
                    </button>
                </div>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col"><span class="profile-span-name"><?=$name?></span></div>
                    <div class="col" style="float: left">
                        <button class="btn  btn-my-dark-color btn-my-dark-size profile-button-settings" type="submit">
                            Настройки профиля
                            <img src="img/девушка1.jpg" alt="" class="profile-button-settings-image">
                        </button>

                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col"><span class="profile-span-stats"><b><?=$lead?></b> подписчики</span></div>
                    <div class="col"><span class="profile-span-stats"><b><?=$follow?></b> подписки</span></div>
                    <div class="col"><span class="profile-span-stats"><b><?=$countpost?></b> публикации</span></div>
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
    if($role == 2)
    {
        echo "
        <!--забаненый профиль-->
    <div class=\"centerDivs\">
    <span class=\"banprofile-span\"><img src=\"img/ban.png\" alt=\"\" class=\"banprofile-image\"><b> ЭТОТ ПРОФИЛЬ БЫЛ ЗАБЛОКИРОВАН</b></span>
    </div>
        ";
    }
    else {
        echo "
<!--мелкие постыы-->
<div class=\"centerDivs\">";

        #заменить на реальные ссылки на страницы с фоточками и текстом
        $query = $db->query("SELECT * FROM `post` WHERE `id_user`= '{$userId}'");
        $posts= mysqli_fetch_assoc($query);

        foreach ($posts as $post) {
            $query = $db->query("SELECT * FROM `category` WHERE `id_category`= '{$post['id_category']}'");
            $category = mysqli_fetch_assoc($query);
            $category = filter_var(trim($category['name']),FILTER_SANITIZE_STRING);

            $query = $db->query("SELECT * FROM `liked` WHERE `id_post`= '{$post['id_post']}'");
            $countlike = mysqli_fetch_assoc($query);
            $like = count($countlike);

            $query = $db->query("SELECT * FROM `comment` WHERE `id_post`= '{$post['id_post']}'");
            $countcomment = mysqli_fetch_assoc($query);
            $comment = count($countcomment);

            echo "
        <a href=\"post.php?id={$post['id']}\">
            <div class=\"item post\">
                <div class=\"h-100 d-inline-block img-wrap post-for-image\">
                    <img src=\"img/девушка1.jpg\" alt=\"категория\" class=\"post-image\">
                    <p class=\"post-image-category\" style=\"    background-color: rgba(0, 0, 0, 0.27);color: white;border-radius: 17px width: 60%;left: 37%;\">
                        $category</p>
                </div>
                <div class=\"col\">
                    <div class=\"row post-date\">
                        {$post['date']}
                    </div>
                    <div class=\"row post-header\">
                        <b>{$post['header']}</b>
                    </div>
                    <div class=\"row\" style=\"padding: 10px\">
                        <p class=\"post-text\">
                            {$post['preview']}
                        </p>
                    </div>
                    <div class=\"row post-statistics\">
                        <div class=\"col post-statistics-like\">
                            <div class=\"row post-statistics \">
                                <img src=\"img/heart.png\" alt=\"\" class=\"post-statistics-image\">
                            </div>
                            <div class=\"row post-statistics-values\">$like</div>
                        </div>
                        <div class=\"col post-statistics-comment\" style=\"\">
                            <div class=\"row\" style=\"padding: 0\">
                                <img src=\"img/comment.png\" alt=\"\" class=\"post-statistics-image\">
                            </div>
                            <div class=\"row post-statistics-values\">$comment</div>
                        </div>
                        <div class=\"col post-statistics-views\" style=\"\">
                            <div class=\"row\" style=\"padding: 0\">
                                <img src=\"img/eye.png\" alt=\"\" class=\"post-statistics-image\">
                            </div>
                            <div class=\"row post-statistics-values\">{$post['view_count']}</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        ";
        }
    }
        ?>


</main>
<?php
require('footer.php');
$db->close();
?>
</body>
</html>

