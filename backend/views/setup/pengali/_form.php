<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengali */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-form col-md-3">

    <?php $form = ActiveForm::begin(); ?>
	<div class="col-md-12">
    	<?= $form->field($model, 'pengali')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12 form-group box-footer" style="text-align:right;">
        <?= Html::submitButton($model->isNewRecord ? '<span class="fa fa-check"></span> Tambah' : ' <span class="fa fa-check"></span> Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('<span class="fa fa-reply"></span>  Batal', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

