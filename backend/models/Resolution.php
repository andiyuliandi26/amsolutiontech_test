<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_resolution".
 *
 * @property integer $id_resolution
 * @property string $kode
 * @property string $nama
 * @property string $deskripsi
 *
 * @property CctvList[] $cctvLists
 */
class Resolution extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_resolution';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'deskripsi'], 'required'],
            [['kode'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 30],
            [['deskripsi'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_resolution' => 'Id Resolution',
            'kode' => 'Kode',
            'nama' => 'Resolution',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvLists()
    {
        return $this->hasMany(CctvList::className(), ['id_resolution' => 'id_resolution']);
    }

    /**
     * @inheritdoc
     * @return ResolutionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ResolutionQuery(get_called_class());
    }
}
