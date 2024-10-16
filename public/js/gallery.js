//ISPIRATION: https://www.uplabs.com/posts/xore-solar-system
//Full page simoberny.it
//Best on mobile

/* Inizializzazione HammerJS */
var element = document.getElementById('mobile_control');
var hammertime = new Hammer(element);

var swiped_top = false;

hammertime.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
hammertime.on('swipeleft', function (ev) {
    cmove("prev");
});
hammertime.on('swiperight', function (ev) {
    cmove("next");
});
hammertime.on('swipeup', function (ev) {
    swiped_top = true;
    openmodal();
});
hammertime.on('swipedown', function (ev) {
    closemodal();
});
/* * * * * * * * * */

$(".action").on("click", function () {
    cmove($(this).attr('id'));
});

$('.title').each(function () {
    $(this).html("epoem 50".replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});


anime.timeline({})
    .add({
        targets: '.title',
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 100
    })
    .add({
        targets: '.title .letter',
        translateX: [40, 0],
        translateZ: 0,
        opacity: [0, 1],
        easing: "easeOutExpo",
        duration: 1200,
        delay: function (el, i) {
            return 500 + 30 * i;
        }
    });

var angle = 0;
var planet_id = 0;

function cmove(dir) {
    var n_planet = 4, next_id;
    var prev, next;
    var top = $("#pl" + planet_id);
    var orbit = $(".planet_container");

    top.removeClass("pt");

    if (planet_id == 0) {
        prev = $("#pl" + (n_planet - 1));
        next = $("#pl" + (planet_id + 1) % n_planet);
    } else {
        prev = $("#pl" + (planet_id - 1));
        next = $("#pl" + (planet_id + 1) % n_planet);
    }

    if (dir == "prev") {
        if (planet_id == 3) {
            next_id = 0;
            planet_id = 0;
        } else {
            next_id = (planet_id + 1) % n_planet;
            planet_id++;
        }
        angle -= 90;
        next.addClass("pt");
    } else {
        if (planet_id == 0) {
            next_id = 3;
            planet_id = 3;
        } else {
            next_id = planet_id - 1;
            --planet_id;
        }
        angle += 90;
        prev.addClass("pt");
    }
    $(".active").removeClass("active");
    $("#p" + planet_id).addClass("active");
    $(".info_back h1").text(planet[next_id]);

    if (swiped_top) {
        $('.info_back h1').each(function () {
            $(this).html(planet[planet_id].replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
        });

        anime.timeline({})
            .add({
                targets: '.info_back h1',
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 100
            })
            .add({
                targets: '.info_back h1 .letter',
                translateX: [40, 0],
                translateZ: 0,
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 1200,
                delay: function (el, i) {
                    return 500 + 30 * i;
                }
            });
    }

    $('.title').each(function () {
        $(this).html(planet[next_id].replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });

    anime.timeline({})
        .add({
            targets: '.title .letter',
            translateX: [40, 0],
            translateZ: 0,
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 1200,
            delay: function (el, i) {
                return 500 + 30 * i;
            }
        });

    $('.pn').each(function () {
        $(this).html(planet[next_id].replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });

    anime.timeline({})
        .add({
            targets: '.pn .letter',
            translateX: [40, 0],
            translateZ: 0,
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 1200,
            delay: function (el, i) {
                return 500 + 30 * i;
            }
        });

    // var ani_dir = (dir == "next") ? "0%" : "100%";

    anime.timeline({})
        .add({
            targets: '.planet_photo',
            // backgroundPosition: ['50% -75%', ani_dir + ' -85%'],
            opacity: {
                value: [1, 0]
            },
            duration: 700,
            easing: 'easeOutQuad',
            complete: function (anim) {
                $(".planet_photo").css("background-image", "url(" + photo_planet[next_id] + ")");
            }
        })
        .add({
            targets: '.planet_photo',
            // backgroundPosition: ['0% -85%', '50% -75%'],
            opacity: [0.2, 1],
            duration: 500,
            easing: 'easeOutQuad'
        });

    $(".info_back").css("background-image", "url(" + photo_planet[next_id] + ")");
    orbit.css("transform", "rotateZ(" + angle + "deg)");
}

// $("#open_menu").on("click", function () {
//     $(".menu").show();
// });

$(".close").on("click", function () {
    closemodal();
});

$(".more").on("click", function () {
    swiped_top = true;
    openmodal();
});

function openmodal() {
    anime.timeline({})
        .add({
            targets: '.carousel',
            translateY: ["100%", 0],
            duration: 600,
            easing: 'easeOutQuad',
        });

    $('.info_back h1').each(function () {
        $(this).html(planet[planet_id].replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });

    anime.timeline({})
        .add({
            targets: '.info_back h1',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 100
        })
        .add({
            targets: '.info_back h1 .letter',
            translateX: [40, 0],
            translateZ: 0,
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 1200,
            delay: function (el, i) {
                return 500 + 30 * i;
            }
        });
}

function closemodal() {
    if (swiped_top) {
        anime.timeline({})
            .add({
                targets: '.carousel',
                translateY: [0, "100%"],
                duration: 600,
                easing: 'easeOutQuad',
            });
        swiped_top = false;
    }
}

var photo_planet = ["https://i.kinja-img.com/gawker-media/image/upload/s--gBFsZfZv--/c_scale,fl_progressive,q_80,w_800/18mozgxwgu2ibjpg.jpg", "https://upload.wikimedia.org/wikipedia/commons/0/02/OSIRIS_Mars_true_color.jpg", "https://www.pngplay.com/wp-content/uploads/13/Jupiter-PNG-Pic-Background.png", "https://www.nobbot.com/wp-content/uploads/2022/01/saturno-portada-1024x815.jpg"];
var planet = ["epoem 50", "prime capital mx", "manor", "burger club brothers"];