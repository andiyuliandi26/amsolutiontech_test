<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipelensa */

$this->title = 'Tambah Tipelensa';
$this->params['breadcrumbs'][] = ['label' => 'Tipelensas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipelensa-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
