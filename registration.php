<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Регистрация</title>
</head>
<body>
<?php
require('header.php')
?>
<main class="main-block position-center" style="">
    <div class="form-autorisation-size orange-background" style="padding: 30px; border-radius:10px;">
        <form>
            <!--лого-->
            <div class="position-center" style="left: 50%;">
                <img src="img/WhyDoHow.png" alt="лого" style="width: 300px"></div>
            <!--текс-->
            <p style="text-align: center; font-size: 1.4em;margin: 40px;line-height: 1;">
                Зарегистрируйтесь,<br>
                чтобы иметь больше возможностей</p>
            <div class="btn input-group mb-2 mr-sm-2 btn-API" style="text-align: center; max-height: 50px">
                <div class="input-group-text btn-API-SN">G</div>
                <span class="input-group-text btn-API-SN-text"
                      style="background-color: rgba(51, 51, 51, 1); border-color: #363533; color: #FEC541;margin-left: 30px">
                    Вход через Google
                </span>
            </div>
            <div class="btn input-group mb-2 mr-sm-2 btn-API" style="text-align: center; max-height: 50px">
                <div class="input-group-text btn-API-SN">f</div>
                <div class="input-group-text btn-API-SN-text"
                     style="background-color: rgba(51, 51, 51, 1); border-color: #363533; color: #FEC541;margin-left: 40px">
                    Вход через Facebook
                </div>
            </div>

            <div>
                <div class="label-or" style="text-align: center; margin:  3% 0 3% 0"> или</div>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Эл. адрес">
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Имя на сайте">
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Пароль">
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Повторите пароль">
            </div>

            <button class="btn  btn-my-dark-color btn-my-dark-size" type="submit">Зарегестрироваться</button>
            <p style="text-align: center; font-size: 0.7em;line-height: 1;width: 40%; margin: 5% 30% 0% 30%">
                Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов
                cookie.</p>
        </form>
    </div>

</main>
<?php
require('footer.php')
?>
</body>
</html>