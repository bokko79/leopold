<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RoomReviews;

/**
 * RoomReviewsSearch represents the model behind the search form about `common\models\RoomReviews`.
 */
class RoomReviewsSearch extends RoomReviews
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_id', 'time'], 'integer'],
            [['guest_name', 'guest_country', 'review_text'], 'safe'],
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
        $query = RoomReviews::find();

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
            'room_id' => $this->room_id,
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'guest_name', $this->guest_name])
            ->andFilterWhere(['like', 'guest_country', $this->guest_country])
            ->andFilterWhere(['like', 'review_text', $this->review_text]);

        return $dataProvider;
    }
}
