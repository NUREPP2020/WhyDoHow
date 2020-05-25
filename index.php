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
    <div class="centerDivs">
        <?php
        #заменить на реальные ссылки на страницы с фоточками и текстом
        for ($i = 0; $i < 115; $i++) {
            echo '
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap " style="width: 118px; height: 118px; margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" style="width: 118px; height: 118px">
                            <p style="bottom: -11px;">текст</p>
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