/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function($) {

    var $container = $('<div class="tm-fx-container tm-fx-shapes"></div>').prependTo('body>.uk-block:first'),
        svg = {
            'triangle'      : '<svg class="tm-svg-triangle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="130px" height="120px" viewBox="0 0 130 120" enable-background="new 0 0 130 120" xml:space="preserve"><path d="M64.5,116.982L0.184,2.5h128.632L64.5,116.982z M25.816,17.5L64.5,86.357L103.184,17.5H25.816z"/></svg>',
            'triangle-full' : '<svg class="tm-svg-triangle-full" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="370px" height="360px" viewBox="0 0 370 360" enable-background="new 0 0 370 360" xml:space="preserve"><polygon fill-rule="evenodd" clip-rule="evenodd" points="0,0 368.473,66.013 104.167,359.555 "/></svg>',
            'circle'        : '<svg class="tm-svg-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="60px" height="55px" viewBox="0 0 60 55" enable-background="new 0 0 60 55" xml:space="preserve"><circle fill="none" stroke-width="10" stroke-miterlimit="10" cx="30" cy="27.5" r="22"/></svg>',
            'semicircle'    : '<svg class="tm-svg-semicircle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 80 80" enable-background="new 0 0 80 80" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.901-0.015c-0.073,0.072-0.149,0.138-0.222,0.211c-18.259,18.26-18.259,47.865,0,66.125c18.261,18.26,47.867,18.26,66.125,0c0.073-0.072,0.139-0.148,0.211-0.221L13.901-0.015z"/></svg>',
            'oval'          : '<svg class="tm-svg-oval" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve"><g><path d="M8.427,24.025c-1.938,0-3.852-0.802-5.251-2.201c-2.852-2.854-2.935-7.41-0.187-10.159l8.676-8.677c1.298-1.298,3.042-2.013,4.908-2.013c1.938,0,3.853,0.802,5.251,2.201c1.322,1.322,2.101,3.061,2.191,4.895c0.098,1.973-0.633,3.891-2.005,5.263l-8.677,8.678C12.036,23.311,10.293,24.025,8.427,24.025z"/></g></svg>'
        },
        items = [
            {
                'svg'     : 'triangle-full',
                'rangeX'  : '-100',
                'rangeY'  : '-80',
                'posLeft' : '0',
                'posTop'  : '35vh'
            },
            {
                'svg'     : 'triangle-full',
                'rangeX'  : '60',
                'rangeY'  : '60',
                'posLeft' : '75vw',
                'posTop'  : '10vh',
                'rotate'  : '35deg'
            },
            {
                'svg'     : 'triangle',
                'rangeX'  : '-80',
                'rangeY'  : '-80',
                'posLeft' : '90vw',
                'posTop'  : '5vh',
                'width'   : '130px',
                'height'  : '120px'
            },
            {
                'svg'     : 'triangle',
                'rangeX'  : '80',
                'rangeY'  : '80',
                'posLeft' : '10vw',
                'posTop'  : '45vh'
            },
            {
                'svg'     : 'circle',
                'rangeX'  : '100',
                'rangeY'  : '100',
                'posLeft' : '50vw',
                'posTop'  : '15vh',
                'width'   : '30px',
                'height'  : '30px'
            },
            {
                'svg'     : 'circle',
                'rangeX'  : '-50',
                'rangeY'  : '70',
                'posLeft' : '20vw',
                'posTop'  : '30vh'
            },
            {
                'svg'     : 'circle',
                'rangeX'  : '80',
                'rangeY'  : '-80',
                'posLeft' : '85vw',
                'posTop'  : '25vh'
            },
            {
                'svg'     : 'semicircle',
                'rangeX'  : '-100',
                'rangeY'  : '60',
                'posLeft' : '45vw',
                'posTop'  : '45vh'
            },
            {
                'svg'     : 'oval',
                'rangeX'  : '-60',
                'rangeY'  : '100',
                'posLeft' : '60vw',
                'posTop'  : '35vh'
            },
        ];


    items.forEach(function(item) {
        var img = $(svg[item.svg]).css({'width': item.width, 'height': item.height, 'transform': 'rotate('+item.rotate+')'}),
            parallax = $('<div data-parallaxify-range-x="'+item.rangeX+'" data-parallaxify-range-y="'+item.rangeY+'" style="left:'+item.posLeft+';top:'+item.posTop+'"></div>');

        parallax.append(img).appendTo($container);
    });

    $container.parallaxify({
        positionProperty: 'transform'
    });

});
