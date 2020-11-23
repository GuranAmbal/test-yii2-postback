<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Install */

$this->title = 'Create Install';
$this->params['breadcrumbs'][] = ['label' => 'Installs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="install-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
