<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-form col-md-8">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-4">
    	<?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-4">
    	<?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-8 form-group box-footer" style="text-align:right;">
        <?= Html::submitButton($model->isNewRecord ? '<span class="fa fa-check"></span> Tambah' : ' <span class="fa fa-check"></span> Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('<span class="fa fa-reply"></span>  Batal', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
