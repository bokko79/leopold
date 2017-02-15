<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Rooms;

/**
 * RoomsSearch represents the model behind the search form about `common\models\Rooms`.
 */
class RoomsSearch extends Rooms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'floor', 'number', 'is_available', 'file_id', 'available_from', 'update_time'], 'integer'],
            [['name', 'type'], 'safe'],
            [['price'], 'number'],
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
        $query = Rooms::find();

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
            'floor' => $this->floor,
            'number' => $this->number,
            'price' => $this->price,
            'is_available' => $this->is_available,
            'file_id' => $this->file_id,
            'available_from' => $this->available_from,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
