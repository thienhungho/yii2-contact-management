<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model thienhungho\ContactManagement\modules\ContactBase\Contact */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => t('app', 'Contact'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= t('app', 'Contact').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'subject',
        'author_email:email',
        'author_name',
        'author_phone',
        'author_birth_date',
        'author_stress_address',
        'author_city',
        'author_zip_code',
        'content:ntext',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
