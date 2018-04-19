<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RecebimentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recebimentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recebimento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Recebimento de Mercadorias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    
        'rowOptions' => function($model) {
        $date = date('Y-m-d');        
//                        if($model->previsao_chegada_manaus < $date){
//                            
//                            return['class'=>'danger'];
        if (($date > ($model->previsao_chegada_manaus)) && ( $model->status_rec == 'Recebido')) {

            return['class' => 'success'];
        }
        if (($date < ($model->previsao_chegada_manaus)) && ( $model->status_rec == 'Recebido')) {

            return['class' => 'success'];
        }
        if ($date > ($model->previsao_chegada_manaus)) {

            return['class' => 'danger'];
        }
        
    },
    'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

        [
            'attribute' => 'compras_id',
            'value' => 'compras.id',
        ],
        [
            'attribute' => 'previsao_chegada_manaus',
            'format' => ['date', 'php:d/m/Y']
        ],
        [
            'attribute' => 'previsao_chegada_loja',
            'format' => ['date', 'php:d/m/Y']
        ],
//            'previsao_chegada_loja',
//            'chegada_loja',
//            'data_entrega_fiscal',
        'responsavel_rec',
        'status_rec',
        // 'compras_id',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>
<?php Pjax::end(); ?></div>
