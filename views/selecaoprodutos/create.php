<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SelecaoProdutos */

$this->title = 'Create Selecao Produtos';
$this->params['breadcrumbs'][] = ['label' => 'Selecao Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selecao-produtos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
