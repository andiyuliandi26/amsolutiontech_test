<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Series */

$this->title = 'Tambah Series';
$this->params['breadcrumbs'][] = ['label' => 'Series', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="series-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
