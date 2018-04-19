<?php 
use yii\widgets\LinkPager;
?>


<h1>Compras</h1>
<hr>

    
    <?php foreach ($compras as $compra)?> 
    

        <li>
        <?= $compra->id . ' ' . $compra->nota_fiscal ?><br />
        <small><?= $compra->valor_nota_fiscal . ' (' . $compra->data_emissao .')'?></small>
         </li>
    
    <?php unset($compras); ?>
   
    


<?= LinkPager::widget([
    
   'pagination' => $pagination
    
]);