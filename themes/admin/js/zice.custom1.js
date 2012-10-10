

$(function() {		
    LResize();	
    $(window).resize(function(){
        LResize();        
    });
    $(window).scroll(function (){
        scrollmenu();
    });
		
    //Close_windows
    $('.butAcc').live('click',function(e){				   
        if(buttonActions[this.id]){
            buttonActions[this.id].call(this);
        }
        e.preventDefault();
    });
	  
    // Logout Click  
    $('div.logout').live('click',function() { 
        var str="Logout"; 
        var overlay="1"; 
        loading(str,overlay);
        setTimeout("unloading()",1500);
        setTimeout( "window.location.href='"+ _LOGOUT_URL+"'", 2000 );
    });
	
	 
    // Tipsy Tootip
    $('.tip a ').tipsy({
        gravity: 's',
        live: true
    });	
    $('.ntip a ').tipsy({
        gravity: 'n',
        live: true
    });	
    $('.wtip a ').tipsy({
        gravity: 'w',
        live: true
    });	
    $('.etip a,.Base').tipsy({
        gravity: 'e',
        live: true
    });	
    $('.netip a ').tipsy({
        gravity: 'ne',
        live: true
    });	
    $('.nwtip a  ').tipsy({
        gravity: 'nw',
        live: true
    });	
    $('.swtip a,.iconmenu li a ').tipsy({
        gravity: 'sw',
        live: true
    });	
    $('.setip a ').tipsy({
        gravity: 'se',
        live: true
    });	
    $('.wtip input').tipsy({
        trigger: 'focus', 
        gravity: 'w',
        live: true
    });
    $('.etip input').tipsy({
        trigger: 'focus', 
        gravity: 'e',
        live: true
    });
    $('.iconBox, div.logout').tipsy({
        gravity: 'ne',
        live: true
    });	

    // Effect 
    $('.SEclick, .SEmousedown, .SEclicktime,.SEremote,.SEremote2,.SEremote3,.SEremote4').jrumble();
    $('.SE').jrumble({
        x: 2,
        y: 2,
        rotation: 1
    });
	
    $('.alertMessage.error ').jrumble({
        x: 10,
        y: 10,
        rotation: 4
    });
	
    $('.alertMessage.success').jrumble({
        x: 4,
        y: 0,
        rotation: 0
    });
	
    $('.alertMessage.warning').jrumble({
        x: 0,
        y: 0,
        rotation: 5
    });

    $('.SE').hover(function(){
        $(this).trigger('startRumble');
    }, function(){
        $(this).trigger('stopRumble');
    });

    $('.SEclick').toggle(function(){
        $(this).trigger('startRumble');
    }, function(){
        $(this).trigger('stopRumble');
    });
	
    $('.SEmousedown').bind({
        'mousedown': function(){
            $(this).trigger('startRumble');
        },
        'mouseup': function(){
            $(this).trigger('stopRumble');
        }
    });
	
    $('.SEclicktime').click(function(){
        var demoTimeout;
        $this = $(this);
        clearTimeout(demoTimeout);
        $this.trigger('startRumble');
        demoTimeout = setTimeout(function(){
            $this.trigger('stopRumble');
        }, 1500)
    });
    $('.SEremote').hover(function(){
        $('.SEremote2').trigger('startRumble');
    }, function(){
        $('.SEremote2').trigger('stopRumble');
    });
	
    $('.SEremote2').hover(function(){
        $('.SEremote').trigger('startRumble');
    }, function(){
        $('.SEremote').trigger('stopRumble');
    })

    $('.SEremote3').hover(function(){
        $('.alertMessage').trigger('startRumble');
    }, function(){
        $('.alertMessage').trigger('stopRumble');
    })

    $('.SEremote4').hover(function(){
        $('.alertMessage.error').trigger('startRumble');
    }, function(){
        $('.alertMessage.error').trigger('stopRumble');
    })


    // icon  gray Hover
    $('.iconBox.gray').hover(function(){
        var name=$(this).find('img').attr('alt');
        $(this).find('img').animate({
            opacity: 0.5
        }, 0, function(){
            $(this).attr('src','images/icon/color_18/'+name+'.png').animate({
                opacity: 1
            }, 700);									 
        });
    },function(){
        var name=$(this).find('img').attr('alt');
        $(this).find('img').attr('src','images/icon/gray_18/'+name+'.png');
    })
	
    // Animation icon  Logout 
    $('#logout').hover(function(){
        var name=$(this).find('img').attr('alt');
        $(this).find('img').animate({
            opacity: 0.4
        }, 200, function(){
            $(this).attr('src',_BASE_THEME_URL +'images/'+name+'.png').animate({
                opacity: 1
            }, 500);									 
        });
    },function(){
        var name=$(this).find('img').attr('name');
        $(this).find('img').animate({
            opacity: 0.5
        }, 200, function(){
            $(this).attr('src',_BASE_THEME_URL +'images/'+name+'.png').animate({
                opacity: 1
            }, 500);									 
        });
    })
	
    // Animation icon  setting 
    $('div.setting').hover(function(){
        $(this).find('img').addClass('gearhover');
    },function(){
        $(this).find('img').removeClass('gearhover');
    })
	
    // shoutcutBox   Hover
    $('.shoutcutBox').hover(function(){
        $(this).animate({
            left: '+=15'
        }, 200);
    },function(){
        $(this).animate({
            left: '0'
        }, 200);
    })
	
    // shoutcutBox   Hover
    $("#shortcut li").hover(function() {
        var e = this;
        $(e).find("a").stop().animate({
            marginTop: "-7px"
        }, 200, function() {
            $(e).find("a").animate({
                marginTop: "-5px"
            }, 200);
        });
    },function(){
        var e = this;
        $(e).find("a").stop().animate({
            marginTop: "2px"
        }, 200, function() {
            $(e).find("a").animate({
                marginTop: "0px"
            }, 200);
        });
    });
	
	

    // hide notify  Message with click
    $('#alertMessage').live('click',function(){
        $(this).stop(true,true).animate({
            opacity: 0,
            right: '-20'
        }, 500,function(){
            $(this).hide();
        });						 
    });
	
    

    function showTooltip(x, y, contents) {
        $('<div id="tooltip" >' + contents + '</div>').css({
            position: 'absolute',
            display: 'none',
            top: y -13,
            left: x + 10
        }).appendTo("body").show();
    }
	
});		


// Check browser fixbug
var mybrowser=navigator.userAgent;
if(mybrowser.indexOf('MSIE')>0){
    $(function() {	
        $('.formEl_b fieldset').css('padding-top', '0');
        $('div.section label small').css('font-size', '10px');
        $('div.section  div .select_box').css({
            'margin-left':'-5px'
        });
        $('.iPhoneCheckContainer label').css({
            'padding-top':'6px'
        });
        $('.uibutton').css({
            'padding-top':'6px'
        });
        $('.uibutton.icon:before').css({
            'top':'1px'
        });
        $('.dataTables_wrapper .dataTables_length ').css({
            'margin-bottom':'10px'
        });
    });
}
if(mybrowser.indexOf('Firefox')>0){
    $(function() {	
        $('.formEl_b fieldset  legend').css('margin-bottom', '0px');	
        $('table .custom-checkbox label').css('left', '3px');
    });
}	
if(mybrowser.indexOf('Presto')>0){
    $('select').css('padding-top', '8px');
}
if(mybrowser.indexOf('Chrome')>0){
    $(function() {	
        $('div.tab_content  ul.uibutton-group').css('margin-top', '-40px');
        $('div.section  div .select_box').css({
            'margin-top':'0px',
            'margin-left':'-2px'
        });
        $('select').css('padding', '6px');
        $('table .custom-checkbox label').css('left', '3px');
    });
}		
if(mybrowser.indexOf('Safari')>0){}		

function showError(str,delay){	
    if(delay){
        $('#alertMessage').removeClass('success info warning').addClass('error').html(str).stop(true,true).show().animate({
            opacity: 1,
            right: '10'
        }, 500,function(){
            $(this).delay(delay).animate({
                opacity: 0,
                right: '-20'
            }, 500,function(){
                $(this).hide();
            });																														   																											
        });
        return false;
    }
    $('#alertMessage').addClass('error').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '10'
    }, 500);	
}
function showSuccess(str,delay){
    if(delay){
        $('#alertMessage').removeClass('error info warning').addClass('success').html(str).stop(true,true).show().animate({
            opacity: 1,
            right: '10'
        }, 500,function(){
            $(this).delay(delay).animate({
                opacity: 0,
                right: '-20'
            }, 500,function(){
                $(this).hide();
            });																														   																											
        });
        return false;
    }
    $('#alertMessage').addClass('success').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '10'
    }, 500);	
}
function showWarning(str,delay){
    if(delay){
        $('#alertMessage').removeClass('error success  info').addClass('warning').html(str).stop(true,true).show().animate({
            opacity: 1,
            right: '10'
        }, 500,function(){
            $(this).delay(delay).animate({
                opacity: 0,
                right: '-20'
            }, 500,function(){
                $(this).hide();
            });																														   																											
        });
        return false;
    }
    $('#alertMessage').addClass('warning').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '10'
    }, 500);	
}
function showInfo(str,delay){
    if(delay){
        $('#alertMessage').removeClass('error success  warning').html(str).stop(true,true).show().animate({
            opacity: 1,
            right: '10'
        }, 500,function(){
            $(this).delay(delay).animate({
                opacity: 0,
                right: '-20'
            }, 500,function(){
                $(this).hide();
            });																														   																											
        });
        return false;
    }
    $('#alertMessage').addClass('info').html(str).stop(true,true).show().animate({
        opacity: 1,
        right: '10'
    }, 500);	
}
	  
function loading(name,overlay) { 
    $('body').append('<div id="overlay"></div><div id="preloader">'+name+'..</div>');
    if(overlay==1){
        $('#overlay').css('opacity',0.4).fadeIn(400,function(){
            $('#preloader').fadeIn(400);
        });
        return  false;
    }
    $('#preloader').fadeIn();	  
}
	   
function unloading() { 
    $('#preloader').fadeOut(400,function(){
        $('#overlay').fadeOut();
        $.fancybox.close();
    }).remove();
}
	
function imgRow(){	
    var maxrow=$('.albumpics').width();
    if(maxrow){
        maxItem= Math.floor(maxrow/160);
        maxW=maxItem*160;
        mL=(maxrow-maxW)/2;
        $('.albumpics ul').css({
            'width'	:	maxW	,
            'marginLeft':mL
        })
    }
}	
		  
function scrollmenu(){	
    if($(window).scrollTop()>=1){			   
        $("#header ").css("z-index", "50"); 
    }else{
        $("#header ").css("z-index", "47"); 
    }
}

function LResize(){	
    imgRow(); 
    scrollmenu();
    $("#shadowhead").show();
    if($(window).width()<=480) {
        $(' .albumImagePreview').show();
        $('.screen-msg').hide();
        $('.albumsList').hide();
    }
    if($(window).width()<=768){
        $('body').addClass('nobg');
        $('#content').css({
            marginLeft: "70px"
        });	
        $('#main_menu').removeClass('main_menu').addClass('iconmenu');
        $('#main_menu li').each(function() {	  
            var title=$(this).find('b').text();
            $(this).find('a').attr('title',title);		
        });
        $('#main_menu li a').find('b').hide();	
        $('#main_menu li ').find('ul').hide();
    }else{
        $('body').removeClass('nobg').addClass('dashborad');
        $('#content').css({
            marginLeft: "240px"
        });	
        $('#main_menu').removeClass('iconmenu ').addClass('main_menu');
        $('#main_menu li a').find('b').show();	
    }
    if($(window).width()>1024) {
    //	$('#main_menu').removeClass('iconmenu ').addClass('main_menu');
    //	$('#main_menu li a').find('b').show();	
    }
}