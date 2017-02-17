<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cctv_detail".
 *
 * @property integer $id_detail
 * @property integer $id_list
 * @property string $fitur
 * @property integer $id_tipelensa
 * @property string $input_output
 * @property string $modul_info
 * @property string $compression
 * @property string $SATA_interface
 * @property string $network_interface
 * @property string $output_support
 * @property string $indoor_outdoor
 * @property string $form_factor
 * @property string $power_supply
 * @property string $infrared
 * @property string $picture
 *
 * @property CctvList $idList
 * @property CctvTipelensa $idTipelensa
 */
class Detail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cctv_detail';
    }

    /**
     * @inheritdoc
     */
	public $image;
    public function rules()
    {
        return [
            [['id_list', 'id_tipelensa'], 'required'],
            [['id_list', 'id_tipelensa'], 'integer'],
            [['fitur', 'modul_info'], 'string'],
            [['input_output', 'output_support', 'picture', 'picture_web'], 'string', 'max' => 100],
            [['compression', 'SATA_interface', 'network_interface', 'infrared'], 'string', 'max' => 30],
            [['indoor_outdoor'], 'string', 'max' => 7],
            [['form_factor'], 'string', 'max' => 20],
            [['power_supply'], 'string', 'max' => 10],
            [['id_list'], 'exist', 'skipOnError' => true, 'targetClass' => CctvList::className(), 'targetAttribute' => ['id_list' => 'id_list']],
            [['id_tipelensa'], 'exist', 'skipOnError' => true, 'targetClass' => Tipelensa::className(), 'targetAttribute' => ['id_tipelensa' => 'id_tipelensa']],
			[['image'],'safe'],
			[['image'],'file','extensions'=>'jpg, gif, png'],
			[['image'],'file','maxSize'=>'10000000'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_detail' => 'Id Detail',
            'id_list' => 'Id List',
            'fitur' => 'Fitur',
            'id_tipelensa' => 'Id Tipelensa',
            'input_output' => 'Input Output',
            'modul_info' => 'Modul Info',
            'compression' => 'Compression',
            'SATA_interface' => 'Sata Interface',
            'network_interface' => 'Network Interface',
            'output_support' => 'Output Support',
            'indoor_outdoor' => 'Indoor Outdoor',
            'form_factor' => 'Form Factor',
            'power_supply' => 'Power Supply',
            'infrared' => 'Infrared',
            'picture' => 'Picture',
			'image'=> 'Gambar',
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
    public function getIdTipelensa()
    {
        return $this->hasOne(Tipelensa::className(), ['id_tipelensa' => 'id_tipelensa']);
    }

    /**
     * @inheritdoc
     * @return DetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DetailQuery(get_called_class());
    }
}
