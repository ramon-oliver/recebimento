<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SelprodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Selprods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selprod-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Selprod', ['value'=> Url::to('index.php?r=selprod/create'), 'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>
    
    <?php 
    Modal::begin([
        'header' => '<h4>Shipment</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
    ]);

    echo "<div id = 'modalContent'></div>";

    Modal::end();
    ?>
    
    
    
    
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'produtos_id',
            'quantidade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
