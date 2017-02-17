<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CctvList */

$this->title = 'Update Cctv List: ' . $model->id_list;
$this->params['breadcrumbs'][] = ['label' => 'Cctv Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_list, 'url' => ['view', 'id' => $model->id_list]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cctv-list-update">
    <?= $this->render('_form', [
        'model' => $model,
		'detail' => $detail,
    ]) ?>

</div>
