<?php

class Articles
{
    function AllArticles($db)
    {

        $query = $db->prepare('SELECT * FROM articles ORDER BY id DESC');
        $query->execute();
        $data = $query->fetchAll();

        return $data;
    }

    function GetArticle($id, $db)
    {

        $query = $db->prepare('SELECT * FROM articles WHERE id=' . $id);
        $query->execute();
        $data = $query->fetchAll();
        $article = array();

        foreach ($data as $article => $value) {
            $article = $value;
        }

        return $article;
    }

    function EditArticle($db, $id, $title, $date, $content)
    {
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
        if (empty($title)) {
            return false;
        }
        try {
            $query = $db->prepare("UPDATE articles SET title = :title , content =:content , date = :date WHERE id=:id");
            $query->bindParam(':id', $id);
            $query->bindParam(':title', $title);
            $query->bindParam(':content', $content);
            $query->bindParam(':date', $date);
            $query->execute();
            echo "<script>alert('Статья успешна обновлена.');</script>";
        } catch (PDOException $e) {
            echo "Ошибка" . $e->getMessage();
            exit;
        }
    }


    function NewArticle($db, $title, $date, $content)
    {
        $title = strip_tags(trim($title));
        $content = strip_tags(trim($content));
        if (empty($title) || empty($content)) {
            return false;
        }
        try {
            $query = $db->prepare("INSERT INTO articles (title,date,content) VALUES (:title,:date,:content)");
            $data = array('title' => $title, 'date' => $date, 'content' => $content);
            $query->execute($data);
            echo "<script>alert('Статья успешна добавлена.');</script>";
            header("Refresh: 0");
        } catch (PDOException $e) {
            echo "Ошибка" . $e->getMessage();
            exit;
        }

    }

    function DeleteArticle($db, $id)
    {
        try {
            $query = $db->prepare("DELETE FROM articles WHERE id=?");
            $query->bindParam(1, $id);
            $query->execute();
            echo "<script>alert('Статья успешна удалена.');</script>";
            header("Refresh: 0");
        } catch (PDOException $e) {
            echo "Ошибка" . $e->getMessage();
            exit;
        }
    }

    function ArticleSub($string, $replacement ="...", $start =450, $length=null, $encoding=null)
    {
        if ($encoding == null) $encoding = mb_internal_encoding();
        if ($length == null) {
            return mb_substr($string, 0, $start, $encoding) . $replacement;
        }
        else {
            if($length < 0) $length = mb_strlen($string, $encoding) - $start + $length;
            return
                mb_substr($string, 0, $start, $encoding) .
                $replacement .
                mb_substr($string, $start + $length, mb_strlen($string, $encoding), $encoding);
        }
    }
    function Date($db,$date){


    }
}