<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Transactions';
?>


<div class="history-page">
    <div class="row">
        <div class="col-md-12">
            <div class="white-block-wrap">

                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control main-select">
                            <option data-imagesrc="/images/address.png">English</option>
                            <option data-imagesrc="/images/address.png">213</option>
                            <option data-imagesrc="/images/address.png">55</option>
                            <option data-imagesrc="/images/address.png">777</option>
                        </select>
                        <script>
                            document.addEventListener('DOMContentLoaded',function () {
                                $('select.main-select').ddslick();
                            });
                        </script>
                    </div>
                </div>
                
                <h1 class="form-header">
                    Wallet Transactions
                </h1>

                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-pay-wrapp">
                            <ul class="nav nav-pills nav-tabs-history">
                                <li class="active">
                                    <a href="#tab-history-1" data-toggle="tab">All</a>
                                </li>
                                <li>
                                    <a href="#tab-history-2" data-toggle="tab">Incoming</a>
                                </li>
                                <li>
                                    <a href="#tab-history-2" data-toggle="tab">Outgoing</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <?= Html::img('@web/images/icons/ic_filter0.svg'); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content tab-cur-content">
                    <div id="tab-history-1" class="tab-pane fade in active">

                        <div class="table-wrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">Timestamp</th>
                                    <th scope="col">Amount</th>
                                    <th colspan="2" scope="col">Recepient/Sender</th>
                                    <th scope="col">Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php for ($i = 0; $i < 3; $i++): ?>
                                    <tr class="complete-st">
                                        <td class="img-td">
                                            <?= Html::img('@web/images/address.png'); ?>
                                        </td>
                                        <td class="time-td">
                                            2018-04-04
                                            07:01:46
                                        </td>
                                        <td class="amount-td">
                                            <p>0.00001000 FOXT</p>
                                            <span>Token Purchase</span>
                                        </td>
                                        <td class="code-td">
                                            GBDCSI4USA2WID6HVN3TIHQLGZ5M2P7KMJTJSSGHNUZDWWFTCHV34BPA
                                        </td>
                                        <td class="tooltip-td">
                                        <span class="tooltip-btn"
                                              data-container="body"
                                              data-toggle="popover"
                                              data-placement="bottom"
                                              title="MEMO_TEXT"
                                              data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        </span>
                                        </td>
                                        <td class="status">complete</td>
                                        <td class="share-td">
                                            <a href="#" class="share-btn" onclick="copyText(this,'GBDCSI4USA2WID6HVN3TIHQLGZ5M2P7KMJTJSSGHNUZDWWFTCHV34BPA')"></a>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td class="img-td">
                                            <?= Html::img('@web/images/address.png'); ?>
                                        </td>
                                        <td class="time-td">
                                            2018-04-04
                                            07:01:46
                                        </td>
                                        <td class="amount-td">
                                            <p>0.00001000 FOXT</p>
                                            <span>Token Purchase</span>
                                        </td>
                                        <td class="code-td">
                                            GBDCSI4USA2WID6HVN3TIHQLGZ5M2P7KMJTJSSGHNUZDWWFTCHV34BPA
                                        </td>
                                        <td class="tooltip-td">
                                        <span class="tooltip-btn"
                                              data-container="body"
                                              data-toggle="popover"
                                              data-placement="bottom"
                                              title="MEMO_TEXT"
                                              data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        </span>
                                        </td>
                                        <td class="status">pending</td>
                                        <td class="share-td">
                                            <a href="#" class="share-btn" onclick="copyText(this,'GBDCSI4USA2WID6HVN3TIHQLGZ5M2P7KMJTJSSGHNUZDWWFTCHV34BPA')"></a>
                                        </td>
                                    </tr>
                                    <tr class="fail-st">
                                        <td class="img-td">
                                            <?= Html::img('@web/images/address.png'); ?>
                                        </td>
                                        <td class="time-td">
                                            2018-04-04
                                            07:01:46
                                        </td>
                                        <td class="amount-td">
                                            <p>0.00001000 FOXT</p>
                                            <span>Token Purchase</span>
                                        </td>
                                        <td class="code-td">
                                            GBDCSI4USA2WID6HVN3TIHQLGZ5M2P7KMJTJSSGHNUZDWWFTCHV34BPA
                                        </td>
                                        <td class="tooltip-td">
                                        <span class="tooltip-btn"
                                              data-container="body"
                                              data-toggle="popover"
                                              data-placement="bottom"
                                              title="MEMO_TEXT"
                                              data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        </span>
                                        </td>
                                        <td class="status">fail</td>
                                        <td class="share-td">
                                            <a href="#" class="share-btn" onclick="copyText(this,'GBDCSI4USA2WID6HVN3TIHQLGZ5M2P7KMJTJSSGHNUZDWWFTCHV34BPA')"></a>
                                        </td>
                                    </tr>
                                <?php endfor; ?>

                                </tbody>
                            </table>
                        </div>


                    </div>

                    <div id="tab-history-2" class="tab-pane fade">
                    </div>
                </div>

                <div class="dataTables_paginate paging_simple_numbers" id="data_table_paginate">
                    <span>
                        <a class="paginate_button current">1</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="2" tabindex="0">2</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="3" tabindex="0">3</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="4" tabindex="0">4</a>
                        <a class="paginate_button" aria-controls="data_table" data-dt-idx="5" tabindex="0">5</a>
                        <a class="paginate_button" aria-controls="data_table">30</a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</div>