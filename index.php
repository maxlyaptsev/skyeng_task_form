<?php
/* @var $this yii\web\View */
/* @var $model app\models\RegisterForm */
?>


<ul class="tabs">
    <li class="tab"><a href="#person">Физ. лицо</a></li>
    <li class="tab"><a href="#legal">Юр. лицо</a></li>
</ul>

<div class="tab-content">
    <div id="person">
        <?= $this->render('_form_person', [
            'model' => $model,
        ]); ?>
    </div>
    <div id="legal">
        <?= $this->render('_form_legal', [
            'modelLegal' => $model,
        ]); ?>
    </div>
</div>