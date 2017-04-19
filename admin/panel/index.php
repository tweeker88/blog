<?php
session_start();
require_once "../../models/MyPDO.php";
require_once "../../models/Articles.php";
require_once "../../models/admin/Session.php";
$session = new Sessions();
$articles_connect = new Articles();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}
if ($action == "add") {
    $_GET['id'] = '';
    $articles['title'] = '';
    $articles['date'] = '';
    $articles['content'] = '';
    include "../../views/admin/addArticle.php";
    if (isset($_POST['btn'])) {
        $addArticles = $articles_connect->NewArticle($db, $_POST['title'], $_POST['date'], $_POST['content']);
    }
} elseif ($action == "edit") {
    if (!isset($_GET['id'])) {
        header("Location:index.php");
    }
    $id = (int)$_GET['id'];
    if (!empty($_POST) && $id > 0) {
        if (isset($_POST['btn'])) {
            $editArticles = $articles_connect->EditArticle($db, $id, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Refresh: 0");
        }
    }
    $articles = $articles_connect->GetArticle($id, $db);
    include("../../views/admin/addArticle.php");

} elseif ($action == "delete") {
    if (!isset($_GET['id'])) {
        header("Location:index.php");
    }
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $editArticles = $articles_connect->DeleteArticle($db, $id);
        header("Location:index.php");
    }
} elseif ($action == "exit") {
    $session->ExitSession();
} elseif ($action == "main") {
    header("Location:../../index.php");
} else {
    $articles = $articles_connect->AllArticles($db);
    require_once "../../views/admin/panel.php";
}

