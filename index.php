<?php
spl_autoload_register();


use \inc\services\Tools as Tools;
use inc\repository\ArticleRepository as Art;
use inc\model\ArticleModel;


$tools = new Tools();
$repo = new Art();
$article = new ArticleModel();

$articles = $repo->getAllArticles();
$tools->debug($articles);

include 'inc/view/header.php';

foreach ($articles as $article) {
    echo $article->OneSmallArticle('single.php');
}


include 'inc/view/footer.php';
