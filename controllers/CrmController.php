<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use yii\base\Controller;
use app\models\Compras;
use yii\data\Pagination;


class CrmController extends Controller {
    
    
    public function actionCompras (){
        
       // $compras = Compras::find()->orderBy('id')->all();
        //echo '<pre>';        print_r($compras);
        
        $compra = Compras::findOne(5);
        echo $compra->nota_fiscal;
        
        $query = Compras::find();
        
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count()
            
        ]);
            
            $compras = $query->orderBy('id')
                             ->offset($pagination->offset)
                             ->limit($pagination->limit)
                             ->all();
            
            return $this->render('compras', [
                'compras'=>$compras,
                'pagination'=>$pagination              
                
            ]);
                    
        
    }
    
    
    
    
}
    
