<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Pengali]].
 *
 * @see Pengali
 */
class PengaliQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Pengali[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Pengali|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
