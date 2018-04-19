<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Recebimento */

$this->title = 'Cadastrar Recebimento de Mercadorias';
$this->params['breadcrumbs'][] = ['label' => 'Recebimentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recebimento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
