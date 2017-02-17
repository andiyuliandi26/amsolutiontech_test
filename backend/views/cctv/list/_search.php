<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CctvListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cctv-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_list') ?>

    <?= $form->field($model, 'id_kategori') ?>

    <?= $form->field($model, 'id_merk') ?>

    <?= $form->field($model, 'id_series') ?>

    <?= $form->field($model, 'id_resolution') ?>

    <?php // echo $form->field($model, 'id_jenis') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'fitur') ?>

    <?php // echo $form->field($model, 'spesifikasi') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'id_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
