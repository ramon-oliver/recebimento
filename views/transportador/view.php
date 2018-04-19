<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Transportador */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transportadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transportador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja excluir este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'razao_social',
            'cnpj',
//            'endereco_id',
//            'contatos_id',
        ],
    ]) ?>

</div>
