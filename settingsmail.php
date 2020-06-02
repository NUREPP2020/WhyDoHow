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
require('header.php');
// Пути загрузки файлов
$path = 'img/';
$tmp_path = 'tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg');
// Максимальный размер файла
$size = 1024000;

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    @copy($_FILES['photo']['tmp_name'], $path . $_FILES['photo']['name']);
    header('Location: /WhyDoHow-master/settingsmail_submit.php?name='.$_POST['name'].'&description='.$_POST['description'].'&privat='.$_POST['privats'].'&email='.$_POST['email'].'&image='.$_FILES['photo']['name']);

}


mysqli_report(MYSQLI_REPORT_STRICT);
try{
    $db = new mysqli('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
} catch (Exception $e)
{
    echo "Error:".$e->getMessage();
}
$query = $db->query("SELECT * FROM `user` WHERE `id_user`= '{$_COOKIE['userId']}'");
$user = mysqli_fetch_assoc($query);
$description = filter_var(trim($user['description']),FILTER_SANITIZE_STRING);
$privat = filter_var(trim($user['privat']),FILTER_SANITIZE_NUMBER_INT);

$query = $db->query("SELECT * FROM `login_mail` WHERE `id_user`= '{$_COOKIE['userId']}'");
$user = mysqli_fetch_assoc($query);
$email = filter_var(trim($user['mail']),FILTER_SANITIZE_STRING);
?>
<main class="main-block11">

    <div class="formsettings1" >
        <form method="post"  enctype="multipart/form-data">
                <div class="photoavtr" >
                  <div class="lol">  <img src="img/<?=$_COOKIE['userImage']?>" class="avtset">
                    <div class = "shapeadd">
                        <div class="kek">
                            <span style="font-size: 45px; color: black;"class="cams"><i class="fas fa-camera"></i></span>
                        <input class="bt1" type="file" name="photo" multiple accept="image/*,image/jpeg">
                        
                    </div>
                    </div>
                </div>
                </div>
            <div class="formplace" id="sett">
                    <div class="form-group1">

                        <h6> Описание профиля:</h6>
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="description"><?=$description?></textarea>
             </div>
                 <div class="form-group1">
                <h6>Имя на сайте:</h6>
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Имя на сайте" name="name" value="<?=$_COOKIE['userName']?>">
            </div>
            <div class="form-group1">
                <h6>Эл. адрес:</h6>
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Эл. адрес" name="email" value="<?=$email?>">
            </div>
        
            <div class="form-group1">
                <h6>Приватность профиля:</h6>
                <select   class="form-control border border-dark form-control-orange" name="privats" required>
                    <?php
                    if($privat == 0)
                    {
                        echo '
                        <option class="input" name="privat" type="text" selected value="0">Публичный</option>
                        <option class="input" name="privat" type="text" value="1">Приватный</option>
                        ';
                    }
                    else{
                        echo '
                        <option class="input" name="privat" type="text"  value="0">Публичный</option>
                        <option class="input" name="privat" type="text" selected value="1">Приватный</option>
                        ';
                    }
                    ?>
                </select>
                    <span style="font-size: 35px; color: black;"class="ques">
                                                            <div class="descr">
                                                            <p class="textcloud">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla pellentesque ultricies. Fusce non lacus a purus facilisis accumsan eu sed odio. Aliquam non justo in purus pulvinar luctus. Aenean tincidunt dictum turpis non </p>
                                </div>
                        <i class="far fa-question-circle"></i></span>
            </div>

            <button class="btn  btn-my-dark-color btn-my-dark-size" type="submit">Подвердить</button>
            </div>
        </form>
    </div>
        
<div class="formsettings2" >
        <form action="settingsmail_passwod.php" method="post">

            <div class="formplace1">
                      <div class="form-group1" >
                        <h6>Старый пароль:</h6>
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Старый пароль" name="password1">
            </div>
            <div class="form-group1" >
                <h6>Новый пароль:</h6>
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Новый пароль" name="password2">
            </div>
            <div class="form-group1">
                <h6>Повторите новый пароль:</h6>
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Повторите новый пароль">
            </div>
            <button class="btn  btn-my-dark-color btn-my-dark-size" type="submit" >Сменить пароль</button>
            </div>
        </form>
    </div>

</main>
<?php
require('footer.php');
$db->close();
?>
</body>
</html>