(function() {"use strict";

    /* 
      Intializing Navigation Effect
    ========================================================================== */
      $('.main-nav>ul li').on('mouseenter', function(){
            $(this).find('>ul').addClass("open-nav animated fadeIn");
        });
      $('.main-nav>ul li').on('mouseleave', function(){
           $(this).find('>ul').removeClass("open-nav animated fadeIn");
        });
  /* 
     Home Search
     ========================================================================== */
    $('.btn-search-header span').on ('click',function()
      {
          $(this).toggleClass("lnr-cross open");

          $(this).find(' + .search-popup').fadeToggle();
          return false;
    });
  /* Cart List Widget */
    $('.cart-button a').on ('click',function()
      {
          $(this).find('+ .top_cart_list_product').fadeToggle();
          return false;
    });
  
  
  /* Full height 404 */
    var height = $( window ).height();
    var headerHeight = $('header').height();
    var footerHeight = $('footer').height();
    var warp404 = height-headerHeight-footerHeight;
    $(".warp-404").height(warp404);
    $( window ).resize(function() {
        var height = $( window ).height();
        var headerHeight = $('header').height();
        var footerHeight = $('footer').height();
        var warp404 = height-headerHeight-footerHeight;
        $(".warp-404").height(warp404);
    });
  


  /* 
   Backtotop
   ========================================================================== */
    var offset = 450;
    var duration = 500;   
    $(window).on('scroll', function(){
         if ($(this).scrollTop() > offset) {
                $('#to-the-top').fadeIn(duration);
            } else {
                $('#to-the-top').fadeOut(duration);
            }
    });

    $('#to-the-top').on('click', function(event){
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    });

    
    /* Fixed Menu HOme 2 */
   
      $(window).on('scroll', function(){
          if ($(this).scrollTop() > 0) {
                $('#header-home-2').addClass("bg-dark");
            } else {
                $('#header-home-2').removeClass("bg-dark");
            }
      });
    
     $(function(){
      $(document).scroll(function(){
          if($(this).scrollTop() <= 0) {
              $("#stick").trigger("sticky_kit:detach");
          } else {
              $("#stick").stick_in_parent({container: $("#page"), offset_top: 0});
          }
      });
  });


})(jQuery);


  (function() {

  // VARIABLES
  const timeline = document.querySelector(".timeline ol"),
    elH = document.querySelectorAll(".timeline li > div"),
    arrows = document.querySelectorAll(".timeline .arrows .arrow"),
    arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
    arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
    firstItem = document.querySelector(".timeline li:first-child"),
    lastItem = document.querySelector(".timeline li:last-child"),
    xScrolling = 280,
    disabledClass = "disabled";

  // START
  window.addEventListener("load", init);

  function init() {
    setEqualHeights(elH);
    animateTl(xScrolling, arrows, timeline);
    setSwipeFn(timeline, arrowPrev, arrowNext);
    setKeyboardFn(arrowPrev, arrowNext);
  }

  // SET EQUAL HEIGHTS
  function setEqualHeights(el) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      const singleHeight = el[i].offsetHeight;

      if (counter < singleHeight) {
        counter = singleHeight;
      }
    }

    for (let i = 0; i < el.length; i++) {
      el[i].style.height = `${counter}px`;
    }
  }

  // CHECK IF AN ELEMENT IS IN VIEWPORT
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // SET STATE OF PREV/NEXT ARROWS
  function setBtnState(el, flag = true) {
    if (flag) {
      el.classList.add(disabledClass);
    } else {
      if (el.classList.contains(disabledClass)) {
        el.classList.remove(disabledClass);
      }
      el.disabled = false;
    }
  }

  // ANIMATE TIMELINE
  function animateTl(scrolling, el, tl) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      el[i].addEventListener("click", function() {
        if (!arrowPrev.disabled) {
          arrowPrev.disabled = true;
        }
        if (!arrowNext.disabled) {
          arrowNext.disabled = true;
        }
        const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
        if (counter === 0) {
          tl.style.transform = `translateX(-${scrolling}px)`;
        } else {
          const tlStyle = getComputedStyle(tl);
          // add more browser prefixes if needed here
          const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
          const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
          tl.style.transform = `translateX(${values}px)`;
        }

        setTimeout(() => {
          isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
          isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
        }, 1100);

        counter++;
      });
    }
  }

  // ADD SWIPE SUPPORT FOR TOUCH DEVICES
  function setSwipeFn(tl, prev, next) {
    const hammer = new Hammer(tl);
    hammer.on("swipeleft", () => next.click());
    hammer.on("swiperight", () => prev.click());
  }

  // ADD BASIC KEYBOARD FUNCTIONALITY
  function setKeyboardFn(prev, next) {
    document.addEventListener("keydown", (e) => {
      if ((e.which === 37) || (e.which === 39)) {
        const timelineOfTop = timeline.offsetTop;
        const y = window.pageYOffset;
        if (timelineOfTop !== y) {
          window.scrollTo(0, timelineOfTop);
        }
        if (e.which === 37) {
          prev.click();
        } else if (e.which === 39) {
          next.click();
        }
      }
    });
  }

})();