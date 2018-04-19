<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TipoFrete;
use app\models\Produtos;
use app\models\Fornecedor;
use app\models\Transportador;
use app\models\Empresa;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Button;
use yii\helpers\Url;
use yii\bootstrap\Modal;


//use yii\widgets;



/* @var $this yii\web\View */
/* @var $model app\models\Compras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'empresa_id')->dropDownList(ArrayHelper::map(Empresa::find()->all(), 'id', 'razao_social')) ?>

    <?= $form->field($model, 'nota_fiscal')->textInput() ?>

    <?= $form->field($model, 'valor_nota_fiscal')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'oc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_emissao')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => true, 
         // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'language' => 'pt',
            'format' => 'yyyy-mm-dd'
        ]
]);?>

     <?= $form->field($model, 'fornecedor_id')->dropDownList(ArrayHelper::map(Fornecedor::find()->all(), 'id', 'razao_social'))?>
    
     <?= $form->field($model, 'transportador_id')->dropDownList(ArrayHelper::map(Transportador::find()->all(), 'id', 'razao_social')) ?>
    
    <?= $form->field($model, 'forma_pagamento')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'tipo_frete_id')->dropDownList(ArrayHelper::map(TipoFrete::find()->all(), 'id', 'tipo')) ?>
    
    <?= $form->field($model, 'valor_frete')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'porcent_frete')->textInput(['maxlength' => true]) ?>    

    <?= $form->field($model, 'cte')->textInput() ?>

    <?= $form->field($model, 'veiculo_utilizado')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'produtos')->textarea(['maxlength' => true])?>
   
    
    <?= $form->field($model, 'observacoes')->textarea(['rows' => 6]) ?> 

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Adicionar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
