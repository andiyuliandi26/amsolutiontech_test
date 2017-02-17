<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_merk".
 *
 * @property integer $id_merk
 * @property string $kode
 * @property string $nama
 * @property string $deskripsi
 *
 * @property CctvList[] $cctvLists
 */
class Merk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_merk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama'], 'required'],
            [['kode'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 50],
            [['deskripsi'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_merk' => 'Id Merk',
            'kode' => 'Kode',
            'nama' => 'Merk',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvLists()
    {
        return $this->hasMany(CctvList::className(), ['id_merk' => 'id_merk']);
    }

    /**
     * @inheritdoc
     * @return MerkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MerkQuery(get_called_class());
    }
}
