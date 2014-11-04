<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resources;

/**
 * ResourcesSearch represents the model behind the search form about `app\models\Resources`.
 */
class ResourcesSearch extends Resources
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',
				//'likes', 'dislikes', 'used',
				'created_at', 'updated_at'], 'integer'],
            [['resource_name', 'resource_url', 'author'], 'safe'],
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
        $query = Resources::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
//            'likes' => $this->likes,
//            'dislikes' => $this->dislikes,
//            'used' => $this->used,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'resource_name', $this->resource_name])
            ->andFilterWhere(['like', 'resource_url', $this->resource_url])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}
