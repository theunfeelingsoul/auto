<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cardetails;

/**
 * CardetailsSearch represents the model behind the search form about `app\models\Cardetails`.
 */
class CardetailsSearch extends Cardetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['reg_year', 'reg_number', 'mileage', 'body_type', 'model_year', 'engine_size', 'engine_type', 'trans', 'fuel_type', 'body_style', 'driveline', 'fuel_economy', 'anti_brake_system', 'front_brake_type', 'turning_diameter', 'rear_suspension', 'rear_spring_type', 'standard_seating', 'chassis', 'location', 'steering', 'doors', 'dimension', 'weight', 'max_load', 'color', 'model', 'manufacturer', 'images'], 'safe'],
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
        $query = Cardetails::find();

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

        $query->andFilterWhere(['like', 'reg_year', $this->reg_year])
            ->andFilterWhere(['like', 'reg_number', $this->reg_number])
            ->andFilterWhere(['like', 'mileage', $this->mileage])
            ->andFilterWhere(['like', 'body_type', $this->body_type])
            ->andFilterWhere(['like', 'model_year', $this->model_year])
            ->andFilterWhere(['like', 'engine_size', $this->engine_size])
            ->andFilterWhere(['like', 'engine_type', $this->engine_type])
            ->andFilterWhere(['like', 'trans', $this->trans])
            ->andFilterWhere(['like', 'fuel_type', $this->fuel_type])
            ->andFilterWhere(['like', 'body_style', $this->body_style])
            ->andFilterWhere(['like', 'driveline', $this->driveline])
            ->andFilterWhere(['like', 'fuel_economy', $this->fuel_economy])
            ->andFilterWhere(['like', 'anti_brake_system', $this->anti_brake_system])
            ->andFilterWhere(['like', 'front_brake_type', $this->front_brake_type])
            ->andFilterWhere(['like', 'turning_diameter', $this->turning_diameter])
            ->andFilterWhere(['like', 'rear_suspension', $this->rear_suspension])
            ->andFilterWhere(['like', 'rear_spring_type', $this->rear_spring_type])
            ->andFilterWhere(['like', 'standard_seating', $this->standard_seating])
            ->andFilterWhere(['like', 'chassis', $this->chassis])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'steering', $this->steering])
            ->andFilterWhere(['like', 'doors', $this->doors])
            ->andFilterWhere(['like', 'dimension', $this->dimension])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'max_load', $this->max_load])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'images', $this->images]);

        return $dataProvider;
    }
}
