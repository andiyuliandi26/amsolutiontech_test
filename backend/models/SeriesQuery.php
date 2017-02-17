<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Series]].
 *
 * @see Series
 */
class SeriesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Series[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Series|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
