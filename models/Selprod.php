<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "selprod".
 *
 * @property integer $id
 * @property integer $produtos_id
 * @property integer $quantidade
 *
 * @property Produtos $produtos
 */
class Selprod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'selprod';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produtos_id', 'quantidade'], 'required'],
            [['produtos_id', 'quantidade'], 'integer'],
            [['produtos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::className(), 'targetAttribute' => ['produtos_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'produtos_id' => 'Produtos ID',
            'quantidade' => 'Quantidade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::className(), ['id' => 'produtos_id']);
    }
}
