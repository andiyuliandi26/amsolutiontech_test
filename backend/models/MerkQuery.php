<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Merk]].
 *
 * @see Merk
 */
class MerkQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Merk[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Merk|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
