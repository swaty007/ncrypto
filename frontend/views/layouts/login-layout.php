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

    <div class="bg-canvas">
        <div id="particles-js"></div>
    </div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        window.addEventListener('load', function () {
            particlesJS("particles-js", {"particles":{"number":{"value":10,"density":{"enable":true,"value_area":868.0624057955}},"color":{"value":["#7b47c2","#89cb3e","#f9b047","#7cc0b3"]},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":11.83721462448409,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":311.6883116883117,"size":40,"duration":2.237762237762238,"opacity":0.9270729270729271,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, update;count_particles = document.querySelector('.js-count-particles'); update = function() {   requestAnimationFrame(update); }; requestAnimationFrame(update);

        });
    </script>

<?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>