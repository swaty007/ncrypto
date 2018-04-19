<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


$this->title = 'Sign In';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="site-login" class="site-login">
    <div class="container">
        <div class="row">

            <div class="logo-block col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                <a href="<?= Url::to(['/site/index']); ?>">
                    <?= Html::img('@web/images/img_logo.svg') ;?>
                </a>
            </div>
            <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
                <ul class="nav nav-pills nav-login">
                    <li class="active"><a href="#sign-in" data-toggle="tab" class="main-btn">Sign In</a></li>
                    <li> <a href="#sign-up" data-toggle="tab" class="main-btn">Sign Up</a></li>
                </ul>


            </div>

            <div class="tab-content">
            <div id="sign-in" class="tab-pane fade in active">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'options'=>['class'=>'col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-12\">{label}\n{input}</div>\n<div class=\"col-md-12 text-right\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-3 col-md-3 col-sm-4 col-sx-12 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Email']);?>

            <?= $form->field($model, 'password')->passwordInput()->textInput(['placeholder' => 'Password']); ?>

            <?= $form->field($model, 'faCode')->textInput(['placeholder' => '2-FA Code']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-md-6 checkbox-block\">{input} {label}</div><div class='col-md-6 text-right'>".Html::a('Reset Password', ['site/request-password-reset']) ."</div>",
            ]) ?>

            <div class="form-group">
                <div class="col-lg-12 text-center">
                    <?= Html::submitButton('Sign In', ['class' => 'main-btn', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
            </div>
                <div id="sign-up" class="tab-pane fade">
                    <?php $form1 = ActiveForm::begin([
                        'id' => 'form-signup',
                        'layout' => 'horizontal',
                        'options'=>['class'=>'col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12'],
                        'fieldConfig' => [
                            'template' => "<div class=\"col-md-12\">{label}\n{input}</div>\n<div class=\"col-md-12 text-right\">{error}</div>",
                            'labelOptions' => ['class' => 'col-lg-3 col-md-3 col-sm-4 col-sx-12 control-label'],
                        ],
                    ]); ?>

                    <?= $form1->field($model1, 'username')->textInput(['autofocus' => true])->textInput(['placeholder' => 'Username']);?>

                    <?= $form1->field($model1, 'email')->textInput(['placeholder' => 'Email']);?>

                    <?= $form1->field($model1, 'password')->passwordInput()->textInput(['placeholder' => 'Password']);?>

                    <div class="recaptcha-block">
                        <script src='https://www.google.com/recaptcha/api.js'></script>
                        <div class="g-recaptcha" data-sitekey="6Ld7Rj4UAAAAAOtdDPDK33WhkENWR8pjxhDTHtWl"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12 text-center">
                            <?= Html::submitButton('Get Started', ['class' => 'main-btn', 'name' => 'signup-button']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>
    <div class="close-btn">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <select class="dropdown form-control">
                    <option>English</option>
                    <option>English</option>
                    <option>English</option>
                    <option>English</option>
                </select>
                <hr class="lg-hr">
                <h4 class="footer-text">© Ncrypto Network 2018</h4>
            </div>
        </div>
    </div>

</section>
