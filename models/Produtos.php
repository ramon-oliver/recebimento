<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property integer $id
 * @property string $descricao
 * @property string $codigo_fabricante
 * @property string $fabricante
 *
 * @property Compras[] $compras
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'codigo_fabricante', 'fabricante'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'codigo_fabricante' => 'Codigo Fabricante',
            'fabricante' => 'Fabricante',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compras::className(), ['produtos_id' => 'id']);
    }
}
