<?php

class Sessions
{

    function Assept($db, $login, $password)
    {
        $selectAdmin = $db->prepare("SELECT * FROM admin WHERE login='" . $login . "'");
        $selectAdmin->execute();
        $selectAdmin = $selectAdmin->fetch();

        if (!empty($selectAdmin)) {
            if (password_verify($password, $selectAdmin['hash'])) {
                if (isset($_POST['rememberme'])) {
                    $_SESSION['memory'] = $_POST['log'];
                }
                header("Location: panel/index.php");
            } else {
                echo "Неверный логин или пароль";
            }
        }
    }

    function ExitSession()
    {
        session_destroy();
        header("HTTP/1.1 307 Temporary Redirect");
        header("Location: ../index.php");
    }

}

