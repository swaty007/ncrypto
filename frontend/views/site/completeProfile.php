<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;


$this->title = 'Complete Profile';
$this->params['breadcrumbs'][] = $this->title;
?>


<script>
    document.getElementById('content-wrap').classList.add("grey");
    document.getElementById('content-wrap').classList.add("ajax-loader");
   setTimeout(function () {
       document.getElementById('content-wrap').classList.remove("ajax-loader");// скрыть прелоадер
   },4000);
</script>
<section id="complete-profile" class="complete-profile">
        <div class="row">

            <div class="col-md-12">
               <h1 class="title text-center">Complete registration</h1>
            </div>

            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
            <form action="" >
                <h2 class="form-header">Default wallet info</h2>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Wallet Address</label>
                            <p class="form-copy-text"  onclick="copyText(this);">GCCVPYFOHY7ZB7557JKENAX62LUAPLMGIWNZJAFV2MITK6T32V37KEJU</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Wallet Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <h2 class="form-header two">Optional info</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group right-margin">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter site link">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group left-margin">
                            <label class="control-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter site link">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a class="Fa2-link" href="#">Enable Two Factor Authorization</a>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12 text-center">
                            <?= Html::submitButton('Complete', ['class' => 'grey-btn', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                </div>

            </form>
            </div>


        </div>

</section>
