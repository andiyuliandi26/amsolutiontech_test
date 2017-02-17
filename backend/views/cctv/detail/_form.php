<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_list')->textInput() ?>

    <?= $form->field($model, 'fitur')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_tipelensa')->textInput() ?>

    <?= $form->field($model, 'input_output')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'modul_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'compression')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SATA_interface')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'network_interface')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'output_support')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indoor_outdoor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'form_factor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'power_supply')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infrared')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
