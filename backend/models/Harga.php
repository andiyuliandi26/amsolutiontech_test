<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_harga".
 *
 * @property integer $id_harga
 * @property integer $id_list
 * @property double $harga_dealer
 * @property integer $id_pengali
 * @property double $harga_enduser
 * @property string $last_update
 *
 * @property CctvList $idList
 * @property CctvPengali $idPengali
 */
class Harga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_harga';
    }

    /**
     * @inheritdoc
     */
	public $hargaDealer;
    public function rules()
    {
        return [
            [['id_list', 'harga_dealer', 'id_pengali', 'harga_enduser', 'last_update'], 'required'],
            [['id_list', 'id_pengali'], 'integer'],
            [['harga_dealer', 'harga_enduser'], 'number'],
            [['last_update','hargaDealer'], 'safe'],
            [['id_list'], 'exist', 'skipOnError' => true, 'targetClass' => CctvList::className(), 'targetAttribute' => ['id_list' => 'id_list']],
            [['id_pengali'], 'exist', 'skipOnError' => true, 'targetClass' => Pengali::className(), 'targetAttribute' => ['id_pengali' => 'id_pengali']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_harga' => 'Id Harga',
            'id_list' => 'Id List',
            'harga_dealer' => 'Harga Dealer',
            'id_pengali' => 'Id Pengali',
            'harga_enduser' => 'Harga Enduser',
            'last_update' => 'Last Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdList()
    {
        return $this->hasOne(CctvList::className(), ['id_list' => 'id_list']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPengali()
    {
        return $this->hasOne(CctvPengali::className(), ['id_pengali' => 'id_pengali']);
    }

    /**
     * @inheritdoc
     * @return HargaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HargaQuery(get_called_class());
    }
}
