<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contatos".
 *
 * @property integer $id
 * @property double $celular
 * @property double $telefone
 * @property string $email
 * @property string $skype
 * @property string $facebook
 */
class Contatos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Contatos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['celular', 'telefone', 'email', 'skype', 'facebook'], 'required'],
            [['celular', 'telefone'], 'number'],
            [['email', 'skype', 'facebook'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'celular' => 'Celular',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'skype' => 'Skype',
            'facebook' => 'Facebook',
        ];
    }
}
