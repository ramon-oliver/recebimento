<?php

namespace app\models;

use Yii;

use yii\base\Model;



  class EntryForm extends Model{
    
    public $name = null;
    public $email = null;
    
    public function rules(){
        
        return [[['name','email'], 'required'], ['email','email']];
        
    }


}

$model = new EntryForm();
$model->name = 'Ramon';
$model->email = 'ramonoliveira72@hotmail.com';

if($model->validate()){
    
   echo 'Good!!';
}else{
    echo 'falhou !!';
}


