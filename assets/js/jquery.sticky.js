   // get header height (without border)
    var getHeaderHeight = $('.headerContainerWrapper').outerHeight();

    // border height value (make sure to be the same as in your css)
    var borderAmount = 2;

    // shadow radius number (make sure to be the same as in your css)
    var shadowAmount = 30;

    // init variable for last scroll position
    var lastScrollPosition = 0;

    // set negative top position to create the animated header effect
    $('.headerContainerWrapper').css('top', '-' + (getHeaderHeight + shadowAmount + borderAmount) + 'px');

    $(window).scroll(function() {
    var currentScrollPosition = $(window).scrollTop();

    if ($(window).scrollTop() > 1 * (getHeaderHeight + shadowAmount + borderAmount) ) {

    $('body').addClass('scrollActive').css('padding-top', getHeaderHeight);
    $('.headerContainerWrapper').css('top', 0);

    if (currentScrollPosition < lastScrollPosition) {
    $('.headerContainerWrapper').css('top', '-' + (getHeaderHeight + shadowAmount + borderAmount) + 'px');
    }
    lastScrollPosition = currentScrollPosition;

    } else {
    $('body').removeClass('scrollActive').css('padding-top', 0);
    }
    });
