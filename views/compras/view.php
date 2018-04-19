<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nota_fiscal',
            'valor_nota_fiscal',
            'data_emissao',
            'porcent_frete',
            'valor_frete',
            'cte',
            'veiculo_utilizado',
            'observacoes:ntext',
            'empresa.razao_social',
            'transportador.razao_social',
            'fornecedor.razao_social',
            'produtos',
            'tipoFrete.tipo',
            'oc',
            'forma_pagamento',
        ],
    ]) ?>

</div>
