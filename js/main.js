$(document).ready(function(){
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});
//Animation init
new WOW().init();
//Carousel Header
$('#carousel-example-generic').carousel({
    interval: 25000
});
//Modal
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})

// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').material_select();
});

// MDB Lightbox Init
$(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
});

google.maps.event.addDomListener(window, 'load', init_map);