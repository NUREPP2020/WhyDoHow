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
require('header.php')
?>
<main class="main-block">
    <div class="centerDivs profile-header">
        <div class="row" style="border-color: #363533">
            <div class="col-3">
                <div class="col"><img src="img/девушка1.jpg" alt="ава" class="rounded-circle profile-image-avatar">
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
                    <div class="col"><span class="profile-span-name">Пахомова Алиса</span></div>
                    <div class="col" style="float: left">
                        <button class="btn  btn-my-dark-color btn-my-dark-size profile-button-settings" type="submit">
                            Настройки профиля
                            <img src="img/девушка1.jpg" alt="" class="profile-button-settings-image">
                        </button>

                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col"><span class="profile-span-stats"><b>1234</b> подписчики</span></div>
                    <div class="col"><span class="profile-span-stats"><b>1234</b> подписки</span></div>
                    <div class="col"><span class="profile-span-stats"><b>1234</b> публикации</span></div>
                </div>
                <div class="row line profile-description">
                    <p>glhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg
                        izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h</p>
                    <p>glhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg
                        izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h</p>
                    <p>glhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg
                        izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h</p>
                    <p>glhfgjks ghk hjkg kjss jfgdh jgfsdhgsdfhjfsdh g uirexgu uyre uygzwu h g hsdfh gk hszf hg
                        izuwrergh zh gh zshfdkgk s rezgh sgfkj hjsdzhfg hzshfgkhjzsdh fguizsrh h</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <!--мелкие постыы-->
    <div class="centerDivs">
        <?php
        #заменить на реальные ссылки на страницы с фоточками и текстом
        for ($i = 0; $i < 6; $i++) {
            echo '
        <a href="#">
            <div class="item post">
                <div class="h-100 d-inline-block img-wrap post-for-image">
                    <img src="img/девушка1.jpg" alt="категория" class="post-image">
                    <p class="post-image-category" style="    background-color: rgba(0, 0, 0, 0.27);
    color: white;    border-radius: 17px;    width: 60%;    left: 37%;">
                        категория</p>
                </div>
                <div class="col">
                    <div class="row post-date">
                        12 марта 2020
                    </div>
                    <div class="row post-header">
                        <b>Заголовок поста</b>
                    </div>
                    <div class="row" style="padding: 10px">
                        <p class="post-text">
                            текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                            текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                            текст текст текст текст текст текст текст текст текст текст текст текст текст текст текст
                        </p>
                    </div>
                    <div class="row post-statistics">
                        <div class="col post-statistics-like">
                            <div class="row post-statistics ">
                                <img src="img/heart.png" alt="" class="post-statistics-image">
                            </div>
                            <div class="row post-statistics-values">123</div>
                        </div>
                        <div class="col post-statistics-comment" style="">
                            <div class="row" style="padding: 0">
                                <img src="img/comment.png" alt="" class="post-statistics-image">
                            </div>
                            <div class="row post-statistics-values">123</div>
                        </div>
                        <div class="col post-statistics-views" style="">
                            <div class="row" style="padding: 0">
                                <img src="img/eye.png" alt="" class="post-statistics-image">
                            </div>
                            <div class="row post-statistics-values">123</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        ';
        }
        ?>


</main>
<?php
require('footer.php')
?>
</body>
</html>
