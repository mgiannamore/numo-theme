var slideMargin;
var slides = [];
var slideHeights = [];
var headlineCopy = [];
var currentState;
var slideMovement = [];

jQuery(document).ready(function() {
    storeSlides();
    showFirstSlide();
    storeSlideHeights();
    initializeSlideMargins();
    setCurrentState(0);
    setHeadlineCopy();
    var headlineWidth = jQuery('.home__headline__container').width();
    jQuery('.home__dot__container').css("width", headlineWidth);
    bindToMouseWheel();
});

function positiveToNegative(num){
  return -Math.abs(num);
}

function setHeadlineCopy(){
  //will need to be fetched with ajax
  headlineCopy = ["numo", "who we are", "we're hiring", "stay current"];
}

function setCurrentState(state){
  currentState = state;
}

function storeSlides(){
  slides = jQuery('.home__copyslide');
}

function showFirstSlide(){
  jQuery(slides[0]).css("opacity", 1);
}

function storeSlideHeights(){
  for(i = 0; i < slides.length; i++){
    slideHeights[i] = jQuery(slides[i]).height();
  }
  //console.log(slideHeights);
}

function initializeSlideMargins(){
  for(i = 0; i < slides.length; i++){
    jQuery(slides[i]).css("margin-bottom", slideHeights[i]);
  }
}

function setSlideMovementPositions(state, direction){
  if(direction === "down"){
    slideMovement[0] = parseInt(jQuery('.slide-mover').css('top')) + positiveToNegative(slideHeights[state]);
    slideMovement[1] = slideMovement[0] + positiveToNegative(slideHeights[state]);
  } else {
    slideMovement[0] = parseInt(jQuery('.slide-mover').css('top')) + slideHeights[state - 1];
    slideMovement[1] = slideMovement[0] + slideHeights[state - 1];
  }
  //console.log(direction);
  //console.log("slideMovement[0] : ", slideMovement[0]);
  //console.log("slideMovement[1] : ", slideMovement[1]);
}

function calculateDotAnimationSize() {
    var dotOffset = jQuery('.home__dot__container').offset().left;
    var headlineOffset = jQuery('.home__headline__container').offset().left;
    var totalOffset = dotOffset - headlineOffset;
    totalOffset = totalOffset / 2 - 10;

    return totalOffset;
}

function holdDotAtCenter() {
    var dotPosition = jQuery('.home__dot__container').offset();
    jQuery('.home__dot__container').css({
        'position': 'fixed',
        'top': dotPosition.top,
        'left': dotPosition.left
    });
}

function prepareDotForReturnToEnd() {
    var newHeadlineWidth = jQuery('.home__headline__container').width();
    var newDotOffset = newHeadlineWidth / 2 - 10;
    jQuery('.home__dot__container').css({
        "width": newHeadlineWidth,
        'position': 'absolute',
        'left': newDotOffset,
        'top': 'auto'
    });
}

function animateCopy(direction){
  setSlideMovementPositions(currentState, direction);
  jQuery('.slide-mover').animate({'top':slideMovement[0]}, 600, 'easeInOutQuint');
  if(direction === "down"){
    jQuery(slides[currentState]).animate({'opacity':0}, 600, 'easeInOutQuint', function(){
      jQuery('.slide-mover').delay(150).animate({'top':slideMovement[1]}, 600, 'easeInOutQuint');
      jQuery(slides[currentState + 1]).delay(150).animate({'opacity':1}, 600, 'easeInOutQuint');
    });
  } else {
    jQuery(slides[currentState]).animate({'opacity':0}, 600, 'easeInOutQuint', function(){
      jQuery('.slide-mover').delay(150).animate({'top':slideMovement[1]}, 600, 'easeInOutQuint');
      jQuery(slides[currentState - 1]).delay(150).animate({'opacity':1}, 600, 'easeInOutQuint');
    });
  }
}


function animateHeadline(direction){
  jQuery('.home__dot__container').animate({'left': calculateDotAnimationSize()}, 600, 'easeInOutQuint');
  jQuery('.home__headline').animate({'left': '50%','opacity': 0}, 600, 'easeInOutQuint', function() {
      holdDotAtCenter();
      if(direction === "down"){
        setCurrentState(++currentState);
      } else {
        setCurrentState(--currentState)
      }
      jQuery('.home__headline').html(headlineCopy[currentState]);
      prepareDotForReturnToEnd();
      jQuery('.home__headline').animate({'left': 0,'opacity': 1}, 600, 'easeInOutQuint');
      jQuery('.home__dot__container').animate({'left': '100%'}, 600, 'easeInOutQuint');
      showOrHideLogo(direction);
  });
}

function showOrHideLogo(direction){
  if (direction === "up" && currentState == 0) {
    jQuery('.top-logo--trans').animate({"opacity":0}, 600, 'easeInOutQuint');
  } else {
    jQuery('.top-logo--trans').animate({"opacity":1}, 600, 'easeInOutQuint');
  }
}

function changeSlide(direction){
  animateCopy(direction);
  animateHeadline(direction);
}

function bindToMouseWheel(){
  jQuery(window).on('mousewheel DOMMouseScroll', function(e){
    if (!jQuery(this).data('flag')) {
      var self = this;
        jQuery(this).data('timeout', window.setTimeout(function() {
            jQuery(self).data('flag', false);
        }, 2000));

      jQuery(this).data('flag', true);

      if (e.type == 'mousewheel') {
        if (e.originalEvent.deltaY < 0){
          if(currentState > 0){
            changeSlide("up");
            //console.log("scrolling up");
          }
        } else {
          if(currentState < (slides.length - 1)){
            changeSlide("down");
            //console.log("scrolling down");
          }
        }
      } else if (e.type == 'DOMMouseScroll'){
        if (e.originalEvent.detail < 0){
          if(currentState > 0){
            changeSlide("up");
            //console.log("scrolling up");
          }
        } else {
          if(currentState < (slides.length - 1)){
            changeSlide("down");
            //console.log("scrolling down");
          }
        }
      }
    }
  });
}

jQuery('#animate-dot').click(function(e) {
    e.preventDefault();
    if(currentState < (slides.length - 1)){
      changeSlide("down");
    }
});

jQuery('#explore-numo').click(function(e) {
    e.preventDefault();
    changeSlide("down");
});
