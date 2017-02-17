<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\MaskedInput;
use yii\web\View;
use kartik\form\ActiveForm;
use kartik\widgets\FileInput;
use kartik\widgets\Select2;
use kartik\money\MaskMoney;
use kartik\widgets\SwitchInput;
use kartik\widgets\RangeInput;
use kartik\slider\Slider;
use app\models\Merk;
use app\models\Resolution;
use app\models\Kategori;
use app\models\Jenis;
use app\models\Series;
use app\models\Status;
use app\models\Pengali;
use app\models\Tipelensa;
?>

<div class="cctv-list-form">

    <?php $form = ActiveForm::begin([
					'options'=>['enctype'=>'multipart/form-data']
			]); ?>
    <div class="box box-success">
    	<div class="box-header with-border"><h3 class="box-title"> Basic </h3></div>
        <div class="box-body">
        	<div class="col-md-2">
				<?= $form->field($model, 'id_merk')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Merk::find()->all(),'id_merk','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'id_resolution')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Resolution::find()->all(),'id_resolution','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'id_kategori')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Kategori::find()->all(),'id_kategori','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'id_jenis')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Jenis::find()->all(),'id_jenis','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
            <div class="col-md-2">
                <?= $form->field($model, 'id_series')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Series::find()->all(),'id_series','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
        </div>
    </div>
    <div class="box box-danger">
    	<div class="box-header with-border"><h3 class="box-title"> Detail </h3></div>
        <div class="box-body">
        	<div class="col-md-2">
				<?= $form->field($detail, 'id_tipelensa')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Tipelensa::find()->all(),'id_tipelensa','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
        	<div class="col-md-3">
				<?= $form->field($model, 'fitur')->textInput(['maxlength' => true]) ?>
            </div>
            
            <div class="col-md-7">
                <?= $form->field($model, 'spesifikasi')->textarea(['rows' => 4]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'input_output')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'modul_info')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'compression')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'SATA_interface')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'network_interface')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'output_support')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'indoor_outdoor')->dropDownList([' ','Indoor','Outdoor']) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'form_factor')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'power_supply')->dropDownList([' ','12 volt','24 Volt']) ?>
            </div>
            <div class="col-md-2">
				<?= $form->field($detail, 'infrared')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div>
    <div class="box box-warning">
    	<div class="box-header with-border"><h3 class="box-title"> Harga </h3></div>
        <div class="box-body">
        	<div class="col-md-2">
				<?= $form->field($model, 'harga_dealer')->widget(MaskedInput::classname(),[
								'options'=>['onchange'=>'calculate()'],
								'clientOptions'=>[
									'alias'=> 'decimal',
									'groupSeparator'=> '.',
									'autoGroup'=>true,
								]
						]) ?>
            </div>
            <div class="col-md-3" >
            	<?php $model->arahHitung = 1; ?>
            	<?= $form->field($model, 'arahHitung')->radioButtonGroup([1=>'Dealer -> user',2 => 'User -> Dealer'])
				?>
            </div>
            <div class="col-md-3" >
				<?= $form->field($model, 'pengali')->widget(Slider::classname(),[
									'value'=>20,
									'sliderColor'=>Slider::TYPE_GREY,
									'pluginOptions'=>[
										'min'=>10,
										'max'=>100,
										'step'=>1,
										'tooltip'=>'always'
									],
									'pluginEvents' => [
										'slide' => 'function() { calculate(); }',
										'slideStop' => 'function() { calculate(); }',
									],
								])
				?>
            </div>
            
            <div class="col-md-2">
				<?= $form->field($model, 'harga_enduser')->widget(MaskedInput::classname(),[
								'options'=>['onchange'=>'calculate()'],
								'clientOptions'=>[
									'alias'=> 'decimal',
									'groupSeparator'=> ',',
									'autoGroup'=>true,
								]
						]) ?>
            </div>
        	<div class="col-md-2">
				<?= $form->field($model, 'id_status')->widget(Select2::classname(),[
								'data' => ArrayHelper::map(Status::find()->all(),'id_status','nama'),
								'theme'=>'bootstrap',
							]) ?>
            </div>
            <div class="col-md-7">
				<?= $form->field($detail, 'image')->widget(FileInput::classname(), [
						'pluginOptions' => [
							'initialPreviewConfig'=> [
								[
									'caption'=> 'desert.jpg', 
									'width'=> '120px', 
									'url'=> 'http://localhost/avatar/delete', // server delete action 
									'key'=> 100, 
									'extra'=> ['id'=> '100']
								]
							],
							'initialPreview'=>[
								$detail->picture_web != null ? Yii::$app->homeUrl."uploads/images/".$detail->picture_web : null,
							],
							'initialPreviewAsData'=>true,
							'initialPreviewConfig' => [
								['caption' => $detail->picture],
							],
							'initialPreviewShowDelete'=> true,
							'resizeImages'=>true,
							'overwriteInitial'=>false,
							'showCaption' => false,
							'showRemove' => false,
							'showUpload' => false,
							'browseClass' => 'btn btn-primary btn-block',
							'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
							'browseLabel' =>  'Pilih Gambar',
							'allowedFileExtensions'=>['jpg', 'gif','png'],
						],
						'options' => ['accept' => 'image/*'],
					]); ?>
            </div>
            
            <button id="test" onClick="cek()">test</button>
            
        </div>
    </div>
	
    <div class="col-md-12 form-group box-footer" style="text-align:right;">
        <?= Html::submitButton($model->isNewRecord ? '<span class="fa fa-check"></span> Tambah' : ' <span class="fa fa-check"></span> Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('<span class="fa fa-reply"></span>  Batal', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php
		$this->registerJs(
			"
				
				$('#cctvlist-harga_enduser').prop('readonly',true);
				$('input[name=\"CctvList[arahHitung]\"').on('change',
					function(){
						if($(this).val() == 1){
							$('#cctvlist-harga_enduser').prop('readonly',true);
							$('#cctvlist-harga_dealer').prop('readonly',false);
							calculate();
						}else{
							$('#cctvlist-harga_dealer').prop('readonly',true);
							$('#cctvlist-harga_enduser').prop('readonly',false);
							calculate();
						}
					});
			",
			View::POS_READY
		);
	?>
	<script>
	function hitungHarga(pengali){
		//alert(pengali);
		alert($('#arah_hitung').val());
		var dealer = $('#cctvlist-harga_dealer').val();
		var jumlah = parseFloat(dealer) + ((parseFloat(dealer) * pengali) / 100);
		$('#cctvlist-harga_enduser-disp').val(parseFloat(jumlah) * 100);
	}
	
	function switchs(){
		$('#arah_hitung').val()
	}
	
	function cek(){
		var dealer = $('#cctvlist-harga_dealer').val();
		var dealerDisp = $('#cctvlist-harga_dealer-disp');
		var enduser = $('#cctvlist-harga_enduser').val();
		var enduserDisp = $('#cctvlist-harga_enduser-disp');
		//$('#cctvlist-harga_dealer-disp').prop('disabled',true);
		alert(
			' harga dealer : ' + dealer + '\n Harga Dealer Display : ' + dealerDisp.val() + 
			'\n Harga Enduser : ' + enduser + '\n Harga Enduser Display : ' + enduserDisp.val()
		);
	}
	
	function calculate(){
		var dealer = $('#cctvlist-harga_dealer').val().replace(/[,]/g,"");
		var dealerDisp = $('#cctvlist-harga_dealer-disp');
		var enduser = $('#cctvlist-harga_enduser').val().replace(/[,]/g,"");
		var enduserDisp = $('#cctvlist-harga_enduser-disp');
		var arah = $('input:radio[name="CctvList[arahHitung]"]:checked').val();
		var pengali = $('#cctvlist-pengali').val();
		var result = 0;
		
		//alert(arah);
		switch(arah){
			case "1": 	//alert(dealer);
						
						result = parseFloat(dealer) + ((parseFloat(dealer) * parseFloat(pengali))/100);
						$('#cctvlist-harga_enduser').val(result.toFixed(2));
						console.log ('harga dealer : ' + dealer);
						console.log ('result : ' + result.toFixed(2));
						break;
			case "2": 	result = parseFloat(enduser) - ((parseFloat(enduser) * parseFloat(pengali))/100);
						$('#cctvlist-harga_dealer').val(result.toFixed(2));
						console.log ('harga user : ' + enduser);
						console.log ('result : ' + result.toFixed(2));
						break;
		}
	}
	
	function ubahArah(value){
		alert(value);
	}
</script>
</div>

