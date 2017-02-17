<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_series".
 *
 * @property integer $id_series
 * @property string $kode
 * @property string $nama
 *
 * @property CctvList[] $cctvLists
 */
class Series extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_series';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['kode'], 'string', 'max' => 15],
            [['nama'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_series' => 'Id Series',
            'kode' => 'Kode',
            'nama' => 'Series',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvLists()
    {
        return $this->hasMany(CctvList::className(), ['id_series' => 'id_series']);
    }

    /**
     * @inheritdoc
     * @return SeriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SeriesQuery(get_called_class());
    }
}
