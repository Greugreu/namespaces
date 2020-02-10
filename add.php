<?php
spl_autoload_register();

use \inc\services\Form;

$errors = array();

$form = new Form($errors);

include 'inc/view/header.php'; ?>

<form action="" method="post">
    <?= $form->label('title', 'label') ?>
    <?= $form->input('title', 'text') ?>
    <?= $form->submit('submitted', 'envoyer') ?>
</form>


<?php include 'inc/view/footer.php';
