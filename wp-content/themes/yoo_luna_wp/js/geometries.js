/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function($) {

    var $container = $('<div class="tm-fx-container"></div>').prependTo('body>.uk-block:first'),
        color = $('body>.uk-block:first').css('backgroundColor');

    $container.append('<div data-parallaxify-range-x="120" data-parallaxify-range-y="70" style="left:40vw;top:-25vh;"><div class="tm-fx-box" style="width:25vw;height:25vw;transform:rotate(10deg);background-color:'+color+'"></div></div>');

    $container.append('<div data-parallaxify-range-x="-120" data-parallaxify-range-y="70" style="left:-10vw;top:20vh;"><div class="tm-fx-box" style="width:25vw;height:25vw;transform:rotate(10deg);background-color:'+color+'"></div></div>');
    $container.append('<div data-parallaxify-range-x="100" data-parallaxify-range-y="-50" style="left:-5vw;top:-5vh;"><div class="tm-fx-box" style="width:20vw;height:20vw;border-radius:50%;background-color:'+color+'"></div></div>');
    $container.append('<div data-parallaxify-range-x="60" data-parallaxify-range-y="50" style="left:10vw;top:50vh;"><div class="tm-fx-box" style="width:15vw;height:15vw;border-radius:50%;background-color:'+color+'"></div></div>');

    $container.append('<div data-parallaxify-range-x="-100" data-parallaxify-range-y="50" style="right:-5vw;top:0;"><div class="tm-fx-box" style="width:20vw;height:20vw;border-radius:50%;background-color:'+color+'"></div></div>');
    $container.append('<div data-parallaxify-range-x="-50" data-parallaxify-range-y="-90" style="right:10vw;top:-5vh;"><div class="tm-triangle tm-fx-box" style="transform:scale(2.5) rotate(-20deg);border-color:transparent transparent '+color+' transparent"></div></div>');
    $container.append('<div data-parallaxify-range-x="120" data-parallaxify-range-y="-70" style="right:-5vw;top:40vh;"><div class="tm-fx-box" style="width:25vw;height:25vw;transform:rotate(-10deg);background-color:'+color+'"></div></div>');

    $container.parallaxify({
        positionProperty: 'transform'
    });

});
