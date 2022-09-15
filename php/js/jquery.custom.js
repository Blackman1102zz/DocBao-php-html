//alert("js trong js->start");

$(document).ready(function() {
	//alert("js trong script->ready");
	$('#searchBtn').click(function(){
		check = $('#mainImg').css('display');
		//alert (check);
		if (check == "none"){
			$('#mainImg').show(100);
		}else{
			$('#mainImg').hide(100);
		}
	});
});
//alert("js trong js->end");