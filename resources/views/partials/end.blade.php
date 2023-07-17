<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
{{-- Gallery Elements --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="{{ asset('js/gallery.js') }}"></script>
{{-- D3 JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.14/d3.js"></script>
<script src="{{ asset('js/functions-min.js') }}"></script>
{{-- Actions, events, modals, and more... --}}
<script src="{{ asset('js/actions.js') }}"></script>
{{-- Modal Home Personal Code --}}
<script src="{{ asset('js/personal.js') }}"></script>
{{-- Modal Home Personal Abilities Code --}}
<script src="{{ asset('js/abilities.js') }}"></script>
<script>
    /* Unable scroll */
    window.addEventListener('touchstart', function(event) {
        event.preventDefault();
    });
    /* Helper to passive function preventDefault */
    document.addEventListener('wheel', function(e) {
        e.preventDefault();
    }, {
        passive: false
    });
</script>
</body>

</html>
