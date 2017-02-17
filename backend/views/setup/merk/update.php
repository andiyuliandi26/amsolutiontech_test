<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Merk */

$this->title = 'Update Merk: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Merk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->id_merk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="merk-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
