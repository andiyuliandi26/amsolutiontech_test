<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_jenis".
 *
 * @property integer $id_jenis
 * @property string $kode
 * @property string $nama
 *
 * @property CctvList[] $cctvLists
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'kode' => 'Kode',
            'nama' => 'Jenis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvLists()
    {
        return $this->hasMany(CctvList::className(), ['id_jenis' => 'id_jenis']);
    }

    /**
     * @inheritdoc
     * @return JenisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisQuery(get_called_class());
    }
}
