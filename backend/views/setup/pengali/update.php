<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengali */

$this->title = 'Update Pengali: ' . $model->pengali;
$this->params['breadcrumbs'][] = ['label' => 'Pengalis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pengali, 'url' => ['view', 'id' => $model->id_pengali]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengali-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
