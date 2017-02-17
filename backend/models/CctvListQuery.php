<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CctvList]].
 *
 * @see CctvList
 */
class CctvListQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CctvList[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CctvList|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
