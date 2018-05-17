$(document).ready(function() {
 slideShow();
    
});

function slideShow() {
    var current =$('#photos .show');
    var next = current.next().length ? current.next() : current.siblings().first();
    
    current.hide().removeClass('show');
    next.fadeIn().addClass('show');
    
    setTimeout(slideShow, 3000);
}
 
    function changeSlide( newSlide ) {
        // cancel any timeout
        clearTimeout( slideTimeout );
        
        // change the currSlide value
        currSlide = newSlide;
        
        // make sure the currSlide value is not too low or high
        if ( currSlide > maxSlide ) currSlide = 0;
        else if ( currSlide < 0 ) currSlide = maxSlide;
        
        // animate the slide reel
        $slideReel.animate({
            left : currSlide * -900
        }, 400, 'swing', function() {
            // hide / show the arrows depending on which frame it's on
            if ( currSlide == 0 ) $slideLeftNav.hide();
            else $slideLeftNav.show();
            
            if ( currSlide == maxSlide ) $slideRightNav.hide();
            else $slideRightNav.show();
            
            // set new timeout if active
            if ( activeSlideshow ) slideTimeout = setTimeout(nextSlide, 1200);
        });
        
        // animate the navigation indicator
        $activeNavItem.animate({
            left : currSlide * 150
        }, 400, 'swing');
    }
    
    function nextSlide() {
        changeSlide( currSlide + 1 );
    }
    
    // define some variables / DOM references
    var activeSlideshow = true,
    currSlide = 0,
    slideTimeout,
    $slideshow = $('#slideshow'),
    $slideReel = $slideshow.find('#slideshow-reel'),
    maxSlide = $slideReel.children().length - 1,
    $slideLeftNav = $slideshow.find('#slideshow-left'),
    $slideRightNav = $slideshow.find('#slideshow-right'),
    $activeNavItem = $slideshow.find('#active-nav-item');
    
    // set navigation click events
    
    // left arrow
    $slideLeftNav.click(function(ev) {
        ev.preventDefault();
        
        activeSlideshow = false;
        
        changeSlide( currSlide - 1 );
    });
    
    // right arrow
    $slideRightNav.click(function(ev) {
        ev.preventDefault();
        
        activeSlideshow = false;
        
        changeSlide( currSlide + 1 );
    });
    
    // main navigation
    $slideshow.find('#slideshow-nav a.nav-item').click(function(ev) {
        ev.preventDefault();
        
        activeSlideshow = false;
        
        changeSlide( $(this).index() );
    });
    
    // start the animation
    slideTimeout = setTimeout(nextSlide, 1200);
});

function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
