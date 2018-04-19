<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fornecedor */

$this->title = 'Cadastrar Fornecedor';
$this->params['breadcrumbs'][] = ['label' => 'Fornecedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fornecedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
