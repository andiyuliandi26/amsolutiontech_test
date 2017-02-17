<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CctvList */

$this->title = 'Tambah Data CCTV';
$this->params['breadcrumbs'][] = ['label' => 'List Perangkat CCTV', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cctv-list-create">
    <?= $this->render('_form', [
        'model' => $model,
		'detail' => $detail,
    ]) ?>

</div>
