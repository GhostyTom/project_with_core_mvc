<?php
use ghostytom\core\View;
use ghostytom\core\form\Form;
use app\models\ContactForm;
use ghostytom\core\form\TextareaField;

    /** @var $this View  */
    $this->title = 'Contact';
    /** @var $model ContactForm */
?>

<h1> Contact us</h1>

<?php $form = Form::begin('','post'); ?>
<?php echo $form->field($model,'subject') ?>
<?php echo $form->field($model,'email') ?>
<?php echo new TextareaField($model, 'body') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>
