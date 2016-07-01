$( "#navabout" ).click(function() {
    $( "#about" ).toggle( "slow", function() {
        // Animation complete.
    });
});

$( "#navservices" ).click(function() {
    $( "#services" ).toggle( "slow", function() {
        // Animation complete.
    });
});


$( "#navteam" ).click(function() {
    $( "#team" ).toggle( "slow", function() {
        // Animation complete.
    });
});


$( "#navcontact" ).click(function() {
    $( "#contact" ).toggle( "slow", function() {
        // Animation complete.
    });
});




$("#navcontact, #navservices, #navteam").click(function(){
    $("#about").hide( "swing", function() {
        // Animation complete.
    });
});

$("#navabout, #navcontact, #navteam").click(function(){
    $("#services").hide( "swing", function() {
        // Animation complete.
    });
});

$("#navcontact, #navservices, #navabout").click(function(){
    $("#team").hide( "swing", function() {
        // Animation complete.
    });
});

$("#navabout, #navservices, #navteam").click(function(){
    $("#contact").hide( "swing", function() {
        // Animation complete.
    });
});





$(function(){
    $("#opener_1").click(function(){
        $("#dialog_1").toggle();
    });
});

$(function(){
    $("#opener_2").click(function(){
        $("#dialog_2").toggle();
    });
});

$(function(){
    $("#opener_3").click(function(){
        $("#dialog_3").toggle();
    });
});

$(function(){
    $("#opener_4").click(function(){
        $("#dialog_4").toggle();
    });
});












