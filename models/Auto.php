<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%auto}}".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $marka_id
 * @property string $name
 * @property string $content
 * @property string $date
 *
 * @property Marka $marka
 * @property Category $category
 * @property Value[] $values
 * @property Attribute[] $attributes
 */
class Auto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auto}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'marka_id'], 'integer'],
            [['name', 'date'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['marka_id'], 'exist', 'skipOnError' => true, 'targetClass' => Marka::className(), 'targetAttribute' => ['marka_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'marka_id' => 'Марка',
            'name' => 'Модель',
            'content' => 'Описание',
            'date' => 'Дата выпуска',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMarka()
    {
        return $this->hasOne(Marka::className(), ['id' => 'marka_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValues()
    {
        return $this->hasMany(Value::className(), ['auto_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutoAttributes()
    {
        return $this->hasMany(Attribute::className(), ['id' => 'attribute_id'])->viaTable('{{%value}}', ['auto_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\query\AutoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\AutoQuery(get_called_class());
    }
}
