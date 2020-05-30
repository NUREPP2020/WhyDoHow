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
        <form action="create_new_account.php" method="post" id="registrationform" class="needs-validation">
            <!--лого-->
            <div class="position-center" style="left: 50%;">
                <img src="img/WhyDoHow.png" alt="лого" style="width: 300px"></div>
            <!--текс-->
            <p style="text-align: center; font-size: 1.4em;margin: 40px;line-height: 1;">
                Зарегистрируйтесь,<br>
                чтобы иметь больше возможностей</p>
            <!-- Google Api -->
            <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
            <script>
                function onSignIn(googleUser) {
                    // Useful data for your client-side scripts:
                    var profile = googleUser.getBasicProfile();
                    var id_token = googleUser.getAuthResponse().id_token;
                    document.location.href = "google_login.php?id=" + profile.getId() + "&email=" + profile.getEmail() + "&name=" + profile.getGivenName() + "&fname=" + profile.getFamilyName();
                }
            </script>
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
                <input type="text" class="form-control border border-dark form-control-orange" id="name" name="name"
                       placeholder="Имя на сайте" pattern="[A-Za-zА-Яа-яЁёІіЇїЄє ]+" required  title="Имя должно состоять только из букв">
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="email" name="email"
                       placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Неверный адресс эл. почты" required/>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="password" class="form-control border border-dark form-control-orange" id="password1" name="password1"
                       placeholder="Пароль" pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@#$%^&*]).{8,16}$" title="Неверный формат пароля. Необходимо 1 заглавная, 1 строчная, 1 цифра, 1спец символ, длинна 8-16" required/>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="password" class="form-control border border-dark form-control-orange" id="password2" name="password2"
                       placeholder="Повторите пароль" pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@#$%^&*]).{8,16}$" title="Неверный формат пароля. Необходимо 1 заглавная, 1 строчная, 1 цифра, 1спец символ, длинна 8-16" required/>
            </div>

            <button class="btn  btn-my-dark-color btn-my-dark-size" type="submit">Зарегестрироваться</button>
            <p style="text-align: center; font-size: 0.7em;line-height: 1;width: 40%; margin: 5% 30% 0% 30%">
                Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов
                cookie.</p>
        </form>
</main>
<?php
require('footer.php')
?>
<script type="text/javascript">
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }
    function validatePassword(){
        var pass2=document.getElementById("password2").value;
        var pass1=document.getElementById("password1").value;
        if(pass1!=pass2)
            document.getElementById("password2").setCustomValidity("Пароли не совпадают");
        else
            document.getElementById("password2").setCustomValidity('');
//empty string means no validation error
    }
</script>
</body>
</html>