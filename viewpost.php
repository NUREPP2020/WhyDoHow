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
        $postno= $_GET['id'];
        $link = mysqli_connect("localhost", "root", "root", "whydohow");
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM post WHERE id_post = $postno";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($rows = mysqli_fetch_array($result))
                {
                    echo '<div style="background-size:cover; background-repeat:no-repeat; background-image:url(data:image/jpeg;base64,'.base64_encode($rows['preview'] ).');" alt="" class="prev">
        <div class="id_post"><p align="center">'.$rows['id_post'].'</p></div>
        <div class="category1"><h2 class="cattext" align="center">'.$rows['id_category'].'</h2></div>
        <div class="namepost"><h1 class="napo" align="center">'.$rows['header'].'</h1></div>
        <div class="authorp">
            <div class="avtar"><img src="img/девушка5.jpg" class="avt"></div>
            <div class="autname"><h3 class="avttext">Пархоменко Полина </h3></div>
        </div>
        <div class="datap"><h5 class="dataptext">'.$rows['date'].'</h5></div>
        <div class="infopo">
            <span style="font-size: 65px; color: white;" class="likepo"><i class="fas fa-heart"></i>
            <h4>1512</h4>
            </span>
            <span style="font-size: 65px; color: white;" class="compo"><i class="fas fa-comment-dots"></i>
                <h4>1512</h4>
            </span>
            <span style="font-size: 65px; color: white;" class="viepo"><i class="fas fa-eye"></i>
                <h4>'.$rows['view_count'].'</h4>
            </span>

        </div>
      </div>
    </div>';
                }
                mysqli_free_result($result);
            }
        }
        ?>
        <?php
        $postno= $_GET['id'];
        $link = mysqli_connect("localhost", "root", "root", "whydohow");
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
                <p>кулинария,</p>
                <p>итальянская кухня</p></div>
            <div class="down-like">
                <span style="font-size: 45px;color: black;" class="down-like"><i class="fas fa-heart"></i><h5
                            class="lol">Мне нравится</h5></span>
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
                <h2 class="title-comments">Комментарии (989)</h2>
                <form action="" method="post" enctype="multipart/form-data" style="margin-bottom: 5%">
                    <div class="row">
                        <div class="col" style="padding: 0 0 0 5%; max-width: 200px">
                            <img src="img/девушка1.jpg" alt="ава" class="rounded-circle profile-image-avatar"
                                 style="width: 100px">
                        </div>
                        <div class="col" style="vertical-align: middle">
                        <span class="round-sides dark-background"
                              style="float: left; color: #FEC541; padding: 10px 20px 10px 20px; vertical-align: middle">имя любимое твое имя любимое твое</span>
                        </div>
                    </div>
                    <textarea type="text" class="form-control" name="textarea" placeholder="Оставте коментарий"
                              style="height: 300px;max-width:80%;max-height: 350px; margin: 2% 10% 0 10% "></textarea><br>
                    <button class="btn btn-success" type="submit"
                            style="color: #FEC541; background-color: #363533; float: right; margin-right: 10%">
                        Отправить отзыв
                    </button>
                </form>
                <br>
                <hr>

                <ul class="media-list">
                    <?php
                    #заменить на реальные ссылки на страницы с фоточками и текстом
                    for ($i = 0; $i < 6; $i++) {
                        echo '

                <!-- Комментарий (уровень 1) -->
                <li class="media">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                    <div class="media-left">
                        <!-- сюда ссылку на профиль чела -->
                        <a href="#">
                            <img class="media-object img-circle" src="img/девушка1.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <div class="author">Дима <!-- Bootstrap 4 -->
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
                                                    <form action="create_new_account.php" method="post"
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
                                <span class="date">16 ноября 2015, 13:43</span>
                            </div>
                        </div>
                        <br>
                        <div class="media-text text-justify">Lorem ipsum dolor sit amet. Blanditiis praesentium
                            voluptatum deleniti atque. Autem vel illum, qui blanditiis praesentium voluptatum deleniti
                            atque corrupti. Dolor repellendus cum soluta nobis. Corporis suscipit laboriosam, nisi ut
                            enim. Debitis aut perferendis doloribus asperiores repellat. sint, obcaecati cupiditate non
                            numquam eius. Itaque earum rerum facilis. Similique sunt in ea commodi. Dolor repellendus
                            numquam eius modi. Quam nihil molestiae consequatur, vel illum, qui ratione voluptatem
                            accusantium doloremque.
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
require('footer.php')
?>
</body>
</html>
