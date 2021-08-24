$(document).ready(function(){
    $('[data-file]').on('click',function(){
        var _target = $(this).data('file');
        $(_target).click();
    });
});