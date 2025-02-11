<?php

use ghostytom\core\form\Form;
use app\models\User;
use ghostytom\core\View;

/** @var $this View */
$this->title = 'Profile';

/** @var $model User */
?>

<h1>Create an Account</h1>

<?php $form = Form::begin('', "post") ?>

    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end() ?>
