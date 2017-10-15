<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Type;

/**
 * TypeSearch represents the model behind the search form about `app\models\Type`.
 */
class TypeSearch extends Type
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['type', 'name', 'cell', 'route', 'tpl_v1', 'tpl_v2'], 'safe'],
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
        $query = Type::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'name', $this->name])
             ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'cell', $this->cell])
            ->andFilterWhere(['like', 'route', $this->route])
        ->andFilterWhere(['like', 'tpl_v1', $this->tpl_v1])
        ->andFilterWhere(['like', 'tpl_v2', $this->tpl_v2]);

        return $dataProvider;
    }
}
