<?php

namespace app\models\admin\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Value;

/**
 * ValuesSearch represents the model behind the search form about `app\models\Value`.
 */
class ValuesSearch extends Value
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['auto_id', 'attribute_id'], 'integer'],
            [['value'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Value::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'auto_id' => $this->auto_id,
            'attribute_id' => $this->attribute_id,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
