<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\detail\DetailView;
use kartik\grid\EditableColumnAction;
use kartik\popover\Popoverx;
use kartik\money\MaskMoney;
use kartik\widgets\AlertBlock;
use kartik\widgets\Alert;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;
use app\models\Merk;
use app\models\Resolution;
use app\models\Kategori;
use app\models\Jenis;
use app\models\Series;
use app\models\Status;
use app\models\Pengali;
use app\models\Tipelensa;
use app\models\CctvList;

$this->title = 'List Perangkat CCTV';
$this->params['breadcrumbs'][] = $this->title;

/*echo Alert::widget([
	//'useSessionFlash' => true,
    'type' => Alert::TYPE_SUCCESS,
    'title' => 'Well done!',
    'icon' => 'glyphicon glyphicon-ok-sign',
    'body' => 'You successfully read this important alert message.',
    'showSeparator' => true,
    'delay' => false
]);*/
?>
<div class="cctv-list-index">
  <div class="box-header">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= Html::a('<span class="fa fa-plus"></span>  Tambah', ['create'], ['class' => 'btn btn-success pull-right']) ?>	
  </div>
    <div class="col-md-12" >
		<?php Pjax::begin([
					'id'=>'data-grid-cctv',
					'timeout'=>false,
					'enablePushState'=>false,
					'clientOptions'=>['method'=>'POST'],
		]); 
		//var_dump(CctvList::getListData('model'));
		?>    
        <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
				'summary'=> false,
				'bordered'=> true,
				'condensed'=>true,
				'striped'=>true,
				'responsive'=>true,
				'hover'=>true,
				'pjax'=>false,
				//'responsive'=>true,
				'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    			'filterRowOptions'=>['class'=>'kartik-sheet-style'],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    ['class' => 'yii\grid\ActionColumn', 'template'=>'{update} {delete}'],
                    [
						'header'=>'Merk',
						'attribute'=> 'id_merk',
						'value'=>function($model){
							return $model->idMerk->nama;
						},
						'filterType'=>GridView::FILTER_SELECT2,
						'filter'=>ArrayHelper::map(Merk::find()->asArray()->all(),'id_merk','nama'),
						'filterWidgetOptions'=>[
							'pluginOptions'=>['allowClear'=>true],							
						],
						'filterInputOptions'=>['placeholder'=>'Merk'],
					],
                    'type',
                    [
						'attribute'=> 'model',
						'format'=>'raw',
						'value'=>function($model, $key, $index, $widget){
							return Html::a($model->model, 
									['cctv/list/view', 'id'=>$model->id_list],
									['title'=>'View author detail', 'class'=>'popup']);
						},
						'filterType'=>GridView::FILTER_TYPEAHEAD,
						'filterWidgetOptions'=>[
							'pluginOptions'=>['highlight'=>true],
							'dataset'=>[
								['local'=>CctvList::getListData('model'),
								'limit'=>10],
							],
						],						
					],
					[
						'header'=>'Kategori',
						'attribute'=> 'id_kategori',
						'value'=>function($model){
							return $model->idKategori->nama;
						},
						'filterType'=>GridView::FILTER_SELECT2,
						'filter'=>ArrayHelper::map(Kategori::find()->asArray()->all(),'id_kategori','nama'),
						'filterWidgetOptions'=>[
							'pluginOptions'=>['allowClear'=>true],							
						],
						'filterInputOptions'=>['placeholder'=>'Kategori'],
					],
                    [
						'header'=>'Jenis',
						'attribute'=> 'id_jenis',
						'value'=>function($model){
							return $model->idJenis->nama;
						},
						'filterType'=>GridView::FILTER_SELECT2,
						'filter'=>ArrayHelper::map(Jenis::find()->asArray()->all(),'id_jenis','nama'),
						'filterWidgetOptions'=>[
							'pluginOptions'=>['allowClear'=>true],							
						],
						'filterInputOptions'=>['placeholder'=>'Jenis'],
					],
					[
						'header'=>'Series',
						'attribute'=> 'id_series',
						'value'=>function($model){
							return $model->idSeries->nama;
						},
						'filterType'=>GridView::FILTER_SELECT2,
						'filter'=>ArrayHelper::map(Series::find()->asArray()->all(),'id_series','nama'),
						'filterWidgetOptions'=>[
							'pluginOptions'=>['allowClear'=>true],							
						],
						'filterInputOptions'=>['placeholder'=>'Series'],
					],
					[
						'header'=>'Resolution',
						'attribute'=> 'id_resolution',
						'value'=>function($model){
							return $model->idResolution->nama;
						},
						'filterType'=>GridView::FILTER_SELECT2,
						'filter'=>ArrayHelper::map(Resolution::find()->asArray()->all(),'id_resolution','nama'),
						'filterWidgetOptions'=>[
							'pluginOptions'=>['allowClear'=>true],							
						],
						'filterInputOptions'=>['placeholder'=>'Resolution'],
					],
					[	
						'class'=>'kartik\grid\EditableColumn',
						'attribute'=>'harga_dealer',
						'format'=>['decimal',0],
						'editableOptions'=>[
							'pjaxContainerId'=>'data-grid-cctv',
							'header'=>'Harga Dealer',
							'inputType'=>\kartik\editable\Editable::INPUT_MONEY,
							'formOptions'=>['action'=>['/cctv/list/updateharga']],
							/*'pluginEvents'=>[
								'editableSuccess'=>'function(data){
										$.pjax.reload({container: "#data-grid-cctv"});
									}'
							]*/
						],
						'hAlign'=>'left',
						'vAlign'=>'middle',
						'width'=>'100px',
						'pageSummary'=>true						
					],
					[	
						'class'=>'kartik\grid\EditableColumn',
						'attribute'=>'harga_enduser',
						'format'=>['decimal',0],
						'editableOptions'=>[
							'pjaxContainerId'=>'data-grid-cctv',
							'header'=>'Harga Enduser',
							'inputType'=>\kartik\editable\Editable::INPUT_MONEY,
							'formOptions'=>['action'=>['/cctv/list/updateharga']],
							/*'pluginEvents'=>[
								'editableSuccess'=>'function(data){
										$.pjax.reload({container: "#data-grid-cctv"});
									}'
							]*/
						],
						'hAlign'=>'left',
						'vAlign'=>'middle',
						'width'=>'100px',
						'pageSummary'=>true						
					],
					[
						'class'=>'kartik\grid\EditableColumn',
						'attribute'=>'id_status',
						'value'=>function($model){
								return $model->idStatus->nama;
							},
						'filterType'=>GridView::FILTER_SELECT2,
						'filter'=>ArrayHelper::map(Status::find()->asArray()->all(),'id_status','nama'),
						'filterWidgetOptions'=>[
							'pluginOptions'=>['allowClear'=>true],	
							//'size'=>'sm',	
							'theme'=>'bootstrap',					
						],
						'filterInputOptions'=>['placeholder'=>'Status'],						
						'editableOptions'=>[
							'pjaxContainerId'=>'data-grid-cctv',
							'header'=>'Status',
							'inputType'=>\kartik\editable\Editable::INPUT_DROPDOWN_LIST,
							'data'=>ArrayHelper::map(Status::find()->asArray()->all(),'id_status','nama'),
							'formOptions'=>['action'=>['/cctv/list/updatestatus']],
							//'options'=>['id'=>'statusEdit',],
							/*'pluginEvents'=>[
								'editableSuccess'=>'function(data){
										$.pjax.reload({container: "#data-grid-cctv"});
									}'
							]*/
						],
						'hAlign'=>'left',
						'vAlign'=>'middle',
						'width'=>'100px',
						'pageSummary'=>true
					],
					[	
						'header'=>'Update Teakhir',
						'attribute'=>'last_update',
						'format'=>'datetime',				
					],
                ],
            ]); ?>
            
        <?php Pjax::end(); ?>
         <?php
					Modal::begin([
						'id'=>'modals',
						'size'=>Modal::SIZE_LARGE,
						'header' => '<h4 class="modal-title">Detail</h4>',
						'options' => ['tabindex' => false]
					]);
					//echo DetailView::widget($setting); // refer the demo page for widget settings
					Modal::end();	
					
			$this->registerJs(
				"$(function(){
					$('.popup').click(function(e){
						e.preventDefault();						
						$('#modals').modal('show').find('.modal-body').load($(this).attr('href'));
						
					});	
				});"
			);	
				?>
       
        
	</div>
</div>
