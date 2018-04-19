<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComprasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nota_fiscal') ?>

    <?= $form->field($model, 'valor_nota_fiscal') ?>

    <?= $form->field($model, 'data_emissao') ?>

    <?= $form->field($model, 'porcent_frete') ?>

    <?php // echo $form->field($model, 'valor_frete') ?>

    <?php // echo $form->field($model, 'cte') ?>

    <?php // echo $form->field($model, 'veiculo_utilizado') ?>

    <?php // echo $form->field($model, 'observacoes') ?>

    <?php // echo $form->field($model, 'empresa_id') ?>

    <?php // echo $form->field($model, 'transportador_id') ?>

    <?php // echo $form->field($model, 'fornecedor_id') ?>

    <?php // echo $form->field($model, 'produtos_id') ?>

    <?php // echo $form->field($model, 'tipo_frete_id') ?>

    <?php // echo $form->field($model, 'oc') ?>

    <?php // echo $form->field($model, 'forma_pagamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
