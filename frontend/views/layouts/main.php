<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <link href="/frontend/web/css/main.less" rel="stylesheet/less" type="text/css">
</head>
<body>
<?php $this->beginBody() ?>

<div class="container-fluid">
    <div class="row row-eq-height">


        <div id="navbar-adaptive" class="navbar-container navbar-adaptive col-md-1 col-lg-1">
            <div class="navbar-header">

                <a class="navbar-brand" href="<?= Url::to(['/site/index']); ?>"><?= Html::img('@web/images/ic_db_logo.svg') ;?></a>

            </div>
            <div id="w0-collapse" class="navbar-collapse text-center" aria-expanded="false" >
                <ul id="w1" class="navbar-nav nav text-center">
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'wallet') echo 'active' ?>"
                            href="<?= Url::to(['/site/wallet']); ?>"><?= Html::img('@web/images/icons/ic_wallet.svg') ;?>Wallet</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'history') echo 'active' ?>"
                            href="<?= Url::to(['/site/history']); ?>"><?= Html::img('@web/images/icons/ic_tokenslae.svg') ;?>Token Sales</a>
                    </li>

                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                            href="<?= Url::to(['/site/index']); ?>"><?= Html::img('@web/images/icons/ic_exchange.svg') ;?>Home</a>
                    </li>
                    <li>
                        <a  class="<?php if (Yii::$app->controller->action->id == 'about') echo 'active' ?>"
                            href="<?= Url::to(['/site/about']); ?>"><?= Html::img('@web/images/icons/ic_more.svg') ;?>About</a>
                    </li>
                </ul>
            </div>

            <div class="navbar-footer text-center">
                <ul id="w1" class="navbar-nav nav text-center">
                    <li>
                        <a href="<?= Url::to(['/site/logout']); ?>" class="exit-btn"><?= Html::img('@web/images/icons/ic_exit.svg',['style'=>'transform:translateX(4px)']) ;?>Exit</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-sm-12 col-navbar-adaptive">
            <div class="row">
                <div id="content-wrap" class="content-wrap clearfix">
                    <div class="info-block clearfix">

                        <div class="info-menu">
                            <ul class="nav info-nav">
                                <li class="<?php if (Yii::$app->controller->action->id == 'wallet') echo 'active' ?>">
                                    <a href="<?= Url::to(['/site/wallet']); ?>">Wallets</a>
                                </li>
                                <li class="<?php if (Yii::$app->controller->action->id == 'history') echo 'active' ?>">
                                    <a href="<?= Url::to(['/site/history']); ?>">Transactions</a>
                                </li>
                                <li>
                                    <a href="">Block Explorer</a>
                                </li>
                            </ul>
                        </div>

                        <?php   if (Yii::$app->user->isGuest) :?>
                            <div class="status-block ">
                                <div class="img-block"><?= Html::img('@web/images/icons/ic_useravatar.svg') ;?></div>
                            </div>
                        <? else :?>
                            <div class="status-block logged">
                                <div class="img-block"><?= Html::img('@web/images/icons/ic_useravatar.svg') ;?></div>
                                <p class="title">Konstantin
                                    Konstantinopolskyy</p>
                            </div>
                        <? endif;?>
                    </div>

                        <?= $content ?>

                    <footer class="footer">
                        <h3 class="title">© Ncrypto Network 2018</h3>
                        <select class="dropdown form-control">
                            <option>English</option>
                            <option>English</option>
                            <option>English</option>
                            <option>English</option>
                        </select>

                    </footer>
                </div>
            </div>
        </div>

    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
