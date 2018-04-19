<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Compras</h1>
<ul>
    
    <?php    foreach ($compras as $compra): ?>
    <li>
        
        <?= Html::encode("{$compra->nota_fiscal} ({$compra->id})")?>:)
        <?= $compra->valor_nota_fiscal ?>
    </li>
    
    <?php    endforeach;  ?>
    
</ul>


<?=LinkPager::widget(['pagination' => $pagination]) ?>
