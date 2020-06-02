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
            <div align="center">
                <a href="google_button.php">
                    <button class="btn  btn-my-dark-color btn-my-dark-size profile-button-settings"
                            type="button" style="width: 360px">
                        Sign in
                        <img src="img/seo-and-web.svg" alt="" class="profile-button-settings-image" style="float: left">
                    </button>
                </a>
            <!-- Facebook Api -->
            <script>

                function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
                    console.log('statusChangeCallback');
                    console.log(response);                   // The current login status of the person.
                    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
                        testAPI();
                    }
                }


                function checkLoginState() {               // Called when a person is finished with the Login Button.
                    FB.getLoginStatus(function(response) {   // See the onlogin handler
                        statusChangeCallback(response);
                    });
                }


                window.fbAsyncInit = function() {
                    FB.init({
                        appId      : '857050318136434',
                        cookie     : true,                     // Enable cookies to allow the server to access the session.
                        xfbml      : true,                     // Parse social plugins on this webpage.
                        version    : 'v7.0'           // Use this Graph API version for this call.
                    });


                    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
                        statusChangeCallback(response);        // Returns the login status.
                    });
                };


                (function(d, s, id) {                      // Load the SDK asynchronously
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "https://connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));


                function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function(response) {
                        console.log('Successful login for: ' + response.name);
                        document.getElementById('status').innerHTML =
                            'Thanks for logging in, ' + response.name + '! <a href=facebook_login.php?name=' + response.name.replace(" ","_") + '&email=' + response.email + '</a>';
                    });
                }

            </script>

                <fb:login-button class="fb-login-button" scope="public_profile,email"
                                 onlogin="checkLoginState();"
                                 data-size="large" data-layout="default" data-auto-logout-link="false"
                                 data-use-continue-as="false"
                                 data-width="360px">
                </fb:login-button>

            <div id="status">
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
                <input type="password" class="form-control border border-dark form-control-orange" id="password3" name="password1"
                       placeholder="Пароль" pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@#$%^&*]).{8,16}$" title="Неверный формат пароля. Необходимо 1 заглавная, 1 строчная, 1 цифра, 1спец символ, длинна 8-16" required/>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="password" class="form-control border border-dark form-control-orange" id="password2" name="password2"
                       placeholder="Повторите пароль" pattern="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!@#$%^&*]).{8,16}$" title="Неверный формат пароля. Необходимо 1 заглавная, 1 строчная, 1 цифра, 1спец символ, длинна 8-16" required/>
            </div>

            <button class="btn  btn-my-dark-color btn-my-dark-size" type="submit" onclick="validatePassword()" >Зарегестрироваться</button>
            <p style="text-align: center; font-size: 0.7em;line-height: 1;width: 40%; margin: 5% 30% 0% 30%">
                Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов
                cookie.</p>
        </form>
</main>
<?php
require('footer.php')
?>
<script type="text/javascript">
/*    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }*/
    function validatePassword(){
        var pass3=document.getElementById("password3").value;
        var pass2=document.getElementById("password2").value;
        if(pass3===pass2)
            document.getElementById("password2").setCustomValidity('');
        else{
            alert("pass3 = " + pass3 + "pass2 =" +pass2);
            document.getElementById("password2").setCustomValidity("Пароли не совпадают");
        }
//empty string means no validation error
    }
</script>
</body>
</html>