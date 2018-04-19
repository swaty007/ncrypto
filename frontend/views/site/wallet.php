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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">You are about to send money</h4>
                <p class="modal-sub-title">Please chech carrefully information give below</p>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">From:</label>
                        <select id="sel-1" class="form-control main-select">
                            <option data-imagesrc="/images/address.png">English</option>
                            <option data-imagesrc="/images/address.png">213</option>
                            <option data-imagesrc="/images/address.png">55</option>
                            <option data-imagesrc="/images/address.png">777</option>
                        </select>
                        <script>
                            document.addEventListener('DOMContentLoaded',function () {
                                $('select#sel-1.main-select').ddslick();
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label class="control-label">To:</label>
                        <p class="form-copy-text" onclick="copyText(this);" data-original-title="" title="">GA6HCMBLTZS5VYYBCATRBRZ3BZJMAFUDKYYF6AH6MVCMGWMRDNSWJPIH</p>
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
                        <button type="submit" class="grey-btn">Sent Payment</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded',function () {

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);

        })

    });

</script>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>



<section id="wallet-page" class="wallet-page">

    <div class="row">
        <div class="col-md-4">
            <div class="form-group right-margin">
            <select id="sel-modal" class="form-control main-select">
                <option data-imagesrc="/images/address.png">English</option>
                <option data-imagesrc="/images/address.png">213</option>
                <option data-imagesrc="/images/address.png">55</option>
                <option data-imagesrc="/images/address.png">777</option>
            </select>
            <script>
                document.addEventListener('DOMContentLoaded',function () {
                    $('select#sel-modal.main-select').ddslick();
                });
            </script>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group right-left">
            <a href="#" class="btn-white-wallet left-margin">
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
        <div class="col-md-6">
            <div class="form-group left-margin">
                <label class="control-label"><span class="white">Wallet Address</span></label>
                <p class="form-copy-text" onclick="copyText(this);">GCCVPYFOHY7ZB7557JKENAX62LUAPLMGIWNZJAFV2MITK6T32V37KEJU</p>
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

