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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal END-->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Категории
            </a>
            <div class="dropdown-menu category-background" aria-labelledby="navbarDropdown">
                <div class="centerDivs">
                    <!--категории-->
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
                    </a><a href="viewpost.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">просмотр поста</p>
                        </div>
                    </a><a href="viewstream.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">просмотр стрима</p>
                        </div>
                    </a><a href="myprofilw.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">мой профиль</p>
                        </div>
                    </a><a href="otherprofile.php">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">чужой профиль</p>
                        </div>
                    </a><a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a><a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a><a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a><a href="#">
                        <div class="item h-100 d-inline-block img-wrap category-img" style=" margin: auto">
                            <img src="img/девушка1.jpg" alt="категория" class="category-img">
                            <p style="bottom: -11px;">текст</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--профиль-->
        <?php
        if(!isset($_COOKIE['userId']))
        {
            //<a href="registration.php"> или выпадающие окна
            echo "
            <a href=\"registration.php\">
            <div class=\"round-sides dark-background\"
                 style=\"min-width: 100px; padding-left: 10px; color: #FEC541\" align=\"right\">
                мое очень длинное имя
                <img src=\"img/user.png\" alt=\"фото\" class=\"rounded-circle img-fluid\" style=\"max-height: 40px\">
            </div>
        </a>
            ";
        }
        else{
            //<a href="index.php"> -> кабинет личный
            echo "
            <a href=\"myprofile.php\">
            <div class=\"round-sides dark-background\"
                 style=\"min-width: 100px; padding-left: 10px; color: #FEC541\" align=\"right\">
                {$_COOKIE['userName']}
            <img src = \"img/{$_COOKIE['userImage']}\" alt = \"фото\" class=\"rounded-circle img-fluid\" style = \"max-height: 40px\" >
            </div >
        </a >
            ";
        }
        ?>
        <script>
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
        </script>
    </nav>
</header>
