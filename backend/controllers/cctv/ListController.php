<?php

namespace backend\controllers\cctv;

use Yii;
use app\models\CctvList;
use app\models\CctvListSearch;
use app\models\Detail;
use app\models\DetailSearch;
use app\models\Harga;
use app\models\HargaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class ListController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new CctvListSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->post()); // search item by POST method
		
		//Yii::$app->getSession()->setFlash(/*  */'danger','test');
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
		
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new CctvList();
		$detail =  new Detail();
		
        if ($model->load(Yii::$app->request->post())) {
			$image = UploadedFile::getInstance($detail, 'image');
			if(!is_null($image)){
				$ext = end((explode(".",$image->name)));
				$detail->picture = $model->model;
				$detail->picture_web = Yii::$app->security->generateRandomString().".{$ext}";
				
				Yii::$app->params['uploadPath'] = Yii::$app->basePath.'/web/uploads/images/';
				$path = Yii::$app->params['uploadPath']. $detail->picture_web;
				
				$image->saveAS($path);	
				Yii::$app->getSession()->setFlash('success', [
							 'type' => 'success',
							 'duration' => 2000,
							 'icon' => 'fa fa-users',
							 'message' => 'Image : '.$path,
							 'title' => 'Upload Gambar Berhasil',
							 'positonY' => 'top',
							 'positonX' => 'right'
						 ]);
			}else{
				Yii::$app->getSession()->setFlash('danger', [
							 'type' => 'danger',
							 'duration' => 2000,
							 'icon' => 'fa fa-users',
							 'message' => 'Image : ',
							 'title' => 'Upload Gambar Gagal',
							 'positonY' => 'top',
							 'positonX' => 'right'
						 ]);
			}
            if($model->save()){
				if($detail->load(Yii::$app->request->post())){
					$detail->id_list = $model->id_list;	
					$detail->picture = $model->model;								
					if($detail->save()){
						Yii::$app->getSession()->setFlash('success', [
							 'type' => 'success',
							 'duration' => 2000,
							 'icon' => 'fa fa-users',
							 'message' => 'Tambah Data Berhasil',
							 //'title' => 'Tambah Data Berhasil',
							 'positonY' => 'top',
							 'positonX' => 'right'
						 ]);
						return $this->redirect(['index']);
					}
				}					
			}
        } else {
            return $this->render('create', [
                'model' => $model,
				'detail' => $detail,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$detail =  Detail::find()->where(['id_list'=>$model->id_list])->one();
		$model->harga_dealer_sebelum = $model->harga_dealer;
		$model->harga_enduser_sebelum = $model->harga_enduser;
		
        if ($model->load(Yii::$app->request->post())) {
			$image = UploadedFile::getInstance($detail, 'image');
			if(!is_null($image)){
				$ext = end((explode(".",$image->name)));
				$detail->picture = $model->model;
				$detail->picture_web = Yii::$app->security->generateRandomString().".{$ext}";
				
				Yii::$app->params['uploadPath'] = Yii::$app->basePath.'/web/uploads/images/';
				$path = Yii::$app->params['uploadPath']. $detail->picture_web;
				
				$image->saveAS($path);	
				Yii::$app->getSession()->setFlash('success', [
							 'type' => 'success',
							 'duration' => 2000,
							 'icon' => 'fa fa-users',
							 'message' => 'Image : '.$path,
							 'title' => 'Upload Gambar Berhasil',
							 'positonY' => 'top',
							 'positonX' => 'right'
						 ]);
			}
			
			if($model->save()){
				if($detail->load(Yii::$app->request->post())){	
					
					if($detail->save()){
						Yii::$app->getSession()->setFlash('success', [
							 'type' => 'success',
							 'duration' => 2000,
							 'icon' => 'fa fa-users',
							 'message' => 'Update data berhasil',
							 'title' => 'Update',
							 'positonY' => 'top',
							 'positonX' => 'right'
						 ]);
						return $this->redirect(['index']);
					}
				}					
			}
            
        } else {
            return $this->render('update', [
                'model' => $model,
				'detail' => $detail,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = CctvList::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	public function actionUpdatestatus() {
		
		if (isset($_POST['hasEditable'])) {
			// use Yii's response format to encode output as JSON
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			
			$model = $this->findModel($_POST['editableKey']);
			$attrib = current($_POST['CctvList']);
			
			if ($model->load(Yii::$app->request->post())) {
				// read or convert your posted information
				$model->id_status = $attrib['id_status'];
				$value = $model->idStatus->nama;
				if($model->save()){
					return ['output'=>$value, 'message'=>''];
				}else{
					return ['output'=>'', 'message'=>'Validation error'];
				}
			}
			// else if nothing to do always return an empty JSON encoded output
			else {
				return ['output'=>'', 'message'=>''];
			}
		}
	}
	
	public function actionUpdateharga() {
		
		if (isset($_POST['hasEditable'])) {
			// use Yii's response format to encode output as JSON
			\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
			
			$model = $this->findModel($_POST['editableKey']);
			$editableAttribute = $_POST['editableAttribute'];
			$editableAttribute2 = $editableAttribute.'_sebelum';
			$attrib = current($_POST['CctvList']);
			
			if ($model->load(Yii::$app->request->post())) {
				// read or convert your posted information
				$model->$editableAttribute2 = $model->$editableAttribute;
				$model->$editableAttribute = $attrib[$editableAttribute];
				
				$value = $model->$editableAttribute;
				if($model->save()){	
					return ['output'=>Yii::$app->formatter->asDecimal($value,0), 'message'=>''];
				}else{
					return ['output'=>'', 'message'=>'Validation error'];
				}
			}
			// else if nothing to do always return an empty JSON encoded output
			else {
				return ['output'=>'', 'message'=>'empty'];
			}
		}
	}
}
