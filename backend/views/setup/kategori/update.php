<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kategori */

$this->title = 'Update Kategori: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->id_ketegori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
