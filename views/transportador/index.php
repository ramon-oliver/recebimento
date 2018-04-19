<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransportadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transportadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transportador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transportador', ['create'], ['class' => 'btn btn-success']) ?>
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
