<?php 
 require_once '../models/MyPDO.php';
 require_once '../models/Articles.php';
 $articles_connect = new Articles();
 $article = $articles_connect -> GetArticle($_GET['id'],$db);
 require_once '../views/article.php';