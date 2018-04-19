<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transportador".
 *
 * @property integer $id
 * @property string $razao_social
 * @property string $cnpj
 * @property integer $endereco_id
 * @property integer $contatos_id
 *
 * @property Compras[] $compras
 * @property Contatos $contatos
 */
class Transportador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transportador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['razao_social', 'cnpj'], 'required'],
            [['endereco_id', 'contatos_id'], 'integer'],
            [['razao_social', 'cnpj'], 'string', 'max' => 50],
            [['contatos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contatos::className(), 'targetAttribute' => ['contatos_id' => 'id']],
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
            'endereco_id' => 'Endereco ID',
            'contatos_id' => 'Contatos ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compras::className(), ['transportador_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContatos()
    {
        return $this->hasOne(Contatos::className(), ['id' => 'contatos_id']);
    }
}
