var a=30, b=25, c=20, d=25, f=0;
function poll(){
 	$('#form').hide();
 	$('#ul').fadeIn();
	$('#a').animate({'width':a+'%'}, 300);
	$('#b').animate({'width':b+'%'}, 300);
	$('#c').animate({'width':c+'%'}, 300);
	$('#d').animate({'width':d+'%'}, 300);
}
$(document).ready(function(){
	$('#sub').click(function(){
		if(!f)
			alert("Please select an option first");
		else
			poll();
	});
	$('#un1').click(function() {
		$('.check').hide();
		$('.un').show();
		$('#un1').hide();
		$('#ch1').show();
		f=1;
	})
	$('#un2').click(function() {
		$('.check').hide();
		$('.un').show();
		$('#un2').hide();
		$('#ch2').show();
		f=2;
	})
	$('#un3').click(function() {
		$('.check').hide();
		$('.un').show();
		$('#un3').hide();
		$('#ch3').show();
		f=3;
	})
	$('#un4').click(function() {
		$('.check').hide();
		$('.un').show();
		$('#un4').hide();
		$('#ch4').show();
		f=4;
	})
});