<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
    
<div class="wrap">
    <?php
//    NavBar::begin([
//        'brandLabel' => 'Metal Alumínio',
//        'brandUrl' => Yii::$app->homeUrl,
//        
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            [
//                'label' => 'Cadastro',
//                'items' => [
//                    ['label' => 'Fornecedores', 'url' => '#'],
//                    '<li class="divider"></li>',
////                    '<li class="dropdown-header">Dropdown Header</li>',
//                    ['label' => 'Empresas', 'url' => ['/empresa/create']],
//                ],
//            ],
//            [
//                'label' => 'Listar',
//                'items' => [
//                    ['label' => 'Compras', 'url' => ['/compras/index']],
//                    '<li class="divider"></li>',
////                    '<li class="dropdown-header">Dropdown Header</li>',
//                    ['label' => 'Empresas', 'url' => ['/empresa/index']],
//                    ['label' => 'Fornecedor', 'url' => ['/fornecedor/index']],
//                    ['label' => 'Transportador', 'url' => ['/transportador/index']],
//                ],
//            ],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//                    ['label' => 'Login', 'url' => ['/site/login']]
//                    ) : (
//                    '<li>'
//                    . Html::beginForm(['/site/logout'], 'post')
//                    . Html::submitButton(
//                            'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
//                    )
//                    . Html::endForm()
//                    . '</li>'
//                    )
//        ],
////        'options' => ['class' => 'nav-pills'],
//    ]);
//    
//    
    NavBar::begin([
        'brandLabel' => 'CRM - Metal Alumínio',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/recebimento/index']],
        ['label' => 'Contato', 'url' => ['/site/contact'], 'visible' => false],
    ];
    if (Yii::$app->user->isGuest) {
//                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {

        if (yii::$app->user->can('admin')) {
            $menuItems[] = ['label' => 'Users', 'url' => ['/users']];
            }

//        $menuItems[] = ['label' => 'BUB Sub Projects', 'url' => ['/bub']];
//        $menuItems[] = ['label' => 'Incoming BUB', 'url' => ['/bubincoming']];
//        $menuItems[] = ['label' => 'Home', 'url' => ['/site/index']];

        $menuItems[] = ['label' => 'Compras', 'url' => ['/compras']];  
        $menuItems[] = ['label' => 'Recebimento', 'url' => ['/recebimento']];
        $menuItems[] = [
            'label' => 'Cadastro',
            'items' => [
                
//                '<li class="dropdown-header">Dropdown Header</li>',
                ['label' => 'Empresas', 'url' => ['/empresa/create']],
                '<li class="divider"></li>',
                ['label' => 'Fornecedores', 'url' => ['/fornecedor/create']],
                ['label' => 'Transportadores', 'url' => ['/transportador/create']],
                ['label' => 'Produtos', 'url' => ['/produtos/create']],
                ['label' => 'Frete', 'url' => ['/frete/create']],
                
                
            ],
        ];

        $menuItems[] = [
            'label' => 'Listar',
            'items' => [
                ['label' => 'Compras', 'url' => ['/compras/index']],
                '<li class="divider"></li>',
//                '<li class="dropdown-header">Dropdown Header</li>',
                ['label' => 'Empresas', 'url' => ['/empresa/index']],
                ['label' => 'Fornecedor', 'url' => ['/fornecedor/index']],
                ['label' => 'Transportador', 'url' => ['/transportador/index']],
            ],
        ];
        $menuItems[] = ['label' => 'Sobre', 'url' => ['/site/about']];
        $menuItems[] = ['label' => 'Contato', 'url' => ['/site/contact']];


        $menuItems[] = [
            'label' => 'Logout',/*(' . Yii::$app->user->identity->username . ')*/
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    
        
        
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);


    /* NavBar::begin([
                'brandLabel' => 'My Project',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
                echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    [
                        'label' => 'Home',
                        'url' => ['site/index'],
                        'linkOptions' => ['data-method' => 'post'],
                    ],
                    [
                        'label' => 'Dropdown',
                        'items' => [
                                ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                                 '<li class="divider"></li>',
                                 '<li class="dropdown-header">Dropdown Header</li>',
                                ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                            ],
                    ],
                    [
                    'label' => 'Login',
                    'url' => ['site/login'],
                    'visible' => Yii::$app->user->isGuest
                    ],
                ],
            'options' => ['class' => 'nav-pills'], // set this to nav-tab to get tab-styled navigation
        ]);
*/


    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Metal Alumínio <?= date('Y') ?></p>
      
        <p class="pull-right"><?= Yii::powered(); echo ' v1.0'; ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
