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
<main class="main-block">
    <!--
    <div class="centerDivs">
        <div class="row">
            <div class="thumb-wrap">
                <img src="img/девушка1.jpg" alt="" width="600" height="400" sallowfullscreen></iframe>
            </div>
            <div class="col">
                <div class="thumb-wrap">
                    <div class="row"><img src="img/девушка1.jpg" alt="" width="300" height="200"
                                          sallowfullscreen></iframe>
                    </div>
                </div>
                <br>
                <div class="thumb-wrap">
                    <div class="row"><img src="img/девушка1.jpg" alt="" width="300" height="200"
                                          sallowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!--топ 3 хреновины-->
    <div>
        <div class="row img-wrap" style="margin: 0 10% 0 10%">
            <img src="img/девушка1.jpg" alt="" class="col post-top-image post-top-image-big">
            <span>
                <img src="img/eye.png" alt="" style="width: 45px">
                1234
            </span>
            <span style=" border: 1px solid #fff;border-radius: 7px;top: 50%">
                самые популярные
            </span>
            <span style="bottom: 22%; ">
                <h4 style="width: 40%">
                    заголовок f f f f f f f f f f f f f f f f f f f f f f f f f f f f  f f
                </h4>
            </span>
            <span style="bottom: 10%; left: 30%"><img src="img/heart.png" alt="" style="width: 40px">
                1231
                <img src="img/comment.png" alt="" style="width: 40px">
                1231
            </span>

            <div class="col img-wrap" style="max-width: 600px">
                <!--первая мелкая фотка-->
                <div class="row">
                    <img src="img/девушка1.jpg" alt="" class="col post-top-image post-top-image-small">
                    <span>
                <img src="img/eye.png" alt="" style="width: 40px; left: 5%">
                1235
                    </span>
                    <span style="top: 25%; ">
                <h5 style="width: 50%">
                    заголовок f f f f f f f f f f f f f f f f f f f f f f f f f f f f f f
                </h5>
                    </span>
                    <span style="top: 35%; left: 60%"><img src="img/heart.png" alt="" style="width: 30px">
                1235
                <img src="img/comment.png" alt="" style="width: 30px">
                1235
            </span>
                </div>
                <br>
                <!--вторая мелкая фотка-->
                <div class="row">
                    <img src="img/девушка1.jpg" alt="" class="col post-top-image post-top-image-small">
                    <span>
                <img src="img/eye.png" alt="" style="width: 40px">
                1235
                    </span>
                    <span style="top: 73%; ">
                <h5 style="width: 50%">
                    заголовок f f f f f f f f f f f f f f f f f f f f f f f f f f f f f
                </h5>
                    </span>
                    <span style="top: 83%; left: 60%"><img src="img/heart.png" alt="" style="width: 30px">
                1235
                <img src="img/comment.png" alt="" style="width: 30px">
                1235
            </span>
                </div>
            </div>
        </div>
    </div>
    <br><br>
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
