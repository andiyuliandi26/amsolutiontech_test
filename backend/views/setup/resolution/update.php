<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resolution */

$this->title = 'Update Resolution: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Resolution', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->id_resolution]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resolution-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
