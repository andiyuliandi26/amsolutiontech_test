<?php

use yii\helpers\Html;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CctvList */

$this->title = $model->id_list;
$this->params['breadcrumbs'][] = ['label' => 'Cctv Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cctv-list-view">
<?php
	$attribute = [
		[
			'group'=>true,
			'label'=>'SECTION 1: Device Info',
			'rowOptions'=>['class'=>'warning']
    	],
		[
			'columns' => [
				[
					'attribute'=>'id_jenis',
					'label'=>'Jenis',
					'value'=>$model->idJenis->nama,
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:10%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
				[
					'attribute'=>'type',
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:10%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
				[
					'attribute'=>'model',
					'labelColOptions'=>['style'=>'width:10%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'], 
					'displayOnly'=>true
				],
				
			],
		],
		[
			'group'=>true,
			'label'=>'SECTION 2: Spesifikasi Detail',
			'rowOptions'=>['class'=>'warning']
    	],
		[
			'columns' => [
				[
					'attribute'=>'spesifikasi',
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:17%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:83%;text-align:left;'],
				],
			],
		],
		[
			'columns' => [
				[
					'attribute'=>'detail',
					'label'=>'Fitur Tambahan',
					'value'=>$model->detail->fitur,
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
				[
					'attribute'=>'detail',
					'label'=>'Input/Output',
					'value'=>$model->detail->input_output,
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
				[
					'attribute'=>'detail',
					'label'=>'Tipe Lensa',
					'value'=>$model->detail->idTipelensa->nama,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
					'displayOnly'=>true
				],
			],
		],
		[
			'columns' => [
				[
					'attribute'=>'detail',
					'label'=>'Modul Info',
					'value'=>$model->detail->modul_info,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
					'displayOnly'=>true
				],
				[
					'attribute'=>'detail',
					'label'=>'Compression',
					'value'=>$model->detail->compression,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'], 
					'displayOnly'=>true
				],
				[
					'attribute'=>'detail',
					'label'=>'SATA Interface',
					'value'=>$model->detail->SATA_interface,
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
			],
		],
		[
			'columns' => [
				
				[
					'attribute'=>'detail',
					'label'=>'Network Interface',
					'value'=>$model->detail->network_interface,
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
				[
					'attribute'=>'detail',
					'label'=>'Output Support',
					'value'=>$model->detail->output_support,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
					'displayOnly'=>true
				],
				[
					'attribute'=>'detail',
					'label'=>'Indoor / Outdoor',
					'value'=>$model->detail->indoor_outdoor,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
					'displayOnly'=>true
				],
			],
		],
		[
			'columns' => [
				
				[
					'attribute'=>'detail',
					'label'=>'Poser Supply',
					'value'=>$model->detail->power_supply,
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
				],
				[
					'attribute'=>'detail',
					'label'=>'Infrared',
					'value'=>$model->detail->infrared,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
					'displayOnly'=>true
				],
				[
					'attribute'=>'detail',
					'label'=>'Form Factor',
					'value'=>$model->detail->form_factor,
					'labelColOptions'=>['style'=>'width:15%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:15%;text-align:left;'],
					'displayOnly'=>true
				],
			],
		],
		[
			'group'=>true,
			'label'=>'SECTION 3: Harga (Update terakhir : '. Yii::$app->formatter->asDateTime($model->last_update) .')',
			'rowOptions'=>['class'=>'success']
    	],
		[
			'columns' => [
				[
					'attribute'=>'harga_dealer',
					'format'=>'currency',
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:20%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:30%;text-align:left;font-weight:bold;'],
				],
				[
					'attribute'=>'harga_enduser',
					'format'=>'currency',
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:25%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:25%;text-align:left;font-weight:bold;'],
				],
				
			],
			'rowOptions'=>['class'=>'success']
		],
		[
			'columns'=>[
				[
					'attribute'=>'harga_dealer_sebelum',
					'format'=>'currency',
					'labelColOptions'=>['style'=>'width:20%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:30%;text-align:left;color:white;'],
					'displayOnly'=>true
				],
				[
					'attribute'=>'harga_enduser_sebelum',
					'format'=>'currency',
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:25%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:25%;text-align:left;color:white;'],
				],
			],
			'rowOptions'=>['class'=>'danger']
		],
		[
			'columns'=>[
				[
					'attribute'=>'harga_dealer_sebelum',
					'label'=>'Selisih',
					'value'=>$model->harga_dealer - $model->harga_dealer_sebelum,
					'format'=>'currency',
					'labelColOptions'=>['style'=>'width:20%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:30%;text-align:left;;color:white;'],
					'displayOnly'=>true
				],
				[
					'attribute'=>'harga_enduser_sebelum',
					'label'=>'Selisih',
					'value'=>$model->harga_enduser - $model->harga_enduser_sebelum,
					'format'=>'currency',
					'displayOnly'=>true,
					'labelColOptions'=>['style'=>'width:25%;text-align:right;'],
					'valueColOptions'=>['style'=>'width:25%;text-align:left;color:white;'],
				],
			],
			'rowOptions'=>['class'=>'danger']
		],
	];
?>

    <?= DetailView::widget([
        'model' => $model,
		'condensed'=>true,
		'hover'=>true,
		'mode'=>DetailView::MODE_VIEW,
		'panel'=>[
			'heading'=>$model->idKategori->nama.' ' . $model->idMerk->nama. ' - '.$model->model,
			'type'=>DetailView::TYPE_INFO,
			'headingOptions'=>[
				'template'=>'{title}',
				'tag'=>'h2',
			]
		],
        'attributes' => $attribute,
    ]) ?>

</div>
