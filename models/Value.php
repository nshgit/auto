<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%value}}".
 *
 * @property integer $auto_id
 * @property integer $attribute_id
 * @property string $value
 *
 * @property Attribute $attribute
 * @property Auto $auto
 */
class Value extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['auto_id', 'attribute_id', 'value'], 'required'],
            [['auto_id', 'attribute_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['attribute_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attribute::className(), 'targetAttribute' => ['attribute_id' => 'id']],
            [['auto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Auto::className(), 'targetAttribute' => ['auto_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'auto_id' => '',
            'attribute_id' => 'Атрибут',
            'value' => 'Значение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutoAttribute()
    {
        return $this->hasOne(Attribute::className(), ['id' => 'attribute_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(Auto::className(), ['id' => 'auto_id']);
    }
}
