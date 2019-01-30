$(document).ready(function(){
	$('.one').css('left','calc(50% + 20px)');
	$('.one').css('top','calc(40% + 20px)');
	setTimeout(function() {
		$('.two').css('left','50%');
		$('.two').css('top','calc(40% + 40px)');
	}, 1000);
	setTimeout(function() {
		$('#one').css('left','calc(50% - 20px)');
		$('#one').css('top','calc(40% + 20px)');
	}, 1500);
	setTimeout(function() {
		$('#two').css('left','calc(50% + 20px)');
	$('#two').css('top','calc(40% + 20px)');
	}, 2000);
	
	setTimeout(function() {
		$('.three').css('left','50%');
		$('.three').css('top','calc(40% + 40px)');
	}, 2500);
	setTimeout(function() {
		$('.four').css('left','calc(50% - 20px)');
		$('.four').css('top','calc(40% + 20px)');
	}, 3000);
	setTimeout(function() {
		$('#loader').css('opacity','0');
	}, 3500);
	setTimeout(function() {
		$('#loader').css('z-index','-10');
	}, 4500);
	var he=$('.navi').css('height');
    $(".hor").click(function(){
    	$('.navi').css('height',he);
    	$('#nav').hide();
    	$('#virt').css('transform','translate(-400px,150px)');
    	$('#ham').css('z-index','11');
    	$('body').css('overflow-y','hidden');
    });
    $("#menu").click(function(){
    	$('#virt').css('transform','none');
    	$('body').css('overflow-y','initial');
    	$('#ham').css('z-index','-1');
    	$('#nav').show();
    });
    $(".hor").hover(function() {
    	$(this).css('color','#fe2c47');
    },
    function() {
    	$(this).css('color','#212121');
    });
    $("#menu").hover(function() {
    	$(this).css('color','#212121');
    },
    function() {
    	$(this).css('color','#fff');
    });
    var col=$('#nav').css('background');
    var newHe=he.split('px')[0];
    newHe-=20;
    $(window).scroll(function() {
    	if($(document).scrollTop()){
    		$('#nav').css('background','white');
    		$('.navi').css('height',newHe+'px');
    	}
    	else{
    		$('#nav').css('background',col);
    		$('.navi').css('height',he);
    	}
    });
});