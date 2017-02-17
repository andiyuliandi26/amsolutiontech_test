<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tipelensa */

$this->title = $model->id_tipelensa;
$this->params['breadcrumbs'][] = ['label' => 'Tipelensas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipelensa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tipelensa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tipelensa], [
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
            'id_tipelensa',
            'nama',
            'deskripsi',
        ],
    ]) ?>

</div>
