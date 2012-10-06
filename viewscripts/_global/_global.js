$(function(){
    $('#alertMessage').click(function(){
        hideTop();
    });
})

function hideTop(){
    $('#alertMessage').animate({
        opacity: 0,
        right: '-20'
    }, 500,function(){
        $(this).hide();
    });	
}

function loading(name,overlay) {  
    $('body').append('<div id="overlay"></div><div id="preloader">'+name+'..</div>');
    if(overlay==1){
        $('#overlay').css('opacity',0.1).fadeIn(function(){
            $('#preloader').fadeIn();
        });
        return  false;
    }
    $('#preloader').fadeIn();	  
}
 
function unloading() {  
    $('#preloader').fadeOut('fast',function(){
        $('#overlay').fadeOut();
    });
}

function showSuccess(str){
    $('#alertMessage').removeClass('error').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '0'
    }, 500);	
}

function showError(str,time){
    $('#alertMessage').addClass('error').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '0'
    }, time);	
	
}