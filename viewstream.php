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
<main class="main-block1">
    <div>
        <?php
        $postno= $_GET['id'];
        $link = mysqli_connect('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "UPDATE `stream` SET `view_count` = `view_count` + 1 WHERE `id_stream` = '$postn'";
        $result = mysqli_query($link, $sql);
        $sql = "SELECT * FROM stream WHERE id_stream = $postno";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($rows = mysqli_fetch_array($result))
                {
                    echo '<div style="background-size:cover; background-repeat:no-repeat; background-image:url(data:image/jpeg;base64,'.base64_encode($rows['preview'] ).');" alt="" class="prev">
        <div class="id_post"><p align="center">'.$rows['id_post'].'</p></div>
        <div class="category1"><h2  class= "cattext" align="center">'.$rows['id_category'].'</h2></div>
        <div class="namepost"><h1  class= "napo" align="center">'.$rows['header'].'</h1></div>
        <div class="authorp">
            <div class="avtar"><img src="img/девушка5.jpg" class="avt"></div>
            <div class="autname"><h3 class="avttext">Пархоменко Полина </h3></div>
        </div>
        <div class="datap"><h5 class="dataptext">'.$rows['date'].'</h5></div>
        <div class="infostream">
            <span style="font-size: 65px; color: white;"class="viestream"><i class="fas fa-eye"></i>
                <h4>'.$rows['view_count'].'</h4>
            </span>

        </div>
    </div>
    </div>';
                }
                mysqli_free_result($result);
            }
        }
        ?>
        <?php
        $postno= $_GET['id'];
        $link = mysqli_connect('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM stream WHERE id_stream = $postno";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($rows = mysqli_fetch_array($result))
                {
                    echo '
        <div class="maintextp">
            <iframe src="'.$rows['linck'].'" frameborder="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p> '.$rows['text'].'</p>

<div class="down-info">
    <div class="down-cat"><p>Категории: </p><p>кулинария,</p><p>итальянская кухня</p></div>

</div>
        </div>';
                }
                mysqli_free_result($result);
            }
        }
        ?>

</main>
<?php
require('footer.php')
?>
</body>
</html>
