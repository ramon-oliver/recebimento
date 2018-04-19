<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SelecaoProdutos */

$this->title = 'Update Selecao Produtos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Selecao Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="selecao-produtos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
