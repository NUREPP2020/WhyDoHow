<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "smp";
$connect = mysqli_connect("localhost", "root", "root", "whydohow");
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
    <link rel="stylesheet" type="text/css" href="post2.css">
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
<main class="main-block position-center" style="">

    <div class='post1'>
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
            <textarea class="form-control" textarea id="NicEdit" cols="80" rows="5"name="text"></textarea><br>
            <label>Просмотров:</label>
            <input class="input" name="view_count" type="text" value=""><br>
            <label>Дата создания:</label>
            <input class="input" name="date" type="text" value="">
            <input type="submit" name="insert" id="insert" value="Insert" class="btn"/>
        </form>
    </div>
</main>

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
