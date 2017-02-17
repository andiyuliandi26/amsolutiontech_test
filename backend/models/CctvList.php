<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_list".
 *
 * @property integer $id_list
 * @property integer $id_kategori
 * @property integer $id_merk
 * @property integer $id_series
 * @property integer $id_resolution
 * @property integer $id_jenis
 * @property string $type
 * @property string $model
 * @property string $fitur
 * @property string $spesifikasi
 * @property string $last_update
 * @property integer $id_status
 *
 * @property CctvDetail[] $cctvDetails
 * @property CctvHarga[] $cctvHargas
 * @property CctvKategori $idKategori
 * @property CctvMerk $idMerk
 * @property CctvSeries $idSeries
 * @property CctvResolution $idResolution
 * @property CctvJenis $idJenis
 * @property CctvStatus $idStatus
 */
class CctvList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_list';
    }

    /**
     * @inheritdoc
     */
	public $arahHitung;
    public function rules()
    {
        return [
            [['id_kategori', 'id_merk', 'id_jenis', 'type', 'model', 'id_status', 'harga_dealer', 'pengali', 'harga_enduser',], 'required'],
            [['id_kategori', 'id_merk', 'id_series', 'id_resolution', 'id_jenis', 'id_status'], 'integer'],
            [['spesifikasi'], 'string'],
            [['last_update', 'harga_dealer_sebelum', 'harga_enduser_sebelum',], 'safe'],
            [['type'], 'string', 'max' => 15],
            [['model'], 'string', 'max' => 30],
            [['fitur'], 'string', 'max' => 100],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
            [['id_merk'], 'exist', 'skipOnError' => true, 'targetClass' => Merk::className(), 'targetAttribute' => ['id_merk' => 'id_merk']],
            [['id_series'], 'exist', 'skipOnError' => true, 'targetClass' => Series::className(), 'targetAttribute' => ['id_series' => 'id_series']],
            [['id_resolution'], 'exist', 'skipOnError' => true, 'targetClass' => Resolution::className(), 'targetAttribute' => ['id_resolution' => 'id_resolution']],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['id_jenis' => 'id_jenis']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['id_status' => 'id_status']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_list' => 'Id List',
            'id_kategori' => 'Kategori',
            'id_merk' => 'Merk',
            'id_series' => 'Series',
            'id_resolution' => 'Resolution',
            'id_jenis' => 'Jenis',
            'type' => 'Type',
            'model' => 'Model',
            'fitur' => 'Fitur',
            'spesifikasi' => 'Spesifikasi',
			'harga_dealer' => 'Harga Dealer',
			'harga_dealer_sebelum' => 'Harga Dealer Sebelumnya',
            'pengali' => 'Pengali %',
            'harga_enduser' => 'Harga Enduser',
			'harga_enduser_sebelum' => 'Harga Enduser Sebelumnya',
            'last_update' => 'Last Update',
            'id_status' => 'Status',
			'arahHitung' => 'Arah Perhitungan <- ->',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetail()
    {
        return $this->hasOne(Detail::className(), ['id_list' => 'id_list']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKategori()
    {
        return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMerk()
    {
        return $this->hasOne(Merk::className(), ['id_merk' => 'id_merk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSeries()
    {
        return $this->hasOne(Series::className(), ['id_series' => 'id_series']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdResolution()
    {
        return $this->hasOne(Resolution::className(), ['id_resolution' => 'id_resolution']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJenis()
    {
        return $this->hasOne(Jenis::className(), ['id_jenis' => 'id_jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStatus()
    {
        return $this->hasOne(Status::className(), ['id_status' => 'id_status']);
    }

    /**
     * @inheritdoc
     * @return CctvListQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CctvListQuery(get_called_class());
    }
	
	public function getListData($field){
		$data=[];
		$getData=CctvList::find()->all();
		foreach($getData as $getData){
			$data[]=$getData->$field;
		}
		return $data;
	}
}
