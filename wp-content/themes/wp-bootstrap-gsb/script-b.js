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
            // var firstSlide = currentGallery.find("[data-class=1]");

            function detect_currentslide() {
                    // var currentGallery = $(this);
                        //print the slide# info
                        // var totalSlide = currentGallery.find(".gallery-item").length;
                        // var currentSlide = currentGallery.find("[data-position=1]");
                        // var currentSlidenumber = currentSlide.attr('data-class');
                        // randomBG = Math.floor(Math.random() * Math.floor(3)) + 1; 
                        // currentGallery.next('#dp-nav').find('#dp-num').empty().append(currentSlidenumber + '/' + totalSlide);
                        //filter images and add random backgrounds
                        // currentGallery.find('.gallery-item').css({'display': 'none'}); 
                        // currentGallery.find('[data-position=1]').css({'display': 'block'});  
                        // currentGallery.find('.gallery-item').css({'transform': 'translateX(-100%)', 'z-index':'-100'}); 
                        // currentGallery.find('[data-position=1]').css({'transform': 'translateX(0)',  'z-index':'1000'});  
            }
    
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

            detect_currentslide(); 
            
            //slide interaction 
            if (currentImages > 1) {
                setInterval(function(){ 
                        slideTransition();
                        detect_currentslide();
                }, 10000);
            }
        
    });




//carasel dots
            // $("#dp-dots li").click(function(){
            //     $("#dp-dots li").removeClass("active");
            //     $(this).addClass("active");
            //     var get_slide = $(this).attr('data-class');
            //     console.log(get_slide);
            //     $("[id^=gallery-] .gallery-item[data-class=" + get_slide + "]").hide().prependTo("[id^=gallery-]").fadeIn();
            //     $.each($('.gallery-item'), function (index, dp_item) {
            //         $(dp_item).attr('data-position', index + 1);
            //     });
            // });

//   //measure slide height
// //   function checkSlidePosition(){
// //       $("div[id^=gallery-]").each(function(){
// //           var currentGallery = $(this);
// //           //set slideheight            
// //           var slideimg = currentGallery.find('.gallery-item')[0];
// //           var slideimgHeight = slideimg.clientHeight;
// //           $('div[id^=gallery-]').css({'height': slideimgHeight, 'margin-bottom': '6rem'});
// //           if ($(window).width() >= 768) {
// //           $('.gallery-item').css('width','50vw');
// //           } if ($(window).width() < 768) {
// //               $('.gallery-item').css('width','60vw');
// //           }
// //           // caption position
// //           $('.wp-caption-text').css({'position':'absolute','top': slideimgHeight});
// //           currentGallery.next('#dp-nav').css({'transform':'translateY(-' + slideimgHeight +'px)'});
// //           if ($(window).width() < 1025) { 
// //               $('#dp-nav').css({'transform':'0'});
// //           }
// //       }); 
// //   }


      
// //       $( window ).resize(function() {
// //               checkSlidePosition();
// //       });





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






// Select all links with hashes
// $('a[href*="#"]')
//   // Remove links that don't actually link to anything
//   .not('[href="#"]')
//   .not('[href="#0"]')
//   .click(function(event) {
//     // On-page links
//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
//       && 
//       location.hostname == this.hostname
//     ) {
//       // Figure out element to scroll to
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       // Does a scroll target exist?
//       if (target.length) {
//         // Only prevent default if animation is actually gonna happen
//         event.preventDefault();
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 1000, function() {
//           // Callback after animation
//           // Must change focus!
//           var $target = $(target);
//           $target.focus();
//           if ($target.is(":focus")) { // Checking if the target was focused
//             return false;
//           } else {
//             $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//             $target.focus(); // Set focus again
//           };
//         });
//       }
//     }
//   });

  //remove menu slug blank
// function alter_slug( $content ) {
// 	$content = force_balance_tags( $content );
// 	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
// 	$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
// 	return $content;
// }
// add_filter('the_content', 'alter_slug', 20, 1);





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
});
//find <strong></strong> for submenu
// $(body).find();



