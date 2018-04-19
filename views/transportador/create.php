<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Transportador */

$this->title = 'Cadastrar Transportador';
$this->params['breadcrumbs'][] = ['label' => 'Transportadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transportador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
