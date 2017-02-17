<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\JenisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Setup Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-6">
    <div class="box-header with-border">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= Html::a('<span class="fa fa-plus"></span>  Tambah', ['create'], ['class' => 'btn btn-success pull-right']) ?>	
    </div>

    <div class="box-body">
        <?php Pjax::begin(); ?>    
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'summary'=>false,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    ['class' => 'yii\grid\ActionColumn'],
                    'kode',
                    'nama',  
                ],
            ]); ?>
        <?php Pjax::end(); ?>
    </div>
</div>
