<!-- JS -->
<script src="{{ asset('js/components/jquery.min.js') }}"></script>
<script src="{{ asset('js/lib/popper.min.js') }}"></script>
<script src="{{ asset('js/components/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/lib/slick.min.js') }}"></script>
<script src="{{ asset('js/lib/inview.min.js') }}"></script>
<script src="{{ asset('js/lib/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/lib/counterup.min.js') }}"></script>
<script src="{{ asset('js/lib/waypoints.min.js') }}"></script>
<script src="{{ asset('js/lib/jquery.nav.js') }}"></script>
<script src="{{ asset('js/lib/YTPlayer.min.js') }}"></script>
<script src="{{ asset('js/lib/jquery.ripples-min.js') }}"></script>
<script src="{{ asset('js/lib/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('js/lib/validate.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#experienceSelector a'))
    triggerTabList.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function(event) {
            event.preventDefault()
            tabTrigger.show()
        })
    });

    var triggerTabList2 = [].slice.call(document.querySelectorAll('#service-tabs a'))
    triggerTabList2.forEach(function(triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)

        triggerEl.addEventListener('click', function(event) {
            event.preventDefault()
            tabTrigger.show()
        })
    })
</script>
