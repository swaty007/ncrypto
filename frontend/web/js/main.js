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

document.addEventListener('DOMContentLoaded',function () {
    var popover = 'popover';
    $('.tooltip-btn').popover({
        template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content" onclick="copyText(this)"></div><span class="popover-btn" onclick="clickSiblings(this)">Copy</span></div>'
    })
});