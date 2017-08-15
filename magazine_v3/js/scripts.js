$(document).ready(function () {
	

	$('.open-overlay').delay(2000).fadeOut(500, function(){});
	 $('.all').delay(500).fadeTo(500, 1);
	
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    
    
  document.addEventListener('touchmove', function(event) {
        event = event.originalEvent || event;
        if (event.scale !== 1) {
           event.preventDefault();
        }
    }, false);
  
  $(window).scroll(function(){
    
    $(".fadey").css("opacity", 1.0 - $(window).scrollTop() / 1500);
    
  });
    
     /* Accordion */
    
    
    var $container = jQuery('.acc-body'), $acc_head = jQuery('.acc-head');

		$acc_head.last().addClass('last');
		
		$acc_head.on('click', function(e) {
			if( jQuery(this).next().is(':hidden') ) {
                $acc_head.removeClass('active').next().slideUp(500);
				jQuery(this).toggleClass('active').next().slideToggle(300);
			}
          else{
            jQuery(this).toggleClass('active').next().slideToggle(300);
          }
			e.preventDefault();
		});
    

    /*Menu Controls*/
    $(".menu-btn").click(function () {
        $(".menu").addClass('show-menu');
        /* $('.all').addClass('fade'); */
        $(".menu-layer").fadeIn(500);
    });

    $(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function () {
        $(".menu").removeClass('show-menu');
        /* $('.all').removeClass('fade'); */
        $(".menu-layer").delay(250).fadeOut(500);
    });
    
    
     $(".menu ul li a").click(function () {
	    $(".menu ul li a").stop().removeClass('clicked'); 
	 	$(this).stop().addClass('clicked');
     });
    

    /*Audio Controls*/
    

    $(".play-audio").click(function () {
	    $('.audio-box').fadeIn();
        $('.myAudio').attr("src", $(this).attr("audioUrl"));
        $(".footer-audio").addClass('show-audio');
        document.getElementById('myAudio').play();
        $('.audioplayer').addClass("audioplayer-playing");
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeOut(500);
    });

    $(".audio-box .hide-audio").click(function () {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").addClass('show-side');
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut();
    });

    $(".show-right").click(function () {
	    $('.audio-box').fadeIn();
        $(".footer-audio").addClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeIn(500);
    });

    $(".close-audio, .vid-link").click(function () {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut();
    });

    $(function () {
        $('.myAudio').audioPlayer();
    });

    /*Video Controls*/

	function closeAudio() {
		$(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
        $('.audio-box').fadeOut();
	}
	
	$( ".movie-btn" ).click(function() {
        $('.myVideo').attr("src", $(this).attr("vidUrl"));
        document.getElementById('myVideo').play();
        $('.myVideo').removeClass("hide");
        $('.myVideo').addClass("show");
        $('.youTube').addClass("hide");
        $('.youTube').removeClass("show");
        closeAudio();
           });
    
    $( ".tube-link" ).click(function() {
        $('.youTube').removeClass("hide");
        $('.youTube').addClass("show");
        $('.myVideo').addClass("hide");
        $('.myVideo').removeClass("show");
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        
         closeAudio();
     });
    
    $(".widscreen-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show");
    });
    
    $(".standard-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show");
    });
    
     $(".sixteen-nine-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show");
    });
    
    $(".pal-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".pal").addClass("show");
    });
    
    $(".vintage-wide-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".vintage-wide").addClass("show");
    });
    
    
    $(".close").click(function() { 
        $(".modal-vid").fadeOut(500);
        /*document.getElementById('myVideo').pause();*/
        $('.youTube, .myVideo').attr('src', '');
    });
	

    /* Image Pop Controls*/

      $(".pop-image").click(function () {
        $('.myImage').attr("src", $(this).attr("imgUrl"));
        $('.media-overlay, .close-media, .img-pop-box').fadeIn(500, function () {
            $('.img-holder img').fadeIn(500);
        });
        
    });

    $(".close-media, .img-holder img").click(function () {
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        $('.media-overlay, .tube-frame, .close-media, .video-box, .img-holder img').fadeOut(500, function () {
            $('.img-pop-box').fadeOut(500);
            $('.myImage').attr("src", 'images/place_holder.jpg');
        });
        document.getElementById('myVideo').pause();
    
    });
    
  
    /*Parallax*/

    (function ($) {

        $.fn.parallax = function (options) {

            var windowHeight = $(window).height();

            // Establish default settings
            var settings = $.extend({
                speed: 0.15
            }, options);

            // Iterate over each object in collection
            return this.each(function () {

                // Save a reference to the element
                var $this = $(this);

                // Set up Scroll Handler
                $(document).scroll(function () {

                    var scrollTop = $(window).scrollTop();
                    var offset = $this.offset().top;
                    var height = $this.outerHeight();

                    // Check if above or below viewport
                    if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
                        return;
                    }

                    var yBgPosition = Math.round((offset - scrollTop) * settings.speed);

                    // Apply the Y Background Position to Set the Parallax Effect
                    $this.css('background-position', 'center ' + yBgPosition + 'px');
                });
            });
        };
    })(jQuery);

    $('.parallax').parallax({
        speed: -0.125
    });
});

window.document.onkeydown = function (e) {
    if (!e) e = event;
    if (e.keyCode == 27) {
	   
	    $('.img-pop-box,.img-holder img, .close-media').fadeOut(500, function () {
            $('.media-overlay').fadeOut(500);
            $('.myImage').attr("src", 'images/place_holder.jpg'); 
        }); 
	  

      $('.youTube, .myVideo').attr('src', '');
      $('.modal-vid').fadeOut(500);
       document.getElementById('myVideo').pause();

        $(".menu").removeClass('show-menu');
        $('body').removeClass('fade');
        $('.all').removeClass('fade');
        $(".menu-layer").delay(250).fadeOut(500);

        $('.btt-footer').fadeIn(500);
    }

    if (!e) e = event;
    if (e.keyCode == 39) {
        $(".menu").addClass('show-menu');
        /* $('.all').addClass('fade'); */
        $(".menu-layer").fadeIn(500);
    }

    if (!e) e = event;
    if (e.keyCode == 37) {
        $(".menu").removeClass('show-menu');
        /* $('.all').removeClass('fade'); */
        $(".menu-layer").delay(250).fadeOut(500);
    }
};

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 40) {
        $('.btt-footer').fadeIn(500);
    } else {
        $('.btt-footer').fadeOut(500);
    }
});
