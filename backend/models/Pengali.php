<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_pengali".
 *
 * @property integer $id_pengali
 * @property integer $pengali
 *
 * @property CctvHarga[] $cctvHargas
 */
class Pengali extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_pengali';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pengali'], 'required'],
            [['pengali'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pengali' => 'Id Pengali',
            'pengali' => 'Pengali',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvLists()
    {
        return $this->hasMany(CctvList::className(), ['id_pengali' => 'id_pengali']);
    }

    /**
     * @inheritdoc
     * @return PengaliQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PengaliQuery(get_called_class());
    }
}
