<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipelensa */

$this->title = 'Update Tipe lensa: ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Tipe lensa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id_tipelensa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipelensa-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
