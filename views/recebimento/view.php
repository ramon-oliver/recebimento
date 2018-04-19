<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Recebimento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Recebimentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recebimento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['Atualizar', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['Excluir', 'id' => $model->id], [
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
            'previsao_chegada_manaus',
            'previsao_chegada_loja',
            'chegada_loja',
            'data_entrega_fiscal',
            'responsavel_rec',
            'status_rec',
            'compras_id',
        ],
    ]) ?>

</div>
