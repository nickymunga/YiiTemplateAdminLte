<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
    <div class="row">
        <div class="col-md-3">
            <?= Html::a('<span class="logo-mini">LOGO</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
        </div>
        <div class="col-md-9">
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
                                    '<li class="divider"></li>',
                                     '<li class="dropdown-header">mam model .jpg</li>',
                                     ['label' => 'Template 1', 'url' => ['/site/templates', 'name' => 1]],
                                    '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -2 .jpg</li>',
                                     ['label' => 'Template 2', 'url' => ['/site/templates', 'name' => 2]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -3.jpg</li>',
                                    ['label' => 'Template 3', 'url' => ['/site/templates', 'name' => 3]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -4.jpg</li>',
                                    ['label' => 'Template 4', 'url' => ['/site/templates', 'name' => 4]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -5.jpg</li>',
                                    ['label' => 'Template 5', 'url' => ['/site/templates', 'name' => 5]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -6.jpg</li>',
                                    ['label' => 'Template 6', 'url' => ['/site/templates', 'name' => 6]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -7.jpg</li>',
                                    ['label' => 'Login FrontEnd', 'url' => ['/site/templates', 'name' => 7]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">photos -7.jpg</li>',
                                    ['label' => 'Login Backend', 'url' => ['/site/templates', 'name' => 8]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">signup.jpg</li>',
                                    ['label' => 'Sign Up', 'url' => ['/site/templates', 'name' => 9]],
                                     '<li class="divider"></li>',
                                     '<li class="dropdown-header">profile.jpg</li>',
                                    ['label' => 'Profile', 'url' => ['/site/templates', 'name' => 10]],
                                ],
                            ]
                          ];
                        if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'LOGIN', 'url' => ['/site/templates', 'name' => 7]];
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
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => $menuItems,
                        ]);
                        NavBar::end();
                        ?>

                </div>
            </nav>
        </div>
    </div>
</header>
