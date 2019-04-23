import $ from 'jquery';  
window.jQuery = $; window.$ = $;

import Popper from 'popper.js/dist/popper.min.js';
window.Popper = Popper;

require('bootstrap')

import 'letteringjs';
import textillate from 'textillate';

$.ajaxSetup ({cache: false});

$(function(){
	// === PAGE LOAD ===
	let current_url = window.location.href.split('/');
	$("a[href='"+current_url[current_url.length-1]+"']").addClass('actv');

	// silly name effect for fun
	$('#name').text('Vael Victus').textillate({
		in: {effect: 'fadeInLeft', delayScale: 1.1, delay: 60, sync: false}
	});

	// === JQUERY BINDS ===
	// clicking links
	$(document).on('click', 'nav a', function() {
		var url = $(this).attr("href");
		
		if ($(this).hasClass('dropdown-toggle') || url == '#') {
			return false;
		}

		if (!$(this).hasClass('navbar-brand')) {
			$('.actv').removeClass('actv');
			$(this).addClass('actv');	
		}

		// close toggler out on mobile when clicking nav link
		if (!$('.navbar-toggler').hasClass('collapsed'))
		$('.navbar-toggler').click()

		// push state
		window.history.pushState({url}, url, url);

		window.scrollTo(0, 0);
		
		// load content via AJAX
		$.post(url, {ajax: 1}, function(data) {
			$("#content").html(data);
		});
		
		return false;
	});

	// handling carousel image clicks:
	$(document).on('click', ".carousel-item a img, .pop img", function () {
	    let src = $(this).attr("src");
	    // cannot have display none + display flex, just set it on show
	    $("#quick_modal").html(`<img src='${src}'>`).css({opacity: 0, display: 'flex'}).animate({
            opacity: 1
        }, 400);
	});
    $(document).on('click', ".carousel-item a, .pop", function () {
        return false;
    });
    $(document).on('click', "#quick_modal", function () {
        $(this).fadeOut();
    });

	// Toggle BS dropdown on hover
	function toggleDropdown (e) {
	  let _d = $(e.target).closest('.dropdown'),
	      _m = $('.dropdown-menu', _d);
	  setTimeout(function(){
	    let shouldOpen = e.type !== 'click' && _d.is(':hover');
	    _m.toggleClass('show', shouldOpen);
	    _d.toggleClass('show', shouldOpen);
	    $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
	  }, e.type === 'mouseleave' ? 300 : 0);
	}

	$(document)
	  .on('mouseenter mouseleave','.dropdown',toggleDropdown)
	  .on('click', '.dropdown-menu a', toggleDropdown);
});	

window.onpopstate = function(event) {
	var clicked = (event.state) ? event.state.url : window.location.origin + window.location.pathname;

	$('.actv').removeClass('actv');
	$('a[href="'+clicked+'"]').addClass('actv');

	$.post(clicked, {ajax: 1}, function(data) {
		$("#content").html(data);
	});
}

window.log = function(m, severity = 0) {
    if (severity > 0 && (typeof m == 'string' || typeof m == 'number')) {

        const style = (severity) => {
            switch (severity) {
                case 1:
                return 'font-weight: bold; font-size: 1rem;'
                case 2:
                return 'color: #eb2f06; font-weight: bold; font-size: 1.2rem;'
                case 3:
                return 'color: red; font-weight: bold; font-size: 1.6rem;'
            }
        }

        console.log('%c '+m, style(severity));
    } else {
        console.log(m);
    }
}