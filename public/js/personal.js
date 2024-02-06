/*
* That file contains all interactions with personal modal in About section
* Created by Christopher DO
*/

$(document).ready(function () {
    $('.menu-container').on("click", function () {
        /* Validate active class to show links to social network */
        if ($('.list-icon').hasClass("active")) {
            $('.profile-actions').hide();
            $('.list-icon').removeClass('active');
        } else {
            $('.profile-actions').fadeIn();
            $('.list-icon').addClass('active');
        }
    }
    );

    $('.profile-card').mouseleave(function () {
        $('.list-icon').removeClass('active');
        $('.profile-actions').slideUp();
        $('.profile-info').slideUp();
        $('.profile-map').slideUp();
    });

    $('.profile-avatar').hover(
        function () {
            $('.profile-links').fadeIn();
        },
        function () {
            $('.profile-links').hide();
        }
    );
    $('.read-more').click(function () {
        $('.profile-map').slideUp();
        $('.profile-info').slideToggle();
        return false;
    });
    $('.view-map').click(function () {
        $('.profile-info').slideUp();
        $('.profile-map').slideToggle();
        return false;
    });
});