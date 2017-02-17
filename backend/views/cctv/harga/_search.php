<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HargaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="harga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_harga') ?>

    <?= $form->field($model, 'id_list') ?>

    <?= $form->field($model, 'harga_dealer') ?>

    <?= $form->field($model, 'id_pengali') ?>

    <?= $form->field($model, 'harga_enduser') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
