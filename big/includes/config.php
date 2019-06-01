<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

echo $_SERVER['PHP_SELF'];
die;

?>


<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
echo THIS_PAGE;

die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Matt's WEB120 Title Page";
    break;

    case 'contactme.php':
        $title = "Matt's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Matt';
    break;



    default:
        $title = THIS_PAGE;
}


?>

next: '.slider__button--next',
previous: '.slider__button--previous',
markers: '.slider__markers',
numbers: '.slider__numbers',

// Classes
classStrip: 'slider__strip',
classSlide: 'slider__slide',
classSlideActive: 'slider__slide--sticky',
classMarker: 'slider__marker',
classMarkerActive: 'slider__marker--sticky',
classButtonDisabled: 'slider__button--disabled',
classDisabled: 'slider--disabled',
classTouch: 'slider--enable-touch',

// How many to step next/prev by
step: 1,

// Adjust timings
delay: 3000,
interval: 5000,
time: 400,

// Custom display type
display: 'block',

// Allow infinite looping, auto-play or carousel style?
canLoop: false,
isManual: true,
is<a href="https://www.jqueryscript.net/tags.php?/Carousel/">Carousel</a>: true,

// Run callbacks at defined breakpoints
breakpoints: [
  /*{
    range: [0, 767],
    callback: function() {
      console.log('Mobile');
    }
  }*/
]