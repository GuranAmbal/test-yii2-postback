<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Postback */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="postback-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'campaign_id')->textInput() ?>

    <?= $form->field($model, 'Clicks')->textInput() ?>

    <?= $form->field($model, 'Installs')->textInput() ?>

    <?= $form->field($model, 'CRi')->textInput() ?>

    <?= $form->field($model, 'Trials')->textInput() ?>

    <?= $form->field($model, 'CRti')->textInput() ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
