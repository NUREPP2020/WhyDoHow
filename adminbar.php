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
<main class="main-block2">
<h2>Жалобы</h2>
<div class="tabl">
    <table>
<tr><th>Id (кто пожаловался)</th><th>Причинана что(пост, комент)</th><th>На что(пост, комент)</th><th>id(кого что)</th><th>id(на кого)</th><th>Дата</th></tr>
<tr><td>Stephen C. Cox</td><td>$300</td><td>$50</td><td>Bob</td><td>лол</td><td>23.05.20</td></tr>
<tr><td>Josephin Tan</td><td>$150</td><td>-</td><td>Annie</td><td>лол</td><td>23.05.20</td></tr>
<tr><td>Joyce Ming</td><td>$200</td><td>$35</td><td>Andy</td><td>лол</td><td>23.05.20</td></tr>
<tr><td>James A. Pentel</td><td>$175</td><td>$25</td><td>Annie</td><td>лол</td><td>23.05.20</td></tr>
</table>

<button class="btn_refresh" type="submit">Обновить</button>
</div>
<div class="search_user">
  <hr class="adm">
  <h3>Поиск пользователя:</h3>

  <form>
    <div class="form-admin-user">
                <h6>Ведите id пользователя</h6>
                <input type="number" class="search_user_" id="inputAddress"
                       placeholder="25">
            </div>
            <button class="btn_admin_user" type="submit">Поиск</button>


  </form>
<div class="user_post">
 <div class="centerDivs">
             <?php
        #заменить на реальные ссылки на страницы с фоточками и текстом
        for ($i = 0; $i < 1; $i++) {
            echo '
        <a href="#">
            <div class="item post">
                <div class="h-100 d-inline-block img-wrap post-for-image">
                    <img src="img/девушка1.jpg" alt="категория" class="post-image">
                    
                </div>
                <div class="col">
                   
                    <div class="row post-header">
                        <b>Name Familia</b>
                    </div>
                  
                    
                    </div>
                </div>
            </div>
        </a>
        ';
        }
        ?>
</div>
</div>
</div>
         <div class="search_user">
  <hr class="adm">
  <h3>Поиск поста:</h3>

  <form>
    <div class="form-admin-user">
                <h6>Ведите id поста</h6>
                <input type="number" class="search_user_" id="inputAddress"
                       placeholder="2534">
            </div>
            <button class="btn_admin_user" type="submit">Поиск</button>


  </form>
<div class="user_post">
 <div class="centerDivs">
             <?php
        #заменить на реальные ссылки на страницы с фоточками и текстом
        for ($i = 0; $i < 1; $i++) {
            echo '
        <a href="#">
            <div class="item post">
                <div class="h-100 d-inline-block img-wrap post-for-image">
                    <img src="img/девушка1.jpg" alt="категория" class="post-image">
                    <p class="post-image-category" style="    background-color: rgba(0, 0, 0, 0.27);
    color: white;    border-radius: 17px;    width: 60%;    left: 37%;


">
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
</div>
</div>
</div>

</main>
<?php
require('footer.php')
?>
</body>
</html>