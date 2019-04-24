<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 logo-area">
            <?= Html::a('<span class="logo-mini">LOGO</span><span class="logo-lg">LOGO</span>', Yii::$app->homeUrl, ['class' => 'logo logo-area',  'style' => "width: 100%;text-align: left;"]) ?>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
            <nav class="navbar navbar-static-top" role="navigation">
                <div class="navbar-custom-menu">
                    <?php
                        NavBar::begin([
                            'options' => [
                                'class' => 'nav-bar navbar-inverse',
                            ],
                        ]);
                       $menuItems = [
                            [
                                'label' => 'HOME',
                                'url' => ['site/index'],
                                'linkOptions' => [],
                            ],
                            [
                                'label' => 'HOME',
                                'url' => ['site/index'],
                                'linkOptions' => [],
                            ],
                            [
                                'label' => 'WIREFRAMES',
                                'items' => [
                                     ['label' => 'Template 1', 'url' => ['/site/templates', 'name' => 1]],
                                    '<li class="divider"></li>',
                                     ['label' => 'Template 2', 'url' => ['/site/templates', 'name' => 2]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Template 3', 'url' => ['/site/templates', 'name' => 3]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Template 4', 'url' => ['/site/templates', 'name' => 4]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Template 5', 'url' => ['/site/templates', 'name' => 5]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Template 6', 'url' => ['/site/templates', 'name' => 6]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Login FrontEnd', 'url' => ['/site/templates', 'name' => 7]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Login Backend', 'url' => ['/site/templates', 'name' => 8]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Sign Up', 'url' => ['/site/templates', 'name' => 9]],
                                     '<li class="divider"></li>',
                                    ['label' => 'Profile', 'url' => ['/site/templates', 'name' => 10]],
                                    '<li class="divider"></li>',
                                    ['label' => 'Sub Plans', 'url' => ['/site/templates', 'name' => 11]],
                                    '<li class="divider"></li>',
                                    ['label' => 'Edit Profile', 'url' => ['/site/templates', 'name' => 12]],
                                    '<li class="divider"></li>',
                                    ['label' => 'Front End Landing Page', 'url' => ['/site/templates', 'name' => 13]],
                                    '<li class="divider"></li>',
                                    ['label' => 'FrontEnd CP', 'url' => ['/site/templates', 'name' => 14]],
                                    '<li class="divider"></li>',
                                    ['label' => 'BackEnd CP', 'url' => ['/site/templates', 'name' => 15]],
                                    
                                ],
                            ]
                          ];
                        if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'LOGIN', 'url' => \yii\helpers\Url::toRoute(['backend/site/login'], true)];
                        } else {
                            $menuItems[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>';
                        }
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right nav-alt'],
                            'items' => $menuItems,
                        ]);
                        NavBar::end();
                        ?>

                </div>
            </nav>
        </div>
    </div>
</header>
