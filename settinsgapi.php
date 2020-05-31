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
<main class="main-block11">

    <div class="formsettings1" >
        <form>
                <div class="photoavtr" >
                  <div class="lol">  <img src="img/девушка5.jpg" class="avtset">
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
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla pellentesque ultricies. Fusce non lacus a purus facilisis accumsan eu sed odio. Aliquam non justo in purus pulvinar luctus. Aenean tincidunt dictum turpis non lobortis. Nam massa dolor, luctus non magna quis, elementum dapibus purus. Nulla purus lectus, cursus et malesuada vel, ultricies sed odio. Nulla mi nisi, convallis quis blandit sed, accumsan ornare mi. Nunc a ligula non arcu tristique vestibulum. Aliquam ut odio ligula. Vestibulum quis porta risus. Nullam maximus pretium tellus, quis luctus lacus dictum a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tempor nisi eu nisi bibendum, non efficitur urna egestas. Suspendisse euismod cursus diam, quis hendrerit metus tempor eget.

Cras consequat eros aliquam, ullamcorper purus quis, hendrerit odio. Nullam volutpat convallis sapien, vel dapibus dui laoreet viverra. Pellentesque iaculis ultrices erat, sit amet lobortis tellus scelerisque id. Phasellus tempus mattis lacus, sed tristique metus auctor id. Nunc non quam sit amet tortor ultrices feugiat. Praesent egestas accumsan augue, ut interdum lectus dictum quis. Proin efficitur enim scelerisque convallis placerat. Nullam vitae nibh congue, auctor tortor quis, ultricies nisl. Curabitur malesuada nulla elit, eu semper eros pharetra sed. Aliquam condimentum elit nec sem tempus, vitae viverra justo consequat. Quisque id sodales elit. Curabitur dapibus, dui sit amet accumsan aliquet, sem risus hendrerit dui, at facilisis enim nunc egestas odio. Praesent nec pulvinar nisi. Donec consequat volutpat nibh eget rhoncus. Cras condimentum neque eget nulla luctus aliquam. Donec commodo, velit vel viverra porttitor, ante ipsum elementum est, sit amet tincidunt lorem nisl vel odio.</textarea>
             </div>
                 <div class="form-group1">
                <h6>Имя на сайте:</h6>
                <input type="text" class="form-control border border-dark form-control-orange" id="inputAddress"
                       placeholder="Имя на сайте">
            </div>

        
            <div class="form-group1">
                <h6>Приватность профиля:</h6>
                <select  class="form-control border border-dark form-control-orange" required>
                        <option class="input" name="privat" type="text" value="1">Публичный</option>
                        <option class="input" name="privat" type="text" value="2">Приватный</option>
                    </select>
                    <span style="font-size: 35px; color: black;"class="ques1">
                                                            <div class="descr1">
                                                            <p class="textcloud1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla pellentesque ultricies. Fusce non lacus a purus facilisis accumsan eu sed odio. Aliquam non justo in purus pulvinar luctus. Aenean tincidunt dictum turpis non </p>
                                </div>
                        <i class="far fa-question-circle"></i></span>
            </div>

            <button class="btn  btn-my-dark-color btn-my-dark-size" type="submit">Подвердить</button>
            </div>
        </form>
    </div>
        


</main>
<?php
require('footer.php')
?>
</body>
</html>