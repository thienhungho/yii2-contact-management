<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model thienhungho\ContactManagement\modules\ContactManage\search\ContactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-contact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Subject']) ?>

    <?= $form->field($model, 'author_email')->textInput(['maxlength' => true, 'placeholder' => 'Author Email']) ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true, 'placeholder' => 'Author Name']) ?>

    <?= $form->field($model, 'author_phone')->textInput(['maxlength' => true, 'placeholder' => 'Author Phone']) ?>

    <?php /* echo $form->field($model, 'author_birth_date')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => t('app', 'Choose Author Birth Date'),
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'author_stress_address')->textInput(['maxlength' => true, 'placeholder' => 'Author Stress Address']) */ ?>

    <?php /* echo $form->field($model, 'author_city')->textInput(['maxlength' => true, 'placeholder' => 'Author City']) */ ?>

    <?php /* echo $form->field($model, 'author_zip_code')->textInput(['maxlength' => true, 'placeholder' => 'Author Zip Code']) */ ?>

    <?php /* echo $form->field($model, 'content')->textarea(['rows' => 6]) */ ?>

    <div class="form-group">
        <?= Html::submitButton(t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
