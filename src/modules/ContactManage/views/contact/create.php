<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model thienhungho\ContactManagement\modules\ContactBase\Contact */

$this->title = t('app', 'Create Contact');
$this->params['breadcrumbs'][] = ['label' => t('app', 'Contact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
