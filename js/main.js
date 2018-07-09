function tab(id, e){

    if( $(window).width() >= 1007 ){ //.box_tabs .tabs .tab

        $('.box_tabs .item_tab').fadeOut(10);
        $('.tabs .tab').removeClass('active');

        setTimeout(function(){
            
            $(e).addClass('active');
            $('.box_tabs .item_tab#item_'+id).fadeIn(100);

        }, 10);

    }else{

        if( !$('.box_tabs .item_tab#item_'+id).is(':visible') ){

            $('.box_tabs .item_tab').slideUp(200);
            $('.box_tabs .tabs_mobile').removeClass('active');
                
            setTimeout(function(){

                $('.box_tabs .item_tab#item_'+id).slideDown(500);
                $(e).addClass('active');

            }, 200);                

        }else{

            $('.box_tabs .item_tab').slideUp(200);

            $('.box_tabs .tabs_mobile').removeClass('active');

        }

    }

}