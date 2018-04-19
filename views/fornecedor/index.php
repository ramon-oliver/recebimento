<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FornecedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fornecedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fornecedor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Fornecedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'razao_social',
            'cnpj',
//            'endereco_id',
//            'contatos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
