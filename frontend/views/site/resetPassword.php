<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>


<section id="site-login" class="site-login">
    <div class="container">
        <div class="row">

            <div class="logo-block col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12">
                <?= Html::img('@web/images/img_logo.svg') ;?>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'reset-password-form',
                'layout' => 'horizontal',
                'options'=>['class'=>'col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12'],
                'fieldConfig' => [
                    'template' => "<div class=\"col-md-12\">{input}</div>\n<div class=\"col-md-12 text-right\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-3 col-md-3 col-sm-4 col-sx-12 control-label'],
                ],
            ]); ?>


            <h1 class="col-md-12"><?= Html::encode($this->title) ?></h1>
            <p class="desc">Please choose your new password:</p>
                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true])->textInput(['placeholder' => 'Password']);?> ?>

            <div class="form-group">
                <div class="col-lg-12 text-center">
                    <?= Html::submitButton('Save', ['class' => 'main-btn', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

</div>
</div>
    <div class="close-btn">

    </div>
</section>
