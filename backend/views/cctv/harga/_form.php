<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Harga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="harga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_list')->textInput() ?>

    <?= $form->field($model, 'harga_dealer')->textInput() ?>

    <?= $form->field($model, 'id_pengali')->textInput() ?>

    <?= $form->field($model, 'harga_enduser')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
