<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
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
require('header.php')
?>
<main class="main-block1">
    <div >
        <?php
        mysqli_report(MYSQLI_REPORT_STRICT);
        try{
            $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
        } catch (Exception $e)
        {
            echo "Error:".$e->getMessage();
        }
        $likeq = 'none';
        $postn = $_GET['id'];
        $query = $db->query("SELECT * FROM `post` WHERE `id_post` = '$postn'");
        $post = mysqli_fetch_assoc($query);
        $query = $db->query("UPDATE `post` SET `view_count` = `view_count` + 1 WHERE `id_post` = '$postn'");
        $today = date("Ymd");
        $query = $db->query("UPDATE `post` SET `last_view_date` = '$today' WHERE `id_post` = '$postn'");
        $query = $db->query("SELECT * FROM `user` WHERE `id_user` = '{$post['id_user']}'");
        $hozainposta = mysqli_fetch_assoc($query);
        $query = $db->query("SELECT * FROM `comment` WHERE `id_post` = '{$post['id_post']}'");
        $comments = mysqli_fetch_assoc($query);
        $query = $db->query("SELECT COUNT(*) AS Lol FROM `comment` WHERE `id_post` = '{$post['id_post']}'");
        $countcomments  = mysqli_fetch_assoc($query);
        if(isset($_COOKIE['userId']))
        {
            $query = $db->query("SELECT * FROM `liked` WHERE `id_post` = '{$post['id_post']}' AND `id_user` = '{$_COOKIE['userId']}'");
            $l  = mysqli_fetch_assoc($query);
            if(count($l) == 0)
            {
                $likeq = 'black';
            }
            else
            {
                $likeq = 'red';
            }
        }

        echo '<div style="background-size:cover; background-repeat:no-repeat; background-image:url(data:image/jpeg;base64,'.base64_encode($post['preview'] ).');" alt="" class="prev">
        <div class="id_post"><p align="center">'.$post['id_post'].'</p></div>
        <div class="category1"><h2 class="cattext" align="center">'.$post['id_category'].'</h2></div>
        <div class="namepost"><h1 class="napo" align="center">'.$post['header'].'</h1></div>
        <a href="otherprofile.php?id='.$hozainposta['id_user'].'">
        <div class="authorp">
            <div class="avtar"><img src="img/'.$hozainposta['image'].'" class="avt"></div>
            <div class="autname"><h3 class="avttext">'.$hozainposta['name'].' </h3></div>
        </div>
        </a>
        <div class="datap"><h5 class="dataptext">'.$post['date'].'</h5></div>
        <div class="infopo">
            <span style="font-size: 65px; color: white;" class="likepo"><i class="fas fa-heart"></i>
            <h4>'.$post['like_count'].'</h4>
            </span>
            <span style="font-size: 65px; color: white;" class="compo"><i class="fas fa-comment-dots"></i>
                <h4>'.$countcomments['Lol'].'</h4>
            </span>
            <span style="font-size: 65px; color: white;" class="viepo"><i class="fas fa-eye"></i>
                <h4>'.$post['view_count'].'</h4>
            </span>
        </div>
      </div>
    </div>';
        ?>
        <?php
        $postno= $_GET['id'];
        $link = mysqli_connect('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM post WHERE id_post = $postno";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($rows = mysqli_fetch_array($result))
                {
                    echo '
    <div class="maintextp">
        <p>'.$rows['text'].'</p>

        <div class="down-info">
            <div class="down-cat"><p>Категории: </p>
                <p>'.$post['id_category'].'</p></div>
            <div class="down-like">
            ';
                    if($likeq != 'none')
                    {
                        echo '
                        <form method="post" action="like_submit.php">
            <button type="submit" style="background: rgba(0,0,0,0);border: none">
            <input name="user" type="hidden" value="'.$_COOKIE['userId'].'">
            <input name="post" type="hidden" value="'.$post['id_post'].'">
                <span style="font-size: 45px;color: '.$likeq.';" class="down-like"><i class="fas fa-heart"></i><h5
                            class="lol">Мне нравится</h5></span> </button>
                            </form>
                        ';
                    }
                    echo '
            </div>
        </div>
    </div>';

                }
                mysqli_free_result($result);
            }
        }
        ?>


        <div class="commentblock">
            <div class="comments">
                <h2 class="title-comments">Комментарии (<?=$countcomments['Lol']?>)</h2>
                <?php
                if(isset($_COOKIE['userId']))
                {
                    echo '
                    <form action="add_comment.php" method="post" enctype="multipart/form-data" style="margin-bottom: 5%">
                    <input name="post" type="hidden" value="'.$postn.'">
                    <input name="user" type="hidden" value="'.$_COOKIE['userId'].'">
                    <div class="row">
                        <div class="col" style="padding: 0 0 0 5%; max-width: 200px">
                            <img src="img/'.$_COOKIE['userImage'].'" alt="ава" class="rounded-circle profile-image-avatar"
                                 style="width: 100px">
                        </div>
                        <div class="col" style="vertical-align: middle">
                        <span class="round-sides dark-background"
                              style="float: left; color: #FEC541; padding: 10px 20px 10px 20px; vertical-align: middle">'.$_COOKIE['userName'].'</span>
                        </div>
                    </div>
                    <textarea type="text" class="form-control" name="text" placeholder="Оставте коментарий"
                              style="height: 300px;max-width:80%;max-height: 350px; margin: 2% 10% 0 10% "></textarea><br>
                    <button class="btn btn-success" type="submit"
                            style="color: #FEC541; background-color: #363533; float: right; margin-right: 10%">
                        Отправить отзыв
                    </button>
                </form>
                    ';
                }
                ?>
                <br>
                <hr>

                <ul class="media-list">
                    <?php
                    #заменить на реальные ссылки на страницы с фоточками и текстом
                    $query1 = $db->query("SELECT * FROM `comment` WHERE `id_post` = '{$post['id_post']}'");
                    while($comment = mysqli_fetch_assoc($query1))
                    {
                        $query = $db->query("SELECT * FROM `user` WHERE `id_user` = '{$comment['id_user']}'");
                        $user_comment = mysqli_fetch_assoc($query);
                        echo '

                <!-- Комментарий (уровень 1) -->
                <li class="media">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <div class="media-left">
                        <!-- сюда ссылку на профиль чела -->
                        <a href="otherprofile.php?id='.$user_comment['id_user'].'">
                            <img class="media-object img-circle" src="img/'.$user_comment['image'].'" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <div class="author">'.$user_comment['name'].' <!-- Bootstrap 4 -->
                                <div class="btn-group" style="float: right">
                                    <!-- Кнопка -->
                                    <button class="btn  btn-my-dark-color btn-my-dark-size" type="button"
                                            data-toggle="modal" data-target="#commentReportModal"
                                            data-whatever="@getbootstrap">
                                        <!--commentReportModal заменить на commentReportModal_id-->
                                        <img src="img/девушка1.jpg" alt="" width="20px">
                                    </button>
                                    <!-- Button trigger modal -->
                                    <div class="modal fade" id="commentReportModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true"><!--commentReportModal заменить на commentReportModal_id-->
                                        <div class="modal-dialog " role="document" style="max-width: 460px">
                                            <div class="modal-content orange-background">
                                                <div class="modal-header" style="border: 0">
                                                    <h5 class="modal-title">пожаловаться</h5>
                                                    <!--commentReportModal заменить на commentReportModal_id-->
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--форма входа-->
                                                    <form action="" method="post"
                                                          id="commentReport" class="needs-validation">
                                                        <div align="left">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="exampleRadios1"
                                                                       value="option1" checked>
                                                                <label class="form-check-label" for="exampleRadios1">
                                                                    Спам
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="exampleRadios2"
                                                                       value="option2">
                                                                <label class="form-check-label" for="exampleRadios2">
                                                                    Насилие
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="exampleRadios1"
                                                                       value="option1" checked>
                                                                <label class="form-check-label" for="exampleRadios3">
                                                                    Оскорбление других участников
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                       name="exampleRadios" id="exampleRadios2"
                                                                       value="option2">
                                                                <label class="form-check-label" for="exampleRadios4">
                                                                    Флуд, то есть не несет никакой пользы
                                                                </label>
                                                            </div>
                                                            <button class="btn  btn-my-dark-color btn-my-dark-size"
                                                                    type="submit" style="max-width: 300px">
                                                                Войти
                                                            </button>
                                                        </div>
                                                        <div id="status">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal END-->
                                </div>
                            </div>
                            <div class="metadata">
                                <span class="date">'.$comment['date'].'</span>
                            </div>
                        </div>
                        <br>
                        <div class="media-text text-justify"><p>'.$comment['text'].'</p>
                        </div>
                        <hr>
                    </div>
                </li>
                <!-- Конец комментария (уровень 1) -->
                ';
                    }
                    ?>

                </ul>
            </div>
        </div>
</main>
<?php
require('footer.php');
$db->close();
?>
</body>
</html>
