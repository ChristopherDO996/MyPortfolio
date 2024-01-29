$(document).ready(function () {
    $('.menu-container').hover(function () {
        setTimeout(() => {
            $('.profile-actions').fadeIn();
            $('.list-icon').addClass('active');
        }, 200);

    }, function () {
        setTimeout(() => {
            $('.profile-actions').hide();
            $('.list-icon').removeClass('active');
        }, 200);

    }
    );

    $('.profile-card').mouseleave(function () {
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