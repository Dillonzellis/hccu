(function ($) {
	
	
	// Sticky Footer
	var bumpIt = function() {
		$('body').css('padding-bottom', $('.footer').outerHeight(true));
		$('.footer').addClass('sticky-footer');
	},
	didResize = false;

	$(window).resize(function() {
		didResize = true;
	});
	setInterval(function() {
		if(didResize) {
			didResize = false;
			bumpIt();
		}
	}, 250);

	// Scripts which runs after DOM load

	$(document).ready(function () {
	$('img[src*=".svg"]').each(function() {
	   var $img = $(this),
	   imgURL = $img.attr('src'),
	   imgClass = $img.attr('class'),
		imgTitle = $img.attr('title'),
		imgAlt = $img.attr('alt'),
	   imgID  = $img.attr('id');
	   $.get(imgURL, function(data) {
		// Get the SVG tag, ignore the rest
		var $svg = $(data).find('svg');
		// Add replaced image's ID to the new SVG
		if(typeof imgID !== 'undefined') {
		 $svg = $svg.attr('id', imgID);
		}
		if(typeof imgClass !== 'undefined') {
		 $svg = $svg.attr('class', imgClass);
		$svg = $svg.attr('title', imgTitle);
		$svg = $svg.attr('alt', imgAlt);
		}
		$svg = $svg.removeAttr('xmlns:a');
		$img.replaceWith($svg);
	   }, 'xml');
	  });
		

		//Remove placeholder on click
		$("input,textarea").each(function () {
			$(this).data('holder', $(this).attr('placeholder'));

			$(this).focusin(function () {
				$(this).attr('placeholder', '');
			});

			$(this).focusout(function () {
				$(this).attr('placeholder', $(this).data('holder'));
			});
		});

		//Make elements equal height
		$('.matchHeight').matchHeight();


		// Add fancybox to images
		$('.gallery-item a').attr('rel', 'gallery');
		$('a[rel*="album"], .gallery-item a, .fancybox, a[href$="jpg"], a[href$="png"], a[href$="gif"]').fancybox({
			minHeight: 0,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});

		function postLink(link) {
			var f = document.createElement("form");
			f.method = 'post';
			f.action = link;
			document.body.appendChild(f);
			f.submit();
		}

		$(".main-content .menu a").wrapInner("<span class='menu-link'></span>");

		$(".top-bar .is-dropdown-submenu .is-dropdown-submenu li a").wrapInner("<span></span>");

		$('.submenu a').on('click', function(){
			$('.submenu').removeClass('js-dropdown-active');
		});

		$('.open a[href*="#"]').on('click', function(){
			var clickb = $(this).attr('href');
			$overlay.addClass('state-show');
			$modal.removeClass('state-leave');
			$('body').find($(clickb).addClass('state-appear'));
			event.preventDefault()
		});

		$modal = $('.modal-frame');
		$overlay = $('.modal-overlay');


		/* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
		$modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
			if($modal.hasClass('state-leave')) {
				$modal.removeClass('state-leave');
			}
		});

		$('.close').on('click', function(){
			$overlay.removeClass('state-show');
			$modal.removeClass('state-appear');
		});

		$('.opens').on('click', function(){
			$overlay.removeClass('state-show');
			$modal.removeClass('state-appear');
		});

		$('.closed').on('click', function(){
			$overlay.removeClass('state-show');
			$modal.removeClass('state-appear');
		});

		// Sticky footer
		bumpIt();


	});


	// Scripts which runs after all elements load

	$(window).load(function () {

		//jQuery code goes here


	});

	// Scripts which runs at window resize

	$(window).resize(function () {

		//jQuery code goes here


	});

}(jQuery));
