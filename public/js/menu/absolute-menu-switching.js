(function ($) {
    $(document).ready(function () {
        $('#menuToggle').click(function (e) {
            var $parent = $(this).parent('.menu');
            $parent.toggleClass("open");
            var navState = $parent.hasClass('open') ? "hide" : "show";
            if (navState == "show"){
                setTimeout(function(){ document.getElementById('menuToggle2').hidden = false;},50);
            }
            else{
                document.getElementById('menuToggle2').hidden = true;
            }
            $(this).attr("title", navState + " navigation");
            // Set the timeout to the animation length in the CSS.
            setTimeout(function () {
                $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
            }, 200);
            e.preventDefault();
        });
    });
})(jQuery);
