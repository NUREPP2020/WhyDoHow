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
        <div class="row " style="margin: 0 10% 0 10%">
            <img src="img/девушка1.jpg" alt="" class="col" style="" id="post-top-image-big">
            <div class="col">
                <div class="row">
                    <img src="img/девушка1.jpg" alt="" class="col" id="post-top-image-small">
                </div>
                <br>
                <div class="row">
                    <img src="img/девушка1.jpg" alt="" class="col" id="post-top-image-small">
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

        <?php
        $servername = "localhost";
        $username = "id12390796_admin";
        $password = "1234@dminDark";
        $database = "id12390796_whydohow";
        $connect = mysqli_connect("localhost", "id12390796_admin", "1234@dminDark", "id12390796_whydohow");
        if (isset($_POST["insert"])) {
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $iduser = $_POST['iduser'];
            $header = $_POST['header'];
            $idcategory = $_POST['idcategory'];
            $idsubcategory = $_POST['idsubcategory'];
            $privat = $_POST['privat'];
            $text = $_POST['text'];
            $view_count = $_POST['view_count'];
            $date = $_POST['date'];
            $query = "INSERT INTO post(id_user, preview, heder, id_category, id_subcategory, privat, text, view_count, date) VALUES ('$iduser','$file','$header', '$idcategory', '$idsubcategory', '$privat', '$text', '$view_count', '$date')";
            if (mysqli_query($connect, $query)) {
                echo '<script>alert("Image Inserted into Database")</script>';
            }
        }
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        </head>
        <body>
        <?php
        require('header.php')
        ?>
        <main class="main-block position-center" style="margin-top: 40px">
            <div class="orange-background" style="padding: 30px; border-radius:10px;width: 100%">
                <form method="post" enctype="multipart/form-data">
                    <label>ID пользователя:</label>
                    <input class="input" name="iduser" type="text" value=""><br>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Превью поста</label>
                        <div class="col-sm-10">
                            <input type="file" class="custom-file-input" type="file" name="image" id="image">
                            <label class="custom-file-label" for="customFile" type="file" name="image" id="image">Выберите файл</label>
                            <!--убрать поле ниже и попытаться отобразить имя выбраного файла-->
                            <input type="file" name="image" id="image"/><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                            Заголовок поста</label>
                        <div class="col-sm-10">
                            <input class="input form-control" name="header" type="text" placeholder="Заголовок поста">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                            Категория</label>
                        <div class="form-group col-sm-10">
                            <select class="custom-select" required class="input" name="idcategory" type="text" value="">
                                <option class="input" name="idcategory" type="text" value="">Категорияu</option>
                                <option class="input" name="idcategory" type="text" value="1">One</option>
                                <option class="input" name="idcategory" type="text" value=""2>Two</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                            Подкатегория</label>
                        <div class="form-group col-sm-10">
                            <select class="custom-select" required>
                                <option class="input" name="idsubcategory" type="text" value="1">One</option>
                                <option class="input" name="idsubcategory" type="text" value="2">Two</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">
                            Приватность профиля</label>
                        <div class="form-group col-sm-10">
                            <select class="custom-select" required>
                                <option class="input" name="privat" type="text" value="1">Публичный</option>
                                <option class="input" name="privat" type="text" value="2">Приватный</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="text"></textarea>
                    </div>

                    <div class="form-group row" style="float: revert">
                        <div class="col-sm-10">
                            <button type="submit" class="btn  btn-my-dark-color btn-my-dark-size" type="submit" name="insert" id="insert" value="Insert" style="width: 30%">Insert</button>
                        </div>
                    </div>
                    <label>Просмотров:</label>
                    <input class="input" name="view_count" type="text" value=""><br>
                    <label>Дата создания:</label>
                    <input class="input" name="date" type="text" value="">
                </form>
                <form method="post" enctype="multipart/form-data">
                </form>
            </div>
        </main>
        <?php
        require('footer.php')
        ?>
        </body>
        </html>
        <script>
            $(document).ready(function () {
                $('#insert').click(function () {
                    var image_name = $('#image').val();
                    if (image_name == '') {
                        alert("Please Select Image");
                        return false;
                    } else {
                        var extension = $('#image').val().split('.').pop().toLowerCase();
                        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                            alert('Invalid Image File');
                            $('#image').val('');
                            return false;
                        }
                    }
                });
            });
        </script>
        <!-- Footer -->
        <footer class="page-footer font-small blue pt-4 orange-background">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left" style="padding: 0 11% 0 11%">

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">

                        <!-- Content -->
                        <h5 class="text-uppercase">©2020 «WhyDoHow»</h5>
                        <p>Служба техподдержки: wdh.support@gmail.com</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none pb-3">

                    <!-- Grid column -->
                    <div class="col mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase"></h5>
                        <h5 class="text-uppercase"></h5>


                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Условия пользования</a>
                            </li>

                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase"></h5>
                        <h5 class="text-uppercase"></h5>


                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Конфиденциальность</a>
                            </li>
                        </ul>

                    </div>

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col mb-md-0 mb-3">

                        <!-- Links -->
                        <h5 class="text-uppercase"></h5>
                        <h5 class="text-uppercase"></h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">О нас</a>
                            </li>
                        </ul>

                    </div>

                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

        </footer>
        <!-- Footer -->
</main>
<?php
require('footer.php')
?>
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css"/>


<header style=" position: sticky; top: 0; width: 100%; z-index: 100;">

    <nav class="navbar navbar-expand-lg navbar-light orange-background">
        <a class="navbar-brand logo d-none d-lg-block" href="index.php"">
        <img src="img/WhyDoHow.png" alt="лого" style="width: 300px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <form class="form-inline my-0 my-lg-0 ">

                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">🔎</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                               placeholder="Имя пользователя">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">🔎</button>
                        </div>
                    </div>
                </form>

            </ul>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Категории
            </a>
            <div class="dropdown-menu category-background" aria-labelledby="navbarDropdown">
                <div class="centerDivs">
                    <!--категории-->
                    <a href="index.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">главная</p>
                        </div>
                    </a>
                    <a href="registration.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">регистрация</p>
                        </div>
                    </a>
                    <a href="createpost.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">создание поста</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--профиль-->
        <a href="registration.php">
            <div class="round-sides dark-background"
                 style="min-width: 100px; padding-left: 10px; color: #FEC541" align="right">
                мое очень длинное имя
                <img src="img/user.png" alt="фото" class="rounded-circle img-fluid" style="max-height: 40px">
            </div>
        </a>

    </nav>
</header>
<?php
/*$servername = "localhost";
$username = "id12390796_admin";
$password = "1234@dminDark";
$database = "id12390796_whydohow";
$connect = mysqli_connect("localhost", "id12390796_admin", "1234@dminDark", "id12390796_whydohow");
if (isset($_POST["insert"])) {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $iduser = $_POST['iduser'];
    $header = $_POST['header'];
    $idcategory = $_POST['idcategory'];
    $idsubcategory = $_POST['idsubcategory'];
    $privat = $_POST['privat'];
    $text = $_POST['text'];
    $view_count = $_POST['view_count'];
    $date = $_POST['date'];
    $query = "INSERT INTO post(id_user, preview, heder, id_category, id_subcategory, privat, text, view_count, date) VALUES ('$iduser','$file','$header', '$idcategory', '$idsubcategory', '$privat', '$text', '$view_count', '$date')";
    if (mysqli_query($connect, $query)) {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}*/

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="post2.css">
</head>
<body>
<?php
require('header.php')
?>
<main class="main-block position-center" style="">

    <div class='post1'>
        <div class='black'>
        </div>
        <form method="post" enctype="multipart/form-data">
            <label>ID пользователя:</label>
            <input class="input" name="iduser" type="text" value=""><br>
            <label>Фото:</label>
            <input type="file" name="image" id="image"/><br>
            <label>Заголовок:</label>
            <input class="input" name="header" type="text" value=""><br>
            <label>Категория:</label>
            <input class="input" name="idcategory" type="text" value=""><br>
            <label>Подкатегория:</label>
            <input class="input" name="idsubcategory" type="text" value=""><br>
            <label>Приватность:</label>
            <input class="input" name="privat" type="text" value=""><br>
            <textarea name="text" rows="30" class="area"></textarea><br>
            <label>Просмотров:</label>
            <input class="input" name="view_count" type="text" value=""><br>
            <label>Дата создания:</label>
            <input class="input" name="date" type="text" value="">
            <input type="submit" name="insert" id="insert" value="Insert" class="btn"/>
        </form>
    </div>
</main>
<?php
require('footer.php')
?>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#insert').click(function () {
            var image_name = $('#image').val();
            if (image_name == '') {
                alert("Please Select Image");
                return false;
            } else {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>
