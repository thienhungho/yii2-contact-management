<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ContactManagement\modules\ContactBase\Contact */

$this->title = t('app', 'Save As New {modelClass}: ', [
    'modelClass' => 'Contact',
]). ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Contact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = t('app', 'Save As New');
?>
<div class="contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>
