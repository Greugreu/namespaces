<?php
spl_autoload_register();

use \inc\services\Form;
use \inc\services\Validation;
use \inc\repository\ArticleRepository;

$errors = array();

if (!empty($_POST['submitted'])) {
    //XSS
    $title = trim(strip_tags($_POST['title']));
    $content = trim(strip_tags($_POST['content']));

    //Validation
    $v = new Validation();
    $errors = $v->validInput($errors, $title, 'titre', 3, 120);
    $errors = $v->validInput($errors, $content, 'contenu', 10, 500);

    if (count($errors) == 0) {
        $repo = new ArticleRepository();
        $new_id = $repo->insert($title, $content);
        header('Location: single.php?' . $new_id);
    }
}

$errors['title'] = 'oiehfsofhse';

$form = new Form($errors);

include 'inc/view/header.php'; ?>

<form action="" method="post">
    <?= $form->label('title', 'label') ?>
    <?= $form->input('title', 'text') ?>
    <?= $form->error('title') ?>
    <?= $form->submit('submitted', 'envoyer') ?>
</form>


<?php include 'inc/view/footer.php';
