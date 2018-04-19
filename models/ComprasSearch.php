<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compras;

/**
 * ComprasSearch represents the model behind the search form about `app\models\Compras`.
 */
class ComprasSearch extends Compras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cte', 'empresa_id', 'transportador_id', 'fornecedor_id', 'produtos_id', 'tipo_frete_id'], 'integer'],
            [['nota_fiscal', 'valor_nota_fiscal', 'porcent_frete', 'valor_frete'], 'number'],
            [['data_emissao', 'veiculo_utilizado', 'observacoes', 'oc', 'forma_pagamento'], 'safe'],
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
        $query = Compras::find();

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
            'nota_fiscal' => $this->nota_fiscal,
            'valor_nota_fiscal' => $this->valor_nota_fiscal,
            'data_emissao' => $this->data_emissao,
            'porcent_frete' => $this->porcent_frete,
            'valor_frete' => $this->valor_frete,
            'cte' => $this->cte,
            'empresa_id' => $this->empresa_id,
            'transportador_id' => $this->transportador_id,
            'fornecedor_id' => $this->fornecedor_id,
            'produtos_id' => $this->produtos_id,
            'tipo_frete_id' => $this->tipo_frete_id,
        ]);

        $query->andFilterWhere(['like', 'veiculo_utilizado', $this->veiculo_utilizado])
            ->andFilterWhere(['like', 'observacoes', $this->observacoes])
            ->andFilterWhere(['like', 'oc', $this->oc])
            ->andFilterWhere(['like', 'forma_pagamento', $this->forma_pagamento]);

        return $dataProvider;
    }
}
