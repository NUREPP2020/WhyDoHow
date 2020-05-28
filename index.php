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
<main class="main-block">
    <!--
    <div class="centerDivs">
        <div class="row">
            <div class="thumb-wrap">
                <img src="img/девушка1.jpg" alt="" width="600" height="400" sallowfullscreen></iframe>
            </div>
            <div class="col">
                <div class="thumb-wrap">
                    <div class="row"><img src="img/девушка1.jpg" alt="" width="300" height="200"
                                          sallowfullscreen></iframe>
                    </div>
                </div>
                <br>
                <div class="thumb-wrap">
                    <div class="row"><img src="img/девушка1.jpg" alt="" width="300" height="200"
                                          sallowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!--топ 3 хреновины-->

    <div id="topPosts">
        <div class="row img-wrap" style="margin: 0 10% 0 10%">
            <img src="img/девушка1.jpg" alt="" class="col post-top-image post-top-image-big">
            <span class="post-top-image-stats-size post-top-image-big-eye">
                <img src="img/eye.png" alt="" class="post-top-image-big-top-icon">
                1234
            </span>
            <span class="post-top-label-most-popular">
                самые популярные
            </span>
            <span class="post-top-image-big-top-span-header">
                    <b>заголовок f f f f f f f f f f f f f f f f f f f f f f f f f f f f</b>
            </span>
            <span style="left: 30%" class="post-top-image-stats-size post-top-image-big-bottom-icon-y">
                <img src="img/heart.png" alt="" class="post-top-image-big-bottom-icon">
                1231
                <img src="img/comment.png" alt="" class="post-top-image-big-bottom-icon">
                1231
            </span>

            <div class="col img-wrap" style="max-width: 600px">
                <!--первая мелкая фотка-->
                <div class="row">
                    <img src="img/девушка1.jpg" alt="" class="col post-top-image post-top-image-small">
                    <span class="post-top-span-margin-content post-top-image-stats-size">
                <img src="img/eye.png" alt="" class="post-top-image-small-top-icon">
                1235
                    </span>
                    <span class="post-top-span-margin-content post-top-image-small-top-span-header1">
                    <b>заголовок f f f f f f f f f f f f f f f f f f f f f f f f f f f</b>
                    </span>
                    <span style="left: 60%" class="post-top-image-stats-size post-top-image-small-bottom-icon-y1">
                        <img src="img/heart.png" alt="" class="post-top-image-small-bottom-icon">
                1235
                <img src="img/comment.png" alt="" class="post-top-image-small-bottom-icon">
                1235
            </span>
                </div>
                <br>
                <!--вторая мелкая фотка-->
                <div class="row">
                    <img src="img/девушка1.jpg" alt="" class="col post-top-image post-top-image-small">
                    <span class="post-top-span-margin-content post-top-image-stats-size">
                <img src="img/eye.png" alt="" class="post-top-image-small-top-icon">
                1237
                    </span>
                    <span class="post-top-span-margin-content post-top-image-small-top-span-header2">
                   <b>заголовок f f f f f f f f f f f f f f f f f f f f f f</b>
                    </span>
                    <span style="left: 60%" class="post-top-image-stats-size post-top-image-small-bottom-icon-y2">
                        <img src="img/heart.png" alt="" class="post-top-image-small-bottom-icon">
                        1237
                        <img src="img/comment.png" alt="" class="post-top-image-small-bottom-icon">
                        1237
                    </span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--мелкие постыы-->
    <div class="centerDivs">
        <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        $link = mysqli_connect("localhost", "root", "root", "smp");

        // Check connection
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt select query execution
        $sql = "SELECT * FROM post ORDER BY id_post DESC";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($rows = mysqli_fetch_array($result)) {
                    echo '<a href="#">';
                    echo '<div class="item post">';
                    echo '<div class="h-100 d-inline-block img-wrap post-for-image">';
                    echo '  <img src="data:image/jpeg;base64,' . base64_encode($rows['preview']) . '" alt="категория" class="post-image">';
                    echo '  <p class="post-image-category" style="background-color: rgba(0, 0, 0, 0.27); color: white;    border-radius: 17px;width: 60%;left: 37%;">';
                    echo $rows['id_category'];
                    echo '</p>';
                    echo '</div>';
                    echo '<div class="col">';
                    echo '<div class="row post-date">';
                    echo $rows['date'];
                    echo '</div>';
                    echo '<div class="row post-header">';
                    echo '<b>';
                    echo $rows['heder'];
                    echo '  </b>';
                    echo '</div>';
                    echo '<div class="row" style="padding: 10px">';
                    echo '<p class="post-text">';
                    echo $rows['text'];
                    echo '</p>';
                    echo '</div>';
                    echo '  <div class="row post-statistics">';
                    echo '<div class="col post-statistics-like">';
                    echo '<div class="row post-statistics ">';
                    echo '<img src="img/heart.png" alt="" class="post-statistics-image">';
                    echo '</div>';
                    echo '<div class="row post-statistics-values">123</div>';
                    echo '</div>';
                    echo '<div class="col post-statistics-comment" style="">';
                    echo '<div class="row" style="padding: 0">';
                    echo '<img src="img/comment.png" alt="" class="post-statistics-image">';
                    echo '</div>';
                    echo '<div class="row post-statistics-values">123</div>';
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
    </div>

</main>
<?php
require('footer.php')
?>
</body>
</html>
