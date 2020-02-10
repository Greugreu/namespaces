<?php
spl_autoload_register();

use \inc\services\Form;

$error = array();

$form = new Form();

include 'inc/view/header.php'; ?>

<form action="" method="post">
    <?= $form->label('title') ?>
    <?= $form->input('title', 'text') ?>
    <?= $form->error('title') ?>
    <?= $form->submit('submitted', 'envoyer') ?>
</form>

<?php include 'inc/view/footer.php';
