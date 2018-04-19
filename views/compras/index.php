<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ComprasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Compras', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'empresa.razao_social',
            'nota_fiscal',
            'valor_nota_fiscal',
            'data_emissao',
            //'porcent_frete',
            // 'valor_frete',
            // 'cte',
            // 'veiculo_utilizado',
            // 'observacoes:ntext',            
            // 'transportador_id',
             'fornecedor.razao_social',
             'produtos',
            // 'tipo_frete_id',
            // 'oc',
             //'forma_pagamento',                
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
