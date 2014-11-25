<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ApisSearch represents the model behind the search form about `app\models\Apis`.
 */
class ApisSearch extends Apis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by', 'votes_up', 'votes_down', 'created_at', 'updated_at'], 'integer'],
            [['name', 'description', 'version'], 'safe'],
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
        $query = Apis::find();
//			->joinWith(['createdBy' => function($query) { $query->from(['user' => 'user']);}])
//			->joinWith(['updatedBy' => function($query) { $query->from(['user' => 'user']);}]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

//		$dataProvider->sort->attributes['createdBy.username'] = [
//			'asc' => ['createdBy.username' => SORT_ASC],
//			'desc' => ['createdBy.username' => SORT_DESC],
//		];
//
//		$dataProvider->sort->attributes['updatedBy.username'] = [
//			'asc' => ['updatedBy.username' => SORT_ASC],
//			'desc' => ['updatedBy.username' => SORT_DESC],
//		];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
			'votes_up' => $this->votes_up,
			'votes_down' => $this->votes_down,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'version', $this->version]);

        return $dataProvider;
    }
}
