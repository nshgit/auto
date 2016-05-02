<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Auto]].
 *
 * @see \app\models\Auto
 */
class AutoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Auto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Auto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
