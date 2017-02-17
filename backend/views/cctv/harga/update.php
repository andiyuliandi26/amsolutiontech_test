<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Harga */

$this->title = 'Update Harga: ' . $model->id_harga;
$this->params['breadcrumbs'][] = ['label' => 'Hargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_harga, 'url' => ['view', 'id' => $model->id_harga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="harga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
