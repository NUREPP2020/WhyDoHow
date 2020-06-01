<?php

setcookie('userId', 12, time() - 3600*24, "/");
setcookie('userName', 12, time() - 3600*24, "/");
setcookie('userImage', 12, time() - 3600*24, "/");

header('Location: /WhyDoHow-master/index.php');