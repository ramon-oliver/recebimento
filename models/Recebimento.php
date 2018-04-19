<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recebimento".
 *
 * @property integer $id
 * @property string $previsao_chegada_manaus
 * @property string $previsao_chegada_loja
 * @property string $chegada_loja
 * @property string $data_entrega_fiscal
 * @property string $responsavel_rec
 * @property string $status_rec
 * @property integer $compras_id
 *
 * @property Compras $compras
 */
class Recebimento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recebimento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['previsao_chegada_manaus', 'previsao_chegada_loja'], 'required'],
            [['previsao_chegada_manaus', 'previsao_chegada_loja', 'chegada_loja', 'data_entrega_fiscal'], 'safe'],
            [['compras_id'], 'integer'],
            [['responsavel_rec', 'status_rec'], 'string', 'max' => 250],
            [['compras_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compras::className(), 'targetAttribute' => ['compras_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'previsao_chegada_manaus' => 'Previsao Chegada em Manaus',
            'previsao_chegada_loja' => 'Previsao Chegada na Loja',
            'chegada_loja' => 'Chegada Loja',
            'data_entrega_fiscal' => 'Data Entrega ao Fiscal',
            'responsavel_rec' => 'Responsavel pelo recebimento',
            'status_rec' => 'Status do Recebimento',
            'compras_id' => 'Codigo de compras',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasOne(Compras::className(), ['id' => 'compras_id']);
    }
}
