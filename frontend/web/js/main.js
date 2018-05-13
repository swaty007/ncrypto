function copyText(_this, text) {
    if (text !== undefined) {
        var temp = $("<input>");
        $("body").append(temp);
        temp.val(text).select();
        document.execCommand("copy");
        temp.remove();
    } else {
        var temp = $("<input>");
        $("body").append(temp);
        temp.val($(_this).text()).select();
        document.execCommand("copy");
        temp.remove();
    }

    $(_this).tooltip('hide').data('bs.tooltip', false);
    $(_this).tooltip({
        trigger: 'manual',
        placement: 'top',
        title: 'Copied'
    }).tooltip('show');
    setTimeout(function () {
        $(_this).tooltip('hide');
    }, 600);
}
function clickSiblings(_this) {
    $(_this).siblings('.popover-content').click();
}
// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $(input).siblings('img').attr('src', e.target.result).show();
//             $(input).siblings('.select-text').hide();
//             $(input).siblings('.name-text').addClass('loaded');
//         };
//         reader.readAsDataURL(input.files[0]);
//     }
// }

var ModalLoader = {
    init: function (element,params) {
        event.preventDefault();
        var status_html = this.make_status(),
            header_html = '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>'+status_html,
            html_body = '<div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label label_status">Timestamp:</label><p class="control-status_text time">' + params.timestamp + '</p></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label label_status">From:</label><p class="control-status_text">' + params.from + '</p></div></div><div class="col-md-6"><div class="form-group"><label class="control-label label_status">To:</label><p class="control-status_text">' + params.to + '</p></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label label_status">Amount:</label><p class="control-status_text">' + (params.amount + ' ' + params.currency) + '</p></div></div><div class="col-md-6"><div class="form-group"><label class="control-label label_status">Fee:</label><p class="control-status_text">' + (params.fee + ' ' + params.currency) + '</p></div></div></div><div style="height:130px;"></div>',
            element = $(element);

        element.find('.modal-header').html(header_html);
        element.find('.modal-body').html(html_body);
    },
    status: function (element, status, link) {
        var status_html = this.make_status(status),
            header_html = '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>'+status_html,
            btn_info = this.make_link(link);
            element = $(element);

        element.find('.modal-header').html(header_html);
        element.find('.modal-body').append(btn_info);
    },
    make_status: function (status) {
        var status_text = "Wait until your transaction processing...",
            status_class = "";
        if (status === "Complete") {
            status_text = "Transaction Completed";
            status_class = "completed";
        } else if (status === "Fail") {
            status_text = "Transaction Failed";
            status_class = "fail";
        }
        return '<div class="pre-load-bar '+status_class+'"></div><p class="status_text '+status_class+'">'+status_text+'</p>';
    },
    make_link: function (link) {
        if (link !== undefined && link != "") {
            return '<div class="row"><div class="form-group"><div class="col-md-12 text-center"><a href="'+link+'" class="grey-btn">Transaction Info</a></div></div></div>';
        }
    }
};

function alertPurchase(name) {
    var id = Date.parse(new Date),
    html = '<div id="'+id+'" style="display: none;" class="alert-info"><div class="alert-info-img"></div><div class="alert-info-content"><h4 class="alert-info-title">Info</h4><p class="alert-info-text">Wallet “'+name+'” created </p> </div> </div>';

    $('body').append(html);
    $('#'+id).show(150);
    setTimeout(function () {
        $('#'+id).hide(150,function () {
            $('#'+id).remove();
        });

    },5000);
}

var Wallet_create = {
    id: "",
    status: 0,
    init: function create() { // Create Modal step 1
        if (this.status !== 0 && $("#"+this.id)) {
                $("#"+this.id).modal('show');
            return;
        }
        var id = Date.parse(new Date);
        var html = `<div class="modal fade ajax-loader" id="${id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Create New Wallet</h4>
                <div class="avatar-block">
                    <div class="row">
                        <div class="col-xs-5">
                            <label class="control-label">
                                Your address avatar
                            </label>
                        </div>
                        <div class="col-xs-7">
                            <div class="avatar-img">
                                <img id="${id}_avatar" src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body">
               
                    <div class="form-group">
                        <label class="control-label">Wallet Address</label>
                        <p id="${id}_address" class="form-copy-text" onclick="copyText(this);" data-original-title="" title="">
                            
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Wallet Name</label>
                        <input id="${id}_name" type="text" class="form-control" placeholder="">
                    </div>

                    <div class="text-center">
                        <button id="button_create_wallet" class="grey-btn">Create</button>
                    </div>

               
            </div>
        </div>
    </div>
</div>`;
        $('body').append(html);
        $('#'+id).modal('show');
        this.id = id;
        this.status = 1;

        var sbmBtn = $("#button_create_wallet");
            sbmBtn.attr('disabled', 'disabled');//выключить повторное нажатие
        $.ajax({
            type: "POST",
            url: "/site/create-wallet",
            data: "",
            success: function (msg) {
                Wallet_create.update({ // переход к второму шагу и добавлению контента
                    wallet: msg.params.wallet,
                    avatar_img: msg.params.img_src
                });
            }
        }).always(function(){
            sbmBtn.removeAttr('disabled'); //включить кнопку
        });

        return id;
    },
    update: function (params) { //Update modal by params step 2
        if (this.status !== 1) {return}
        var img_avatar = $("#"+this.id+"_avatar");
        var wallet = $("#"+this.id+"_address");
        img_avatar.attr('src',params.avatar_img);
        wallet.text(params.wallet);
        $("#"+this.id).addClass('loaded');//убрать прелоадер
        $('#button_create_wallet').attr('onclick','Wallet_create.create()'); // change event on click
        this.status = 2;
    },
    create: function (cb) { //Create wallet, return wallet name step 3
        var id = this.id; //для таймаута
        var wallet_name = String($("#"+id+"_name").val());
        if (wallet_name > 56) {
            console.log(wallet_name, "Long wallet name");
        }
        if (this.status !== 2) {return wallet_name}
        $("#"+id).modal('hide');
        setTimeout(function () {
            $("#"+id).remove();
        },500);

        alertPurchase(wallet_name);
        this.status = 0;
        if(cb) cb(wallet_name);
        return wallet_name;
    }

};


function dd_slick_init(_id) {
    var id = $(_id),
        drop_ul = id.find('.dd-options'),
        selected_item = id.find('.dd-select'),
        elements = id.find('.dd-options .dd-option');
    function drop_down_status (status) {
        if (status === "show") {
            drop_ul.slideDown(300);
            id.addClass('opened')
        } else if (status === "hide") {
            drop_ul.slideUp(300);
            id.removeClass('opened');
        }
    }
    selected_item.on('click', function () {
        drop_down_status('show');
    });

    elements.on('click', function () {
        var _this = $(this);
        if (!_this.hasClass('dd-option-selected')) {
            elements.removeClass('dd-option-selected');
            _this.addClass('dd-option-selected');
            var input_val = _this.find('.dd-option-value').val();
            var input_label = _this.find('.dd-option-text').text();
            var input_img = _this.find('.dd-option-image').attr('src');
            selected_item.find('.dd-selected-value').val(input_val);
            selected_item.find('.dd-selected-text').text(input_label);
            selected_item.find('.dd-selected-image').attr('src',input_img);
        }
        drop_down_status('hide');
    });


    $(document).on('click', function (e) {
        if (!id.is(e.target) && id.has(e.target).length === 0 ) {
            drop_down_status('hide');
        }
    });
    $(id.find('.dd-create')).on('click', function (e) {
            drop_down_status('hide');
    });
};

//popover
document.addEventListener('DOMContentLoaded',function () {
    var popover = 'popover';
    $('.tooltip-btn').popover({
        template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" onclick="copyText(this)"></div><span class="popover-btn" onclick="clickSiblings(this)">Copy</span></div>'
    });
});
//close popover when click out
$(document).on('click', function (e) {
    $('.tooltip-btn[data-toggle="popover"],.tooltip-btn[data-original-title]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
        }

    });
});
//close popover when click out end