<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="API Builder for OPENi">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
				'brandLabel' => '<img src="/api-builder/web/OPENi_logo.png"> API Builder',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-default navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
				['label' => 'Browse', 'url' => ['/apis/'], 'items' => [
					['label' => 'APIs', 'url' => ['/apis/']],
					['label' => 'Objects', 'url' => ['/objects/']]
				]],
				['label' => 'Create', 'url' => ['/apis/create'], 'items' => [
					['label' => 'API', 'url' => ['/apis/create']],
					['label' => 'Object', 'url' => ['/objects/create']]
				]],
				['label' => 'Swagger', 'url' => ['/swagger']],
				['label' => 'About', 'url' => ['/site/about']],
                //['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">API Builder <?= date('Y') ?></p>
<!--        <p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
        </div>
    </footer>

    <?php $this->endBody() ?>
	<script>
		$(function() {
			$.material.init();
		});
	</script>
</body>
</html>
<?php $this->endPage() ?>
