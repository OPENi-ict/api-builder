<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\Alert;
use app\controllers\ProfileController;

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
				'brandLabel' => '<img src="' . Yii::getAlias('@web') . '/images/OPENi_logo.png">',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-default navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/']],
                ['label' => 'Categories', 'url' => ['/categories/']],
                ['label' => 'APIs', 'url' => ['/apis/']],
                ['label' => 'Objects', 'url' => ['/objects/']],
                ['label' => 'CBS', 'url' => ['/cbs/']],
				['label' => 'Swagger', 'url' => ['/swagger']],
				['label' => 'About', 'url' => ['/site/about']],
                //['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
				$menuItems[] = ['label' => 'Profile', 'url' => ['/profile/']];
				if (array_key_exists('admin', Yii::$app->authManager->getRolesByUser(Yii::$app->user->id)))
					$menuItems[] = '<li role="presentation"><a href="'. Yii::getAlias('@web') .'/profile/adminnotifications" class="navbar-badge-link"><span class="badge navbar-badge" data-toggle="tooltip" data-placement="bottom" title="New Notifications">'.ProfileController::getAdminNotifNum().'</span></a></li>';
				else
					$menuItems[] = '<li role="presentation"><a href="'. Yii::getAlias('@web') .'/profile/notifications" class="navbar-badge-link"><span class="badge navbar-badge" data-toggle="tooltip" data-placement="bottom" title="New Notifications">'.ProfileController::getFollowingAPIsUsersNotifNum().'</span></a></li>';
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
			<p class="pull-left"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> <?= date('Y') ?> - DSS Lab NTUA - All Rights Reserved</p>
<!--			<p class="pull-right">--><?//= Yii::powered() ?><!--</p>-->
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
