<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Privilege;

/**
 * PrivilegeSearch represents the model behind the search form about `app\models\Privilege`.
 */
class PrivilegeSearch extends Privilege
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['privilegy_id', 'aco_id', 'group_id', 'status', 'created_at', 'modified_at'], 'integer'],
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
        $query = Privilege::find();

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
            'privilegy_id' => $this->privilegy_id,
            'aco_id' => $this->aco_id,
            'group_id' => $this->group_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'modified_at' => $this->modified_at,
        ]);

        return $dataProvider;
    }
}
