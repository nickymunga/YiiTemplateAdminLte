<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">LOGO</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <div class="navbar-custom-menu">
<?php
    NavBar::begin([
        'options' => [
            'class' => 'nav-bar navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'HOME', 'url' => ['/site/templates', 'name' => 1]],
        ['label' => 'HOME', 'url' => ['/site/index']],
        ['label' => 'HOME', 'url' => ['/site/index']],
        ['label' => 'HOME', 'url' => ['/site/index']],
        ['label' => 'HOME', 'url' => ['/site/index']],
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
</header>
