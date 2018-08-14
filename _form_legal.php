<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\RegisterForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>


<?php $form = ActiveForm::begin([
    'id' => 'registerFormLegal',
    'method' => 'post',
]); ?>

<?= Html::hiddenInput('type', 'person') ?>
<?= $form->field($model, 'fio')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'taxNumber')->textInput() ?>
<?= $form->field($model, 'companyName')->textInput() ?>

<?= Html::submitButton('Зарегистрироваться') ?>

<?php ActiveForm::end(); ?>
