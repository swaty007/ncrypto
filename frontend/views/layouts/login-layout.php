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
        <div class="row">
            <?= $content ?>
        </div>
    </div>

<?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>