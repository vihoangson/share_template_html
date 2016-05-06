/**
* Stylesheet toggle variation on styleswitch stylesheet switcher.
* Built on jQuery.
* Under an CC Attribution, Share Alike License.
* By Kelvin Luck ( http://www.kelvinluck.com/ )
**/

jQuery(document).ready(function() {
		
	jQuery('.open-close').click(function() {
		if (jQuery(this).parent().css('left') == '-158px') {
			jQuery(this).parent().animate({
				"left": "0"
			}, 300);
		} else {
			jQuery(this).parent().animate({
				"left": "-158px"
			}, 300);
		}
	});
	

	$(window).resize(function(){
		if ($(this).width() < 768 ) {
		$('.theme-changer-wrap').css({display: 'none'});
		}
		
		if ($(this).width() > 768 ) {
		$('.theme-changer-wrap').css({display: 'block'});
		}		
	});	
	

	$('a.pat1').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg1.png")');

	$.cookie('pattern', 'pat1', { expires: 7});
	});
	

	$('a.pat2').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg2.png")');

	$.cookie('pattern', 'pat2', { expires: 7});
	});	
	
	$('a.pat3').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg8.png")');

	$.cookie('pattern', 'pat3', { expires: 7});
	});		
	
	$('a.pat4').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg4.png")');

	$.cookie('pattern', 'pat4', { expires: 7});
	});	

	$('a.pat5').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg9.png")');

	$.cookie('pattern', 'pat5', { expires: 7});
	});	

	$('a.pat6').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg5.png")');

	$.cookie('pattern', 'pat6', { expires: 7});
	});	

	$('a.pat7').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg6.png")');

	$.cookie('pattern', 'pat7', { expires: 7});
	});

	$('a.pat8').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg11.png")');

	$.cookie('pattern', 'pat8', { expires: 7});
	});

	$('a.pat9').click(function() {
		$(".pattern1").css('background-image', 'url("images/bg/bg10.png")');

	$.cookie('pattern', 'pat9', { expires: 7});
	});
	
	
	var d = $.cookie('pattern');
	 if (d == 'pat1') {
			$(".pattern1").css('background-image', 'url("images/bg/bg1.png")');
	}	
	
	else if (d == 'pat2') {
			$(".pattern1").css('background-image', 'url("images/bg/bg2.png")');
	}	
	
	else if (d == 'pat3') {
			$(".pattern1").css('background-image', 'url("images/bg/bg8.png")');
	}		
	
	else if (d == 'pat4') {
			$(".pattern1").css('background-image', 'url("images/bg/bg4.png")');
	}	
	
	else if (d == 'pat5') {
			$(".pattern1").css('background-image', 'url("images/bg/bg9.png")');
	}	
	
	else if (d == 'pat6') {
			$(".pattern1").css('background-image', 'url("images/bg/bg5.png")');
	}	
	
	else if (d == 'pat7') {
			$(".pattern1").css('background-image', 'url("images/bg/bg6.png")');
	}	
	
	else if (d == 'pat8') {
			$(".pattern1").css('background-image', 'url("images/bg/bg11.png")');
	}	
	
	else if (d == 'pat9') {
			$(".pattern1").css('background-image', 'url("images/bg/bg10.png")');
	}		
});

(function($)
	{
		// Local vars for toggle
		var availableStylesheets = [];
		var activeStylesheetIndex = 0;
		
		// To loop through available stylesheets
		$.stylesheetToggle = function()
		{
			activeStylesheetIndex ++;
			activeStylesheetIndex %= availableStylesheets.length;
			$.stylesheetSwitch(availableStylesheets[activeStylesheetIndex]);
		};
		
		// To switch to a specific named stylesheet
		$.stylesheetSwitch = function(styleName)
		{
			$('link[@rel*=style][title]').each(
				function(i) 
				{
					this.disabled = true;
					if (this.getAttribute('title') == styleName) {
						this.disabled = false;
						activeStylesheetIndex = i;
					}
				}
			);
			createCookie('style', styleName, 365);
		};
		
		// To initialise the stylesheet with it's 
		$.stylesheetInit = function()
		{
			$('link[rel*=style][title]').each(
				function(i) 
				{
					availableStylesheets.push(this.getAttribute('title'));
				}
			);
			var c = readCookie('style');
			if (c) {
				$.stylesheetSwitch(c);
			}
		};
	}
)(jQuery);


// cookie functions http://www.quirksmode.org/js/cookies.html
function createCookie(name,value,days)
{
	if (days)
	{
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name)
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}
function eraseCookie(name)
{
	createCookie(name,"",-1);
}
// /cookie functions