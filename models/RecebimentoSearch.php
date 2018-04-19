<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Recebimento;

/**
 * RecebimentoSearch represents the model behind the search form about `app\models\Recebimento`.
 */
class RecebimentoSearch extends Recebimento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'compras_id'], 'integer'],
            [['previsao_chegada_manaus', 'previsao_chegada_loja', 'chegada_loja', 'data_entrega_fiscal', 'responsavel_rec', 'status_rec'], 'safe'],
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
        $query = Recebimento::find();

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
            'previsao_chegada_manaus' => $this->previsao_chegada_manaus,
            'previsao_chegada_loja' => $this->previsao_chegada_loja,
            'chegada_loja' => $this->chegada_loja,
            'data_entrega_fiscal' => $this->data_entrega_fiscal,
            'compras_id' => $this->compras_id,
        ]);

        $query->andFilterWhere(['like', 'responsavel_rec', $this->responsavel_rec])
            ->andFilterWhere(['like', 'status_rec', $this->status_rec]);

        return $dataProvider;
    }
}
