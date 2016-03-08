


var visible = false;

function showmenu() {
	if(visible) {
		$(".primary-mobile-nav").css('display', 'none');
		visible = false;
	} else {
		$(".primary-mobile-nav").css('display', 'block');
		visible = true;
	}
}


