<?php #    require_once('db.php')

mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $db = new PDO('mysql:host=localhost;dbname=id13813325_wdh', "id13813325_admin", "1234@dminDark");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

function closeConnection()
{
    global $db;

    $db->connection = null;
}

function addNewUser($name, $image, $description, $privat, $id_role)
{
    global $db;

    try {
        $db->query("INSERT INTO `user` (`id_user`, `name`) VALUES (NULL, '$name', '$image', '$description', '$privat', '$id_role')");
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function authorization($login, $password)
{
    global $db;

    try {
        $result = $db->prepare("SELECT * FROM `user` WHERE `login` ='$login' AND `password` = '$password'");
        $result->execute();
        $user = $result->fetchAll();
        if (count($user) == 0) {
            echo "такого пользователя не найдено";
            exit();
        }

        setcookie('userId', $user['0']['0'], time() + 3600, "/");
        setcookie('userName', $user['0']['1'], time() + 3600, "/");
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getUserName($id)
{
    global $db;

    try {
        $result = $db->query("SELECT name FROM user WHERE id = '$id'");
        $user = $result->fetchAll();
        return $user["0"]["0"];
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function addNewComment($text)
{
    global $db;

    try {
        #транзакция для вставки коментария
        $db->beginTransaction();
        $userId = (int)$_COOKIE['userId'];
        $db->query("INSERT INTO `comment` (`id`, `userId`, `text`) VALUES (NULL, '$userId', '$text');");
        $db->query("UPDATE `user`  SET `numberOfComments`= numberOfComments+1 WHERE id = '$userId'");
        $db->commit();
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getAllComments()
{
    global $db;
    try {
        return $db->query("SELECT * FROM comment ORDER BY id DESC;");
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getUserCommentCount($id)
{
    global $db;

    try {
        $result = $db->query("SELECT numberOfComments FROM user WHERE id = '$id'");
        $user = $result->fetchAll();
        return $user["0"]["0"];
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function deleteCommentById($commentId)
{
    global $db;

    try {
        #транзакция для удаления коментария
        $db->beginTransaction();
        $userId = (int)$_COOKIE['userId'];
        $db->query("DELETE FROM comment WHERE id = '$commentId'");
        $db->query("UPDATE `user`  SET `numberOfComments`= numberOfComments-1 WHERE id = '$userId'");
        $db->commit();

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

