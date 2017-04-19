<?php 
 require_once 'models/MyPDO.php';
 require_once 'models/Articles.php';
  $articles_connect = new Articles();
  $artricles = $articles_connect -> AllArticles($db);
 require_once 'views/articles.php';
