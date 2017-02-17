<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Merk */

$this->title = 'Tambah Merk';
$this->params['breadcrumbs'][] = ['label' => 'Merk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merk-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
