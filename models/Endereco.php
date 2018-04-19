<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property integer $id
 * @property string $logradouro
 * @property string $bairro
 * @property string $numero
 * @property string $complemento
 * @property string $ponto_referencia
 * @property integer $cep
 *
 * @property Empresa $empresa
 * @property Empresa[] $empresas
 * @property Fornecedor[] $fornecedors
 * @property Teste[] $testes
 * @property Teste[] $testes0
 * @property Transportador[] $transportadors
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logradouro', 'bairro', 'numero', 'complemento', 'ponto_referencia', 'cep'], 'required'],
            [['complemento'], 'string'],
            [['cep'], 'integer'],
            [['logradouro', 'bairro', 'numero', 'ponto_referencia'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logradouro' => 'Logradouro',
            'bairro' => 'Bairro',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'ponto_referencia' => 'Ponto Referencia',
            'cep' => 'Cep',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresa()
    {
        return $this->hasOne(Empresa::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasMany(Empresa::className(), ['id_endereco' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFornecedors()
    {
        return $this->hasMany(Fornecedor::className(), ['id_endereco' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestes()
    {
        return $this->hasMany(Teste::className(), ['endereco_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestes0()
    {
        return $this->hasMany(Teste::className(), ['endereco_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransportadors()
    {
        return $this->hasMany(Transportador::className(), ['id_endereco' => 'id']);
    }
}
