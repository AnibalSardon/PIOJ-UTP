$(function(){
    $('.btn-circle').on('click',function(){
        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
        $(this).addClass('btn-info').removeClass('btn-default').blur();
    });

    $('.next-stepx, .prev-stepx').on('click', function (e){
        var $activeTabx = $('.tab-pane.active.tab-manual');

        $('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');

        if ( $(e.target).hasClass('next-stepx') )
        {
            var nextTabx = $activeTabx.next('.tab-pane').attr('id');
            $('[href="#'+ nextTabx +'"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#'+ nextTabx +'"]').tab('show');
        }
        else
        {
            var prevTabx = $activeTabx.prev('.tab-pane').attr('id');
            $('[href="#'+ prevTabx +'"]').addClass('btn-info').removeClass('btn-default');
            $('[href="#'+ prevTabx +'"]').tab('show');
        }
    });
});