<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Resolution */

$this->title = 'Tambah Resolution';
$this->params['breadcrumbs'][] = ['label' => 'Resolution', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resolution-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
