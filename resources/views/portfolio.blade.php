@extends('layouts.master')

{{-- Realized Projects --}}
@section('content')
    <!-- Best on mobile with Gesture -->
    <div class="container_gallery" id="mobile_control"
        style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="spinner-box" style="display: none">
            <div class="solar-system">
                <div class="earth-orbit orbit">
                    <div class="planet earth"></div>
                    <div class="venus-orbit orbit">
                        <div class="planet venus"></div>
                        <div class="mercury-orbit orbit">
                            <div class="planet mercury"></div>
                            <div class="sun"></div>
                        </div>
                    </div>
                </div>
            </div>
            <p>Cargando</p>
        </div>
        <div id="galleryComplete" style="display: none">

            <div class="carousel">

                <div class="info_back">
                    <h1>Proyecto EPOEM 50</h1>
                    <div class="menu">
                        <span class="close">X</span>
                    </div>
                </div>

                <div class="citem active" id="p0">
                    {{-- <h1>Discover</h1> --}}
                    <p>
                        The third planet from the sun, Earth is a waterworld, with two-thirds of the
                        planet covered by ocean. It’s the only world known to harbor life. Earth’s
                        atmosphere is rich in life-sustaining nitrogen and oxygen. Earth's surface
                        rotates about its axis at 1,532 feet per second (467 meters per second) —
                        slightly more than 1,000 mph (1,600 kph) — at the equator. The planet zips
                        around the sun at more than 18 miles per second (29 km per second).
                    </p>
                    <ul>
                        <li>Diameter: 7,926 miles (12,760 km)</li>
                        <li>Orbit: 365.24 days</li>
                        <li>Day: 23 hours, 56 minutes</li>
                    </ul>
                    <p>
                        <span>Orbital characteristics</span>
                        Earth spins on an imaginary line called an axis that runs from the North
                        Pole to
                        the South Pole, while also orbiting the sun. It takes Earth 23.439 hours to
                        complete a rotation on its axis, and roughly 365.26 days to complete an
                        orbit
                        around the sun.
                        Earth's axis of rotation is tilted in relation to the ecliptic plane, an
                        imaginary surface through Earth's orbit around the sun. This means the
                        northern
                        and southern hemispheres will sometimes point toward or away from the sun
                        depending on the time of year, varying the amount of light they receive and
                        causing the seasons.
                    </p>
                </div>

                <div class="citem" id="p1">
                    {{-- <h1>Discover</h1> --}}
                    <p>
                        The fourth planet from the sun, is a cold, dusty place. The dust, an iron
                        oxide,
                        gives the planet its reddish cast. Mars shares similarities with Earth: It
                        is
                        rocky, has mountains and valleys, and storm systems ranging from localized
                        tornado-like dust devils to planet-engulfing dust storms. It snows on Mars.
                        And
                        Mars harbors water ice. Scientists think it was once wet and warm, though
                        today
                        it’s cold and desert-like.
                        Mars' atmosphere is too thin for liquid water to exist on the surface for
                        any
                        length of time. Scientists think ancient Mars would have had the conditions
                        to
                        support life, and there is hope that signs of past life — possibly even
                        present
                        biology — may exist on the Red Planet.
                    </p>
                    <ul>
                        <li>Diameter: 4,217 miles (6,787 km)</li>
                        <li>Orbit: 687 Earth days</li>
                        <li>Day: Just more than one Earth day (24 hours, 37 minutes)</li>
                    </ul>
                    <p>
                        <span>Orbital characteristics</span>
                        The axis of Mars, like Earth's, is tilted with relation to the sun. This
                        means
                        that like Earth, the amount of sunlight falling on certain parts of the
                        planet
                        can vary widely during the year, giving Mars seasons.

                        However, the seasons that Mars experiences are more extreme than Earth's
                        because
                        the red planet's elliptical, oval-shaped orbit around the sun is more
                        elongated
                        than that of any of the other major planets. When Mars is closest to the
                        sun,
                        its southern hemisphere is tilted toward the sun, giving it a short, very
                        hot
                        summer, while the northern hemisphere experiences a short, cold winter. When
                        Mars is farthest from the sun, the northern hemisphere is tilted toward the
                        sun,
                        giving it a long, mild summer, while the southern hemisphere experiences a
                        long,
                        cold winter.

                        The tilt of Mars axis swings wildly over time because it is not stabilized
                        by a
                        large moon, such as on Earth. This led to different climates on its surface
                        through its history. A 2017 study suggests that the changing tilt also
                        influenced the release of methane into Mars' atmosphere, causing temporary
                        warming periods that allowed water to flow.
                    </p>
                </div>

                <div class="citem" id="p2">
                    {{-- <h1>Discover</h1> --}}
                    <p>
                        The fifth planet from the sun, Jupiter is huge and is the most massive
                        planet in
                        our solar system. It’s a mostly gaseous world, mostly hydrogen and helium.
                        Its
                        swirling clouds are colorful due to different types of trace gases. A big
                        feature is the Great Red Spot, a giant storm which has raged for hundreds of
                        years. Jupiter has a strong magnetic field, and with dozens of moons, it
                        looks a
                        bit like a miniature solar system.
                    </p>
                    <ul>
                        <li>86,881 miles (139,822 km)</li>
                        <li>Orbit: 11.9 Earth years</li>
                        <li>Day: 9.8 Earth hours</li>
                    </ul>
                    <p>
                        <span>Physical characteristics</span>
                        Jupiter is the most massive planet in our solar system, more than twice as
                        massive as all the other planets combined, and had it been about 80 times
                        more
                        massive, it would have actually become a star instead of a planet. Its
                        atmosphere resembles that of the sun, made up mostly of hydrogen and helium,
                        and
                        with four large moons and many smaller moons in orbit around it, Jupiter by
                        itself forms a kind of miniature solar system. All told, the immense volume
                        of
                        Jupiter could hold more than 1,300 Earths.
                    </p>
                </div>

                <div class="citem" id="p3">
                    {{-- <h1>Discover</h1> --}}
                    <p>
                        The sixth planet from the sun is known most for its rings. When Galileo
                        Galilei
                        first studied Saturn in the early 1600s, he thought it was an object with
                        three
                        parts. Not knowing he was seeing a planet with rings, the stumped astronomer
                        entered a small drawing — a symbol with one large circle and two smaller
                        ones —
                        in his notebook, as a noun in a sentence describing his discovery. More than
                        40
                        years later, Christiaan Huygens proposed that they were rings. The rings are
                        made of ice and rock. Scientists are not yet sure how they formed. The
                        gaseous
                        planet is mostly hydrogen and helium. It has numerous moons.
                    </p>
                    <ul>
                        <li>Diameter: 74,900 miles (120,500 km)</li>
                        <li>Orbit: 29.5 Earth years</li>
                        <li>Day: About 10.5 Earth hours</li>
                    </ul>
                    <p>
                        <span>Physical characteristics</span> Saturn is a gas giant made up mostly
                        of
                        hydrogen and helium. Saturn is big enough to hold more than 760 Earths, and
                        is
                        more massive than any other planet except Jupiter, roughly 95 times Earth's
                        mass. However, Saturn has the lowest density of all the planets, and is the
                        only
                        one less dense than water — if there were a bathtub big enough to hold it,
                        Saturn would float.

                        The yellow and gold bands seen in Saturn's atmosphere are the result of
                        super-fast winds in the upper atmosphere, which can reach up to 1,100 mph
                        (1,800
                        km/h) around its equator, combined with heat rising from the planet's
                        interior.

                        Saturn spins faster than any other planet except Jupiter, completing a
                        rotation
                        roughly every 10-and-a-half hours. This rapid spinning causes Saturn to
                        bulge at
                        its equator and flatten at its poles — the planet is 8,000 miles (13,000
                        kilometers) wider at its equator than between the poles.
                    </p>
                </div>
            </div>

            <div class="content">
                <h1 class="title" style="opacity: 1;"><span class="letter"
                        style="opacity: 1; transform: translateX(0px) translateZ(0px);">e</span><span class="letter"
                        style="opacity: 1; transform: translateX(0px) translateZ(0px);">p</span><span class="letter"
                        style="opacity: 1; transform: translateX(0px) translateZ(0px);">o</span><span class="letter"
                        style="opacity: 1; transform: translateX(0px) translateZ(0px);">e</span><span class="letter"
                        style="opacity: 1; transform: translateX(0px) translateZ(0px);">m</span>
                    <span class="letter" style="opacity: 1; transform: translateX(0px) translateZ(0px);">5</span><span
                        class="letter" style="opacity: 1; transform: translateX(0px) translateZ(0px);">0</span>
                </h1>
                <div class="helmet">
                    <img ondragstart="return false;" src="http://127.0.0.1:8000/img/galleryBack.png">
                    <div class="planet_position">
                        <div class="planet_shadow"></div>
                        <div class="planet_photo"></div>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="nav">
                    <span id="next" class="action"><i class="material-icons">keyboard_arrow_left</i></span>
                    <span id="prev" class="action"><i class="material-icons">keyboard_arrow_right</i></span>
                </div>
                <div class="orbit">
                    <div class="planet_container">
                        <div class="planet pt earth" id="pl0">
                            <div class="moon">
                                <span></span>
                            </div>
                        </div>
                        <div class="planet mars" id="pl1">
                            <div class="moon">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="planet jupiter" id="pl2"></div>
                        <div class="planet saturn" id="pl3">
                            <div class="ring"></div>
                        </div>
                    </div>
                    <div class="name_container">
                        <p class="pn">EPOEM 50</p>
                        <p class="more">Detalles de proyecto</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
