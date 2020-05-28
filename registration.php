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
        <form id="registrationform" class="needs-validation">
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
                <input type="text" class="form-control border border-dark form-control-orange" name="email" id="inputAddress"
                       placeholder="Эл. адрес"required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Имя на сайте"required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Пароль" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group" style="width: 64%;margin-left: 17%;margin-right: 17%">
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Повторите пароль"required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
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
<script>
    $(document).ready(function() {
        $('#registrationform').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: 'The username can only consist of alphabetical and number'
                        },
                        different: {
                            field: 'password',
                            message: 'The username and password cannot be the same as each other'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not a valid'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
                        different: {
                            field: 'username',
                            message: 'The password cannot be the same as username'
                        },
                        stringLength: {
                            min: 8,
                            message: 'The password must have at least 8 characters'
                        }
                    }
                },
            }
        });
    });
</script>
<!--<script>
    // Disable form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>-->
</body>
</html>