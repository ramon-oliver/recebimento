<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TipoFrete */

$this->title = 'Create Tipo Frete';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Fretes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-frete-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
