$(function(){
    var AllUCDives = $('div.UCViewer');
    $.each(AllUCDives, function (index, divObj) {
        var fileURL = $(divObj).attr('ucl');
        $.ajax({
            url: _BASE_URL + fileURL,
            success: function (data) {
                $(divObj).html(data);
            },
            error: function (errdata, errdata1, errdata2) {
                $(divObj).html('ERRROR!!! ' + errdata + '<br>' + errdata1 + '<br>' + errdata2);
            }
        });
    });
    
    
    $('#alertMessage').click(function(){
        hideTop();
    });
    
    $("#logout").click(function(){
        Logout();
    });
            
})

function RefreshAjaxUCViewer(ViewerID) {
    var divObj = $('#' + ViewerID);
    var fileURL = divObj.attr('ucl');
    $.ajax({
        url: fileURL,
        success: function (data) {
            $(divObj).html(data);
        },
        error: function (errdata, errdata1, errdata2) {
            $(divObj).html('ERRROR!!! ' + errdata + '<br>' + errdata1 + '<br>' + errdata2);
        }
    });
}

function hideTop(){
    $('#alertMessage').animate({
        opacity: 0,
        right: '-20'
    }, 500,function(){
        $(this).hide();
    });	
}

function loading(name,overlay) {  
    $('body').append('<div id="overlay"></div><div id="preloader">'+name+'...</div>');
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

function Logout(){
    loading('Waiting',1);
    setTimeout( "unloading()", 2000 );                                
    $(".text_loading").slideDown();
    setTimeout($(".text_loading").slideDown(), 2000);
    setTimeout( "window.location.href='"+ _LOGOUT_URL +"'",2000 );
}  

