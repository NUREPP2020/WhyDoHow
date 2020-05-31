<?php
$servername = "localhost";
$username = "id12390796_admin";
$password = "1234@dminDark";
$database = "id12390796_whydohow";
$connect = mysqli_connect("localhost", "root", "root", "whydohow");
if (isset($_POST["insert"])) {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $iduser = $_POST['iduser'];
    $header = $_POST['header'];
    $idcategory = $_POST['idcategory'];
    $idsubcategory = $_POST['idsubcategory'];
    $privat = $_POST['privat'];
    $linck = $_POST['linck'];
    $text = $_POST['text'];
    $view_count = $_POST['view_count'];
    $date = $_POST['date'];
    $query = "INSERT INTO stream(id_user, preview, heder, id_category, id_subcategory, privat, linck, text, view_count, date) VALUES ('$iduser','$file','$header', '$idcategory', '$idsubcategory', '$privat','$linck', '$text', '$view_count', '$date')";
    if (mysqli_query($connect, $query)) {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script src="http://js.nicedit.com/nicEdit-latest.js"></script>
  <script>

bkLib.onDomLoaded(function()

{

new nicEditor().panelInstance('NicEdit');

new nicEditor().panelInstance('NicEdit2');

});

</script>
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
                        <option class="input" name="idcategory" type="text" value=2>Категорияu</option>
                        <option class="input" name="idcategory" type="text" value=1>One</option>
                        <option class="input" name="idcategory" type="text" value=2>Two</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">
                    Подкатегория</label>
                <div class="form-group col-sm-10">
                    <select class="custom-select" required>
                        <option class="input" name="idsubcategory" type="text" value=1>One</option>
                        <option class="input" name="idsubcategory" type="text" value=2>Two</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">
                    Приватность профиля</label>
                <div class="form-group col-sm-10">
                    <select class="custom-select" required>
                        <option class="input" name="privat" type="text" value=1>Публичный</option>
                        <option class="input" name="privat" type="text" value=2>Приватный</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" textarea id="NicEdit" cols="80" rows="9"name="text"></textarea><br>
            </div>
            <label>Ссылка:</label>
            <input class="input" name="linck" type="text" value=""><br>
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
