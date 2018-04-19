<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoFrete */

$this->title = 'Update Tipo Frete: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Fretes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-frete-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
