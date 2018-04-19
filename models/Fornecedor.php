<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fornecedor".
 *
 * @property integer $id
 * @property string $razao_social
 * @property string $cnpj
 * @property integer $endereco_id
 * @property integer $contatos_id
 *
 * @property Compras[] $compras
 * @property Contatos $contatos
 * @property Endereco $endereco
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fornecedor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['razao_social', 'cnpj'], 'required'],
            //[['endereco_id', 'contatos_id'], 'integer'],
            [['razao_social', 'cnpj'], 'string', 'max' => 50],
            //[['endereco_id'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['endereco_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'razao_social' => 'Razao Social',
            'cnpj' => 'Cnpj',
//            'endereco_id' => 'Endereco ID',
//            'contatos_id' => 'Contatos ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compras::className(), ['fornecedor_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     
    public function getContatos()
    {
        return $this->hasOne(Contatos::className(), ['id' => 'contatos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     
    public function getEndereco()
    {
        return $this->hasOne(Endereco::className(), ['id' => 'endereco_id']);
    }*/
}
