// JavaScript Document
$(document).ready(function() {

	var debounce;

	var li_targets = new Array();
	li_targets[0] = "li#dropmenuli1";
	li_targets[1] = "li#dropmenuli2";
	li_targets[2] = "li#dropmenuli3";
	li_targets[3] = "li#dropmenuli4";
	li_targets[4] = "li#dropmenuli5";

	var div_targets = new Array();
	div_targets[0] = "div#dropmenu1";
	div_targets[1] = "div#dropmenu2";
	div_targets[2] = "div#dropmenu3";
	div_targets[3] = "div#dropmenu4";
	div_targets[4] = "div#dropmenu5";

	var div_targets_left = new Array();
	div_targets_left[0] = parseInt(document.getElementById("dropmenuli1").offsetLeft) + "px";
	div_targets_left[1] = parseInt(document.getElementById("dropmenuli2").offsetLeft) + "px";
	div_targets_left[2] = parseInt(document.getElementById("dropmenuli3").offsetLeft) + "px";
	div_targets_left[3] = parseInt(document.getElementById("dropmenuli4").offsetLeft) + "px";
	div_targets_left[4] = parseInt(document.getElementById("dropmenuli5").offsetLeft) + "px";

	var multiplier_down = 50;
	var multiplier_up = 100;

	var time_down = new Array();
	time_down[0] = 2 * multiplier_down;
	time_down[1] = 8 * multiplier_down;
	time_down[2] = 10 * multiplier_down;
	time_down[3] = 5 * multiplier_down;
	time_down[4] = 2 * multiplier_down;

	var time_up = new Array();
	time_up[0] = 2 * multiplier_up;
	time_up[1] = 8 * multiplier_up;
	time_up[2] = 10 * multiplier_up;
	time_up[3] = 5 * multiplier_up;
	time_up[4] = 2 * multiplier_up;

	$(li_targets[0]).mouseenter(function() {
		if ($(div_targets[0]).css("display") != "block") {
			$(div_targets[0]).css("left", div_targets_left[0]);
			$(div_targets[0]).slideDown(time_down[0]);
			clearTimeout(debounce);
		} else {
			$(div_targets[0]).stop();
			$(div_targets[0]).css("display", "none");
			$(div_targets[0]).slideDown(time_down[3]);
		}
	});

	$(li_targets[0]).mouseleave(function() {
		if ($(div_targets[0]).is(':hover')) {
			;
		} else {
			closeMenu1();
		}
	});

	$(li_targets[1]).mouseenter(function() {
		if ($(div_targets[1]).css("display") != "block") {
			$(div_targets[1]).css("left", div_targets_left[1]);
			$(div_targets[1]).slideDown(time_down[1]);
			clearTimeout(debounce);
		} else {
			$(div_targets[1]).stop();
			$(div_targets[1]).css("display", "none");
			$(div_targets[1]).slideDown(time_down[3]);
		}
	});

	$(li_targets[1]).mouseleave(function() {
		if ($(div_targets[1]).is(':hover')) {
			;
		} else {
			closeMenu2();
		}
	});

	$(li_targets[2]).mouseenter(function() {
		if ($(div_targets[2]).css("display") != "block") {
			$(div_targets[2]).css("left", div_targets_left[2]);
			$(div_targets[2]).slideDown(time_down[2]);
			clearTimeout(debounce);
		} else {
			$(div_targets[2]).stop();
			$(div_targets[2]).css("display", "none");
			$(div_targets[2]).slideDown(time_down[3]);
		}
	});

	$(li_targets[2]).mouseleave(function() {
		if ($(div_targets[2]).is(':hover')) {
			;
		} else {
			closeMenu3();
		}
	});

	$(li_targets[3]).mouseenter(function() {
		if ($(div_targets[3]).css("display") != "block") {
			$(div_targets[3]).css("left", div_targets_left[3]);
			$(div_targets[3]).slideDown(time_down[3]);
			clearTimeout(debounce);
		} else {
			$(div_targets[3]).stop();
			$(div_targets[3]).css("display", "none");
			$(div_targets[3]).slideDown(time_down[3]);
		}
	});

	$(li_targets[3]).mouseleave(function() {
		if ($(div_targets[3]).is(':hover')) {
			;
		} else {
			closeMenu4();
		}
	});

	$(li_targets[4]).mouseenter(function() {
		if ($(div_targets[4]).css("display") != "block") {
			$(div_targets[4]).css("left", div_targets_left[4]);
			$(div_targets[4]).slideDown(time_down[4]);
			clearTimeout(debounce);
		} else {
			$(div_targets[4]).stop();
			$(div_targets[4]).css("display", "none");
			$(div_targets[4]).slideDown(time_down[3]);
		}
	});

	$(li_targets[4]).mouseleave(function() {
		if ($(div_targets[4]).is(':hover')) {
			;
		} else {
			closeMenu5();
		}
	});

	$(div_targets[0]).mouseleave(function() {
		closeMenu1();
	});

	$(div_targets[1]).mouseleave(function() {
		closeMenu2();
	});

	$(div_targets[2]).mouseleave(function() {
		closeMenu3();
	});

	$(div_targets[3]).mouseleave(function() {
		closeMenu4();
	});

	$(div_targets[4]).mouseleave(function() {
		closeMenu5();
	});

	var closeMenu1 = function(dropmenu) {
		$('div#dropmenu1').slideUp(time_up[0]);
		clearTimeout(debounce);
	}
	var closeMenu2 = function(dropmenu) {
		$('div#dropmenu2').slideUp(time_up[1]);
		clearTimeout(debounce);
	}
	var closeMenu3 = function(dropmenu) {
		$('div#dropmenu3').slideUp(time_up[2]);
		clearTimeout(debounce);
	}
	var closeMenu4 = function(dropmenu) {
		$('div#dropmenu4').slideUp(time_up[3]);
		clearTimeout(debounce);
	}
	var closeMenu5 = function(dropmenu) {
		$('div#dropmenu5').slideUp(time_up[4]);
		clearTimeout(debounce);
	}
});
