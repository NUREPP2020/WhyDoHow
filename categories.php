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
$id_category = $_GET['id_category'];
?>
<main class="main-block">

    <div class="centerDivs">
        <div class="bar_search">
   <h2><?=$id_category?></h2>
</div>
        <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        $link = mysqli_connect('95.216.155.184', 'whydohow', 'Admin', 'whydohowdb');
        // Check connection
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        // Attempt select query execution
        $sql = "SELECT * FROM post WHERE `id_category` = '{$id_category}' ORDER BY popularity DESC";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_array($result)) {
                        $sql1 = "SELECT COUNT(*) AS CountCom FROM `comment` WHERE `id_post`= '{$rows['id_post']}'";
                        $result1 = mysqli_query($link, $sql1);
                        $r = mysqli_fetch_array($result1);
                        $sql1 = "SELECT COUNT(*) AS CountCom FROM `comment` WHERE `id_post`= '{$rows['id_post']}'";
                        $result1 = mysqli_query($link, $sql1);
                        $r = mysqli_fetch_array($result1);
                        echo '<a  href="viewpost.php?id=' . $rows['id_post'] . '">';

                        echo '<div class="item post">';
                        echo '<div class="h-100 d-inline-block img-wrap post-for-image">';
                        echo '  <img src="data:image/jpeg;base64,' . base64_encode($rows['preview']) . '" alt="категория" class="post-image">';
                        echo '  <p class="post-image-category" style="background-color: rgba(0, 0, 0, 0.27); color:white;    border-radius: 17px;width: 60%;left: 37%;">';
                        echo $rows['id_category'];
                        echo '</p>';
                        echo '</div>';
                        echo '<div class="col">';
                        echo '<div class="row post-date">';
                        echo $rows['date'];
                        echo '</div>';
                        echo '<div class="post-header" style="font-size:19px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box;  -webkit-line-clamp: 1; -webkit-box-orient: vertical;">';
                        echo '<b>';
                        echo $rows['header'];
                        echo '</b>';
                        echo '</div>';
                        echo '<div class="row" style="padding: 10px">';
                        echo '<p class="post-text">';
                        echo strip_tags($rows['text']);
                        echo '</p>';
                        echo '</div>';
                        echo '  <div class="row post-statistics">';
                        echo '<div class="col post-statistics-like">';
                        echo '<div class="row " style="padding: 0">';
                        echo '<img src="img/heart.png" alt="" class="post-statistics-image">';
                        echo '</div>';
                        echo '<div class="row post-statistics-values">';
                        echo    $rows['like_count'];
                        echo'</div>';
                        echo '</div>';
                        echo '<div class="col post-statistics-comment" style="">';
                        echo '<div class="row" style="padding: 0">';
                        echo '<img src="img/comment.png" alt="" class="post-statistics-image">';
                        echo '</div>';
                        echo '<div class="row post-statistics-values">';
                        echo  $r['CountCom'];
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col post-statistics-views" style="">';
                        echo '<div class="row" style="padding: 0">';
                        echo '<img src="img/eye.png" alt="" class="post-statistics-image">';
                        echo '</div>';
                        echo '<div class="row post-statistics-values"> ';
                        echo $rows['view_count'];
                        echo ' </div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                }
                mysqli_free_result($result);
            } else {
                echo "No records matching your query were found.";
            }
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        // Close connection
        mysqli_close($link);
        ?>


</main>
<?php
require('footer.php')
?>
</body>
</html>