(function($) {

	var	$window = $(window),
		$body = $('body'),
		$menu = $('#menu'),
		$sidebar = $('#sidebar'),
		$main = $('#main');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Menu.
		$menu
			.appendTo($body)
			.panel({
				delay: 500,
				hideOnClick: true,
				hideOnSwipe: true,
				resetScroll: true,
				resetForms: true,
				side: 'right',
				target: $body,
				visibleClass: 'is-menu-visible'
			});

	// Search (header).
		var $search = $('#search'),
			$search_input = $search.find('input');

		$body
			.on('click', '[href="#search"]', function(event) {

				event.preventDefault();

				// Not visible?
					if (!$search.hasClass('visible')) {

						// Reset form.
							$search[0].reset();

						// Show.
							$search.addClass('visible');

						// Focus input.
							$search_input.focus();

					}

			});

		$search_input
			.on('keydown', function(event) {

				if (event.keyCode == 27)
					$search_input.blur();

			})
			.on('blur', function() {
				window.setTimeout(function() {
					$search.removeClass('visible');
				}, 100);
			});

	// Intro.
		var $intro = $('#intro');

		// Move to main on <=large, back to sidebar on >large.
			breakpoints.on('<=large', function() {
				$intro.prependTo($main);
			});

			breakpoints.on('>large', function() {
				$intro.prependTo($sidebar);
			});

	function getRandomInt(max) {
  		return Math.floor(Math.random() * max);
	}

	function pickColor(currentColor) {
		var newColor = getRandomInt(5);

		switch(newColor) {
			case 0:
				return "#F87474";
			case 1:
				return "#3AB0FF";
			case 2:
				return "#FFB562";
			case 3:
				return "#92BA92";
			case 4:
				return "#CA82FF";
		}
	}

	$("a").hover(
	  function () {
	     	$(this).css("color", pickColor());
	  }, 
	  function () {
	     	$(this).css("color", "#525E75");
  }
);
	$("button.like").hover(
	  function () {
	     	$(this).css("color", pickColor());
	  }, 
	  function () {
	     	$(this).css("color", "#525E75");
  }
);
	$(".button").hover(
	  function () {
	  		var boxColor = pickColor();
	     	$(this).css("color", "#525E75");
	     	$(this).css("background-color", boxColor);
	     	$(this).css("box-shadow", "inset 0 0 0 1px "+boxColor+"");
	  }, 
	  function () {
	     	$(this).css("color", "#525E75");
	     	$(this).css("box-shadow", "inset 0 0 0 1px #525E75");
	     	$(this).css("background-color", "transparent");
  }
);


	$( "input.fcf-form-control" ).hover(function() {
		var boxColor = pickColor();
		$(this).css("border-color", boxColor);
	});

	$( ".fcf-input-group textarea" ).hover(function() {
		var boxColor = pickColor();
		$(this).css("border-color", boxColor);
	});

	$("a.subscribe-button").hover(
	  function () {
	  		var boxColor = pickColor();
	     	$(this).css("color", "#525E75");
	     	$(this).css("background-color", boxColor);
	  }, 
	  function () {
	     	$(this).css("color", "#525E75");
	     	$(this).css("background-color", "transparent");
  }
);

	$("a.logo-word").hover(
	  function () {
	     	$(this).css("color", "#525E75");
	  }, 
	  function () {
	    $(this).css("color", pickColor());
  }
);

	$(window).on('load', function () {
	    $("a.logo-word").css("color", pickColor());
  }
);

})(jQuery);