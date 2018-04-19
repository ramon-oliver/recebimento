<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property integer $id
 * @property double $nota_fiscal
 * @property string $valor_nota_fiscal
 * @property string $data_emissao
 * @property string $porcent_frete
 * @property string $valor_frete
 * @property integer $cte
 * @property string $veiculo_utilizado
 * @property string $observacoes
 * @property integer $empresa_id
 * @property integer $transportador_id
 * @property integer $fornecedor_id
 * @property integer $produtos_id
 * @property integer $tipo_frete_id
 * @property string $oc
 * @property string $forma_pagamento
 *
 * @property Empresa $empresa
 * @property Fornecedor $fornecedor
 * @property Produtos $produtos
 * @property TipoFrete $tipoFrete
 * @property Transportador $transportador
 * @property Recebimento[] $recebimentos
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nota_fiscal', 'valor_nota_fiscal', 'data_emissao','empresa_id', 'transportador_id', 'fornecedor_id','produtos'], 'required'],
            [['nota_fiscal'], 'number'],
            [['data_emissao'], 'safe'],
            [['cte', 'empresa_id', 'transportador_id', 'fornecedor_id', 'produtos_id', 'tipo_frete_id'], 'integer'],
            [['observacoes','valor_nota_fiscal', 'porcent_frete', 'valor_frete', 'produtos'], 'string'],
            [['veiculo_utilizado'], 'string', 'max' => 50],
            [['oc', 'forma_pagamento'], 'string', 'max' => 250],
            [['empresa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empresa::className(), 'targetAttribute' => ['empresa_id' => 'id']],
            [['fornecedor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fornecedor::className(), 'targetAttribute' => ['fornecedor_id' => 'id']],
//             [['produtos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::className(), 'targetAttribute' => ['produtos_id' => 'id']],
            [['tipo_frete_id'], 'exist', 'skipOnError' => true, 'targetClass' => TipoFrete::className(), 'targetAttribute' => ['tipo_frete_id' => 'id']],
            [['transportador_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transportador::className(), 'targetAttribute' => ['transportador_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Codigo de Compra',
            'nota_fiscal' => 'Nota Fiscal',
            'valor_nota_fiscal' => 'Valor Nota Fiscal',
            'data_emissao' => 'Data de Emissao',
            'porcent_frete' => 'Porcentagem de Frete',
            'valor_frete' => 'Valor do Frete',
            'cte' => 'CTE',
            'veiculo_utilizado' => 'Veiculo Utilizado',
            'observacoes' => 'Observações',
            'empresa_id' => 'Empresa',
            'transportador_id' => 'Transportador',
            'fornecedor_id' => 'Fornecedor',
            'produtos_id' => 'Produtos',
            'tipo_frete_id' => 'Tipo de Frete',
            'oc' => 'Oc',
            'forma_pagamento' => 'Forma de Pagamento',
            'empresa.razao_social'=> 'Empresa',
            'fornecedor.razao_social'=> 'Fornecedor',
            'transportador.razao_social'=> 'Transportador',
//            'produtos.descricao'=> 'Produtos',
            'tipo_frete.tipo'=> 'Tipo de Frete',
            'produtos'=> 'Produtos'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'empresa_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFornecedor()
    {
        return $this->hasOne(Fornecedor::className(), ['id' => 'fornecedor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::className(), ['id' => 'produtos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoFrete()
    {
        return $this->hasOne(TipoFrete::className(), ['id' => 'tipo_frete_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransportador()
    {
        return $this->hasOne(Transportador::className(), ['id' => 'transportador_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecebimentos()
    {
        return $this->hasMany(Recebimento::className(), ['compras_id' => 'id']);
    }
}
