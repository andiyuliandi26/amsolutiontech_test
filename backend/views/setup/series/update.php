<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Series */

$this->title = 'Update Series: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->id_series]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="series-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
