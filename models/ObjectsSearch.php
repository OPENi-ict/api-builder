<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

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
            [['id', 'api', 'inherited', 'created_by', 'updated_by', 'created_at', 'updated_at', 'votes_up', 'votes_down', 'proposed'], 'integer'],
            [['name', 'description', 'privacy', 'methods', 'schema_org'], 'safe'],
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
		$query->joinWith(['createdBy']);

		$query->where(['or', ['privacy' => 'public'], ['privacy' => 'protected'], ['privacy' => 'private', 'created_by' => Yii::$app->getUser()->id]]);

		$query->where(['not in', 'name', ['Addressmodel', 'Timemodel', 'Durationmodel', 'Frommodel', 'Locationmodel', 'Sizemodel', 'Tagsmodel', 'Applicationmodel', 'Basefilemodel', 'Organizationmodel', 'Personmodel', 'Placemodel', 'Productmodel', 'Servicemodel', 'Cartproductlist', 'Cartservicelist', 'Cart_target_id', 'Orderproductlist', 'Orderservicelist', 'Registeredapplication_user']]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

		$dataProvider->sort->attributes['createdBy.username'] = [
			'asc' => ['user.username' => SORT_ASC],
			'desc' => ['user.username' => SORT_DESC],
		];

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'api' => $this->api,
            'inherited' => $this->inherited,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
			'votes_up' => $this->votes_up,
			'votes_down' => $this->votes_down,
			'proposed' => $this->proposed
		]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'privacy', $this->privacy])
            ->andFilterWhere(['like', 'methods', $this->methods])
			->andFilterWhere(['like', 'schema_org', $this->schema_org]);

        return $dataProvider;
    }
}
