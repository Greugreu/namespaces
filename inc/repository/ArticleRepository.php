<?php

namespace inc\repository;

use inc\model\ArticleModel;
use \PDO;
include 'inc/pdo.php';

class ArticleRepository
{
    private $table = 'articles';

    public function getAllArticles()
    {
        global $pdo;

        $sql = "SELECT * FROM $this->table";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS,'\inc\model\ArticleModel');
    }

    public function getArticle($id)
    {
        global $pdo;
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $article = $query->fetchObject('inc\model\ArticleModel');

        return $article;
    }
}
