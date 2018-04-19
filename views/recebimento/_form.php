<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Compras;

/* @var $this yii\web\View */
/* @var $model app\models\Recebimento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recebimento-form">

    <?php $form = ActiveForm::begin();?>
<br/>
<br/>
    <?= $form->field($model, 'compras_id')->dropDownList(
            
           ArrayHelper::map(Compras::find()->all(), 'id', 'id'),         
           ['prompt'=> 'Selecione um código de compras']
            
    )?>
    
    
    
     <?= $form->field($model, 'previsao_chegada_manaus')->widget(
            DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
      //  'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            //'language' => 'pt-br',
//            [
//            'attribute' => 'format',
//            'format' => ['date', 'php:d/m/Y']
//            ]
            'format' =>'yyyy-mm-dd'
        ]
    ]);?>    

    <?=$form->field($model, 'previsao_chegada_loja')->widget(
            DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
      //  'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'language' => 'pt',
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'chegada_loja')->widget(
            DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'language' => 'pt',
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'data_entrega_fiscal')->widget(
            DatePicker::className(), [
        // inline too, not bad
        'inline' => false,
        // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'language' => 'pt',
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'responsavel_rec')->textInput(['maxlength'=>true])?>

    <?= $form->field($model, 'status_rec')->dropDownList(
            
            ['Recebido'=>"Recebido", 'Aguardando'=> "Aguardando Chegada de Material"],
            ['prompt'=> 'Selecione um Status',]
            
    )?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
