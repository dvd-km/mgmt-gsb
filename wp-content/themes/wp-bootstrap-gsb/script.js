/*  =========================================================================
    Carousel
    ==========================================================================   */
    //add data for the slide order and set up
    $("[id^=gallery-] .gallery-item:first-child").attr("data-class", 1).attr("data-position", 1);
    $("[id^=gallery-] .gallery-item:nth-child(2)").attr("data-class", 2).attr("data-position", 2);
    $("[id^=gallery-] .gallery-item:nth-child(3)").attr("data-class", 3).attr("data-position", 3);
    $("[id^=gallery-] .gallery-item:nth-child(4)").attr("data-class", 4).attr("data-position", 4);
    $("[id^=gallery-] .gallery-item:nth-child(5)").attr("data-class", 5).attr("data-position", 5);
    $("[id^=gallery-] .gallery-item:nth-child(6)").attr("data-class", 6).attr("data-position", 6);
    $("[id^=gallery-] .gallery-item:nth-child(7)").attr("data-class", 7).attr("data-position", 7);
    $("[id^=gallery-] .gallery-item:nth-child(8)").attr("data-class", 8).attr("data-position", 8);
    $("[id^=gallery-] .gallery-item:nth-child(9)").attr("data-class", 9).attr("data-position", 9);
    $("[id^=gallery-] .gallery-item:nth-child(10)").attr("data-class", 10).attr("data-position", 10);
    $('div[id^=gallery-]').find('br').remove();//remove wordpress-generated columns

    $("div[id^=gallery-]").each(function(){
            var currentGallery = $(this);
            var currentImages = currentGallery.children('.gallery-item').length;

            function slideTransition() {
                if (currentImages > 1) {
                    // currentGallery.find("[data-position=1]").hide().appendTo(currentGallery).fadeIn(200);
                     currentGallery.find('.gallery-item').css({'transform': 'translateX(0%)', 'z-index':'-100', 'display':'block'}); 
                     // currentGallery.find('[data-position=1]').css({'transform': 'translateX(0)', 'z-index':'1000'}); 
                    currentGallery.find('[data-position=1]').hide().appendTo(currentGallery).css({'transform': 'translateX(-100%)', 'display':'block', 'z-index':'1000'});  
                    $.each(currentGallery.find('.gallery-item'), function (index, dp_item) {
                        $(dp_item).attr('data-position', index + 1);
                    });
                }
            }
            
            //slide interaction 
            if (currentImages > 1) {
                setInterval(function(){ 
                        slideTransition();
                }, 7000);
            }
        
    });
$('.navbar-toggler').click(function(){
  if ($('#main-nav').hasClass('show')) {
    $('#content').removeClass('site-content-open').addClass('site-content');
    console.log('close');
  } else {
    $('#content').removeClass('site-content').addClass('site-content-open');

    console.log('open');
  }

});



/*  =========================================================================
    mobile menu
    ==========================================================================   */
$(document).ready(function(){
    $('.navbar-light .navbar-toggler-icon').append('<span></span><span></span><span></span><span></span>');
    $('.navbar-light .navbar-toggler-icon').click(function(){
        $(this).toggleClass('open');
    });
});


/*  =========================================================================
    smooth transition
    ==========================================================================   */

   
    $(document).ready(function(){
    //   $(document).ready(function () {

    //     var hash = window.location.hash;
    //     scrollToElem(hash);
    
    //     $('a.page-scroll').on('click', function (event) {
    //         var $anchor = $(this);
    //         var href = $anchor.attr('href');
    //         scrollToElem(href);
    //         event.preventDefault();
    //     });
    // });
    
    // var scrollToElem = function (hash) {
    //     var target = hash;
    //     $('html, body').stop().animate({
    //         scrollTop: ($(hash).offset().top - 110)
    //     }, 1000, 'easeInOutExpo');
    // };


//     let anchorlinks = document.querySelectorAll('a[href^="#"]')
//     for (let item of anchorlinks) { // relitere 

        
//         item.addEventListener('click', (e)=> {
         
// //id lowercase?
//             // var hashval_block = $('[id^=grid-]').getAttribute('id')
//             // console.log(hashval);
//             // hashval_block = hashval_block.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
//             // $('[id^=grid-]').setAttribute('id', '#' + hashval_block);

//             var hashval = item.getAttribute('href')
//             hashval = hashval.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
//             item.setAttribute('href', '#' + hashval);
            


       
//             let target = document.querySelector(hashval)
           
//             target.scrollIntoView({
//                 behavior: 'smooth'
//             })
//             history.pushState(null, null, hashval)
//             e.preventDefault()
//         })
//     }
    
// });



// // Scroll to specific values
// // scrollTo is the same
// window.scroll({
//     top: 2500, 
//     left: 0, 
//     behavior: 'smooth'
//   });
  
//   // Scroll certain amounts from current position 
//   window.scrollBy({ 
//     top: 100, // could be negative value
//     left: 0, 
//     behavior: 'smooth' 
//   });
  
//   // Scroll to a certain element
//   document.querySelector('.hello').scrollIntoView({ 
//     behavior: 'smooth' 
//   });





// Select all links with hashes.   // Remove links that don't actually link to anything
$('a[href*="#"]').not('[href="#"]').not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: (target.offset().top)
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  //remove menu slug blank
// function alter_slug( $content ) {
// 	$content = force_balance_tags( $content );
// 	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
// 	$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
// 	return $content;
// }
// add_filter('the_content', 'alter_slug', 20, 1);


});


/*  =========================================================================
    others
    ==========================================================================   */
    $(document).ready(function(){
    //remove empty p, a tags
        $('a').each(function() {
            var $this = $(this);
            if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
                $this.remove();
        });

        $('p').each(function() {
            var $this = $(this);
            if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
                $this.remove();
        });




    /*cal*/

      var month = new Array();
      month[0] = "January";
      month[1] = "February";
      month[2] = "March";
      month[3] = "April";
      month[4] = "May";
      month[5] = "June";
      month[6] = "July";
      month[7] = "August";
      month[8] = "September";
      month[9] = "October";
      month[10] = "November";
      month[11] = "December";

      var d = new Date();
      var n = month[d.getMonth()];
      document.getElementById("month").innerHTML = n;
      console.log(month);

    });


    //testimonial slideshow

    $(document).ready(function () {
      //rotation speed and timer
      var speed = 5000;
      
      var run = setInterval(rotate, speed);
      var slides = $('.slide');
      var container = $('#slides ul');
      var elm = container.find(':first-child').prop("tagName");
      var item_width = container.width();
      var previous = 'prev'; //id of previous button
      var next = 'next'; //id of next button
      slides.width(item_width); //set the slides to the correct pixel width
      container.parent().width(item_width);
      // container.width(slides.length * item_width); //set the slides container to the correct total width
      container.find(elm + ':first').before(container.find(elm + ':last'));
      resetSlides();
      
      
      //if user clicked on prev button
      
      $('#buttons a').click(function (e) {
          //slide the item
          
          if (container.is(':animated')) {
              return false;
          }
          if (e.target.id == previous) {
              container.stop().animate({
                  'left': 0
              }, 1500, function () {
                  container.find(elm + ':first').before(container.find(elm + ':last'));
                  resetSlides();
              });
          }
          
          if (e.target.id == next) {
              container.stop().animate({
                  'left': item_width * -2
              }, 1000, function () {
                  container.find(elm + ':last').after(container.find(elm + ':first'));
                  resetSlides();
              });
          }
          
          //cancel the link behavior            
          return false;
          
      });
      
      //if mouse hover, pause the auto rotation, otherwise rotate it    
      container.parent().mouseenter(function () {
          clearInterval(run);
      }).mouseleave(function () {
          run = setInterval(rotate, speed);
      });
      
      
      function resetSlides() {
          //and adjust the container so current is in the frame
          container.css({
              'left': -1 * item_width
          });
      }
      
  });
  //a simple function to click next link
  //a timer will call this function, and the rotation will begin
  
  function rotate() {
      $('#next').click();
  }

  /*spoiler*/

  // Spoiler
	// $('body:not(.su-other-shortcodes-loaded)').on('click keypress', '.su-spoiler-title', function(e) {
	// 	var $title = $(this),
	// 		$spoiler = $title.parent(),
	// 		bar = ($('#wpadminbar').length > 0) ? 28 : 0;
	// 	// Open/close spoiler
	// 	$spoiler.toggleClass('su-spoiler-closed');
	// 	// Close other spoilers in accordion
	// 	$spoiler.parent('.su-accordion').children('.su-spoiler').not($spoiler).addClass('su-spoiler-closed');
	// 	// Scroll in spoiler in accordion
	// 	if ($(window).scrollTop() > $title.offset().top) $(window).scrollTop($title.offset().top - $title.height() - bar);
	// 	e.preventDefault();
	// });