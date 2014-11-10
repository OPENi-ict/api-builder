<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objects;

/**
 * ObjectsSearch represents the model behind the search form about `app\models\Objects`.
 */
class ObjectsSearch extends Objects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'api', 'inherited', 'fields', 'author', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'privacy', 'methods'], 'safe'],
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
        $query = Objects::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'api' => $this->api,
            'inherited' => $this->inherited,
            'fields' => $this->fields,
            'author' => $this->author,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'privacy', $this->privacy])
            ->andFilterWhere(['like', 'methods', $this->methods]);

        return $dataProvider;
    }
}
