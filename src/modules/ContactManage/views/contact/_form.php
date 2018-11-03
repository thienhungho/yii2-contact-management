<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model thienhungho\ContactManagement\modules\ContactBase\Contact */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true, 'placeholder' => 'Subject']) ?>

    <?= $form->field($model, 'author_email')->textInput(['maxlength' => true, 'placeholder' => 'Author Email']) ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true, 'placeholder' => 'Author Name']) ?>

    <?= $form->field($model, 'author_phone')->textInput(['maxlength' => true, 'placeholder' => 'Author Phone']) ?>

    <?= $form->field($model, 'author_birth_date')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => t('app', 'Choose Author Birth Date'),
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'author_stress_address')->textInput(['maxlength' => true, 'placeholder' => 'Author Stress Address']) ?>

    <?= $form->field($model, 'author_city')->textInput(['maxlength' => true, 'placeholder' => 'Author City']) ?>

    <?= $form->field($model, 'author_zip_code')->textInput(['maxlength' => true, 'placeholder' => 'Author Zip Code']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? t('app', 'Create') : t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'create'): ?>
        <?= Html::submitButton(t('app', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a(t('app', 'Cancel'), request()->referrer , ['class'=> 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
