<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="{{ asset('js/functions-min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r79/three.min.js"></script>
<script src="{{ asset('js/threeBackground.js') }}"></script>
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="{{ asset('js/abilities.js') }}"></script>
<script>
    $(".modal-trigger").click(function(e) {
        e.preventDefault();
        dataModal = $(this).attr("data-modal");
        $("#" + dataModal).css({
            "display": "block"
        });
        $(".overlay").css("display", "block");
    });

    $(".close-modal, .modal-sandbox").click(function() {
        $(".modal").css({
            "display": "none"
        });
        $(".overlay").css({
            "display": "none",
        });
    });
</script>
