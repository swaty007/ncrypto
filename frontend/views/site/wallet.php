<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Wallet';
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">You are about to send money</h4>
                <p class="modal-sub-title">Please chech carrefully information give below</p>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">From:</label>

                        <div id="sel-1" class="dd-container">
                            <div class="dd-select">
                                <input class="dd-selected-value" type="hidden" value="1">
                                <a class="dd-selected">
                                    <?= Html::img('@web/images/address.png',['class'=>'dd-selected-image']);?>
                                    <label class="dd-selected-text">English</label>
                                </a>
                            </div>
                            <ul class="dd-options">
                                <li><a class="dd-option dd-option-selected">
                                        <input class="dd-option-value" type="hidden" value="1">
                                        <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                        <label class="dd-option-text">English</label></a></li>
                                <li><a class="dd-option">
                                        <input class="dd-option-value" type="hidden" value="2">
                                        <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                        <label class="dd-option-text">213</label></a></li>
                                <li><a class="dd-option">
                                        <input class="dd-option-value" type="hidden" value="3">
                                        <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                        <label class="dd-option-text">55</label></a></li>
                                <li><a class="dd-option">
                                        <input class="dd-option-value" type="hidden" value="4">
                                         <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                        <label class="dd-option-text">777</label></a></li>
                                <li><a onclick="Wallet_create.init()" class="dd-create">
                                        <?= Html::img('@web/images/icons/ic_addplus.svg',['class'=>'dd-option-image']);?>
                                        <label class="dd-option-text">Create Wallet</label></a></li>
                            </ul>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                dd_slick_init("#sel-1");
                            });
                        </script>

                    </div>
                    <div class="form-group">
                        <label class="control-label">To:</label>
                        <p class="form-copy-text" onclick="copyText(this);" data-original-title="" title="">
                            GA6HCMBLTZS5VYYBCATRBRZ3BZJMAFUDKYYF6AH6MVCMGWMRDNSWJPIH</p>
                    </div>
                    <div class="form-group like-group">
                        <label class="control-label"><span>Balance</span></label>
                        <span class="pull-right currency-text">NCR</span>
                        <p class="like-input">
                            1000.00
                        </p>
                        <p class="fee">
                            Fee: 0.0000002 NCR
                        </p>
                    </div>
                    <div class="text-center">
                           <span class="tooltip-btn"
                                 data-container="body"
                                 data-toggle="popover"
                                 data-placement="bottom"
                                 title="MEMO_TEXT"
                                 data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Add Memo</span>
                    </div>
                    <div class="text-center">
                        <button onclick="ModalLoader.init('#exampleModal',{
                            timestamp: '2018-04-04, 07:01:46',
                            from: 'GA6HCMBLTZS5VYYBCATRBRZ3BZJMAFUDKYYF6AH6MVCMGWMRDNSWJPIH',
                            to: 'GA6HCMBLTZS5VYYBCATRBRZ3BZJMAFUDKYYF6AH6MVCMGWMRDNSWJPIH',
                            amount: '200',
                            currency: 'NCR',
                            fee: '0.0000002'
                            })" class="grey-btn">Sent Payment
                        </button>
                    </div>

                </form>
            </div>

            <button onclick="ModalLoader.status('#exampleModal','Complete','http://ncrypto.infinitum.tech/site/wallet?more_info')"
                    class="grey-btn">Sent Complete
            </button>
            <a onclick="ModalLoader.status('#exampleModal','Fail','http://ncrypto.infinitum.tech/site/wallet?more_info')"
                    class="grey-btn">Sent Fail
            </a>

        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);

        })

    });

</script>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open
    modal
</button>


<section id="wallet-page" class="wallet-page">

    <div class="row">
        <div class="col-md-4">
            <div class="form-group right-margin">

                <div id="sel-modal-1" class="dd-container">
                    <div class="dd-select">
                        <input class="dd-selected-value" type="hidden" value="English">
                        <a class="dd-selected">
                            <?= Html::img('@web/images/address.png',['class'=>'dd-selected-image']);?>
                            <label class="dd-selected-text">English</label>
                        </a>
                    </div>
                    <ul class="dd-options">
                        <li><a class="dd-option dd-option-selected">
                                <input class="dd-option-value" type="hidden" value="English">
                                <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                <label class="dd-option-text">English</label></a></li>
                        <li><a class="dd-option">
                                <input class="dd-option-value" type="hidden" value="213">
                                <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                <label class="dd-option-text">213</label></a></li>
                        <li><a class="dd-option">
                                <input class="dd-option-value" type="hidden" value="55">
                                <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                <label class="dd-option-text">55</label></a></li>
                        <li><a class="dd-option">
                                <input class="dd-option-value" type="hidden" value="777">
                                <?= Html::img('@web/images/address.png',['class'=>'dd-option-image']);?>
                                <label class="dd-option-text">777</label></a></li>
                        <li><a onclick="Wallet_create.init()" class="dd-create">
                                <?= Html::img('@web/images/icons/ic_addplus.svg',['class'=>'dd-option-image']);?>
                                <label class="dd-option-text">Create Wallet</label></a></li>
                    </ul>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        dd_slick_init("#sel-modal-1");
                    });
                </script>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group right-left">
                <a onclick="Wallet_create.init()" class="btn-white-wallet left-margin">
                    Create Wallet
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group right-margin">
                <label class="control-label"><span class="white">Balance</span></label>
                <span class="pull-right currency-text">NCR</span>
                <p class="like-input">
                    23876867.4786
                </p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group left-margin form-group-copy">
                <label class="control-label"><span class="white">Wallet Address</span></label>
                <p class="form-copy-text" onclick="copyText(this);">
                    GCCVPYFOHY7ZB7557JKENAX62LUAPLMGIWNZJAFV2MITK6T32V37KEJU</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="white-block-wrap">
                <h2 class="form-header">
                    Send
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group right-margin">
                            <label class="control-label">Recepient Address</label>
                            <input type="text" class="form-control" placeholder="Enter Recepient Address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group left-margin right-margin">
                            <label class="control-label">Amount</label>
                            <input type="text" class="form-control" placeholder="Amount to Send">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group left-margin">
                            <label class="control-label">Currency</label>
                            <select class="form-control">
                                <option>Ncrypto — NCR</option>
                                <option>Ncrypto — NCR</option>
                                <option>Ncrypto — NCR</option>
                                <option>Ncrypto — NCR</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Memo</label>
                            <input type="text" class="form-control" placeholder="Enter short assets name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="grey-btn">Preview Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

