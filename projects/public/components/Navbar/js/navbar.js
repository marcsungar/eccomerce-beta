(function( $ ){

    //  open and close nav
    $('#navbar-toggle').click(function() {
        $('nav ul').slideToggle();
    });

    // Hamburger toggle
    $('#navbar-toggle').on('click', function() {
        this.classList.toggle('active');
    });


    $('#submenu').click(function(e) {
        $(this).siblings('.navbar-dropdown').slideToggle("slow");

        // Close dropdown when select another dropdown
        $('.navbar-dropdown').not($(this).siblings()).hide("slow");
        e.stopPropagation();
    });

    $('#submenu2').click(function(e) {
        $(this).siblings('.navbar-subdropdown').slideToggle("slow");

        // Close dropdown when select another dropdown
        $('.navbar-subdropdown').not($(this).siblings()).hide("slow");
        e.stopPropagation();
    });

    $('html').click(function() {
        $('.navbar-dropdown').hide();
        $('.navbar-subdropdown').hide();
    });



})( jQuery );

function getUrl(){
    history.go("register.php");
}

