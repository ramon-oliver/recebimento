<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Selprod */

$this->title = 'Create Selprod';
$this->params['breadcrumbs'][] = ['label' => 'Selprods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="selprod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
