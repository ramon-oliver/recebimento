<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SelecaoProdutos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="selecao-produtos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'produtos_id')->textInput() ?>

    <?= $form->field($model, 'quantidade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
