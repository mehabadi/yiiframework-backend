function submitform(){
    if($("#username").val() == "" || $("#password").val() == "")
    {
        showErrorMessage("Please Input Username / Password",500);        
        return false;
    }		
    hideTop();
    loading('Checking',1);	
    //$('#formlogin').submit();
    
    var FormObject = $('#formlogin');
    var Action = FormObject.attr("action");//+'acount/login';
    var SerializedForm = FormObject.serialize();    
   
    $.ajax({
        type: "POST",
        url: Action,
        data: SerializedForm,
        dataType: "json",
        success: function (data) { 
            setTimeout( "unloading()", 2000 ); 
            if(data.error){                
                showErrorMessage(data.errorMessage,500);
            }else{                
                setTimeout( Login(data.url), 2500 );
            }                                      
        },
        error: function (errdata, errdata1, errdata2) {
            setTimeout( "unloading()", 2000 ); 
            showErrorMessage("Error SubmitMainForm: " + errdata + "-" + errdata1 + "-" + errdata2,500);            
            return false;
        }
    });
}


$('#but_login').click(function(){				
    submitform();
    
});	
																 
function Login(url){
    $('.tipsy-w').css("opacity", 0);
    $("#login").animate({
        opacity: 1,
        top: '49%'
    }, 200,function(){
        $('.userbox').show().animate({
            opacity: 1
        }, 500);
        $("#login").animate({
            opacity: 0,
            top: '60%'
        }, 500,function(){
            $(this).fadeOut(200,function(){
                $(".text_success").slideDown();
                $("#successLogin").animate({
                    opacity: 1,
                    height: "200px"
                },500);   			     
            });							  
        })	
    })	
    setTimeout( "window.location.href='"+url+"'", 3000 );
}


function showErrorMessage(str, time){
    showError(str,time);
    $('.inner').jrumble({
        x: 4,
        y: 0,
        rotation: 0
    });	
    $('.inner').trigger('startRumble');
    setTimeout('$(".inner").trigger("stopRumble")',500);
    setTimeout('hideTop()',5000);
}

$('#alertMessage').click(function(){
    hideTop();
});

$(document).ready(function () {	  
    onfocus();
    $(".on_off_checkbox").iphoneStyle();
    $('.tip a ').tipsy({
        gravity: 'sw'
    });
    $('#login').show().animate({
        opacity: 1
    }, 2000);
    $('.logo').show().animate({
        opacity: 1,
        top: '32%'
    }, 800,function(){			
        $('.logo').show().delay(1200).animate({
            opacity: 1,
            top: '1%'
        }, 300,function(){
            $('.formLogin').animate({
                opacity: 1,
                left: '0'
            }, 300);
            $('.userbox').animate({
                opacity: 0
            }, 200).hide();
        });		
    })	
    
    $('input').keypress(function (e) {
        if (e.which == 13) {
            submitform();
        }
    });
});	

$('.userload').click(function(e){
    $('.formLogin').animate({
        opacity: 1,
        left: '0'
    }, 300);			    
    $('.userbox').animate({
        opacity: 0
    }, 200,function(){
        $('.userbox').hide();				
    });
});

function onfocus(){
    if($(window).width()>480) {					  
        $('.tip input').tipsy({
            trigger: 'focus', 
            gravity: 'w' ,
            live: true
        });
    }else{
        $('.tip input').tipsy("hide");
    }
}
