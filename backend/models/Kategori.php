<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_kategori".
 *
 * @property integer $id_ketegori
 * @property string $kode
 * @property string $nama
 *
 * @property CctvList[] $cctvLists
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_kategori';
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
            'id_kategori' => 'Kategori',
            'kode' => 'Kode',
            'nama' => 'Kategori',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvLists()
    {
        return $this->hasMany(CctvList::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @inheritdoc
     * @return KategoriQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KategoriQuery(get_called_class());
    }
}
