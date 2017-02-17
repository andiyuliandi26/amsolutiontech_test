<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Resolution */

$this->title = $model->id_resolution;
$this->params['breadcrumbs'][] = ['label' => 'Resolutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resolution-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_resolution], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_resolution], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_resolution',
            'kode',
            'nama',
            'deskripsi',
        ],
    ]) ?>

</div>
