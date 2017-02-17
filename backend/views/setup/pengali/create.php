<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pengali */

$this->title = 'Tambah Pengali';
$this->params['breadcrumbs'][] = ['label' => 'Pengali', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengali-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
