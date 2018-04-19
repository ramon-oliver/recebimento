<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecebimentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recebimento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'previsao_chegada_manaus') ?>

    <?= $form->field($model, 'previsao_chegada_loja') ?>

    <?= $form->field($model, 'chegada_loja') ?>

    <?= $form->field($model, 'data_entrega_fiscal') ?>

    <?php // echo $form->field($model, 'responsavel_rec') ?>

    <?php // echo $form->field($model, 'status_rec') ?>

    <?php // echo $form->field($model, 'compras_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
