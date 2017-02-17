<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_tipelensa".
 *
 * @property integer $id_tipelensa
 * @property string $nama
 * @property string $deskripsi
 *
 * @property CctvDetail[] $cctvDetails
 */
class Tipelensa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_tipelensa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi'], 'required'],
            [['nama'], 'string', 'max' => 20],
            [['deskripsi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipelensa' => 'Id Tipelensa',
            'nama' => 'Tipe Lensa',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCctvDetails()
    {
        return $this->hasMany(CctvDetail::className(), ['id_tipelensa' => 'id_tipelensa']);
    }

    /**
     * @inheritdoc
     * @return TipelensaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TipelensaQuery(get_called_class());
    }
}
