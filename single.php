<?php

spl_autoload_register();

use inc\services\Tools;
use inc\model\ArticleModel;
use inc\repository\ArticleRepository;

$tools = new Tools();
$repo = new ArticleRepository();
$art = new ArticleModel();

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $article = $repo->getArticle($id);
    $tools->debug($article);
    if (empty($article)) {
        die('404');
    }
} else {
    // aller faire dans tools une redirection vers 404 => une vrai +++
    die ('404');
}

include 'inc/view/header.php';

echo $article->viewSingleArticle();

include 'inc/view/footer.php';
