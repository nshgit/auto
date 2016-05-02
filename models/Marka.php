<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%marka}}".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Auto[] $autos
 */
class Marka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%marka}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название марки',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutos()
    {
        return $this->hasMany(Auto::className(), ['marka_id' => 'id']);
    }
}
