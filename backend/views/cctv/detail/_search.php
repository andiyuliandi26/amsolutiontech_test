<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detail') ?>

    <?= $form->field($model, 'id_list') ?>

    <?= $form->field($model, 'fitur') ?>

    <?= $form->field($model, 'id_tipelensa') ?>

    <?= $form->field($model, 'input_output') ?>

    <?php // echo $form->field($model, 'modul_info') ?>

    <?php // echo $form->field($model, 'compression') ?>

    <?php // echo $form->field($model, 'SATA_interface') ?>

    <?php // echo $form->field($model, 'network_interface') ?>

    <?php // echo $form->field($model, 'output_support') ?>

    <?php // echo $form->field($model, 'indoor_outdoor') ?>

    <?php // echo $form->field($model, 'form_factor') ?>

    <?php // echo $form->field($model, 'power_supply') ?>

    <?php // echo $form->field($model, 'infrared') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
