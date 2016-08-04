$( document ).ready(function() {
    $("#services, #about, #team, #contact").css("display", "none");
    $(".filter").css("visibility", "hidden");













    $( "#navabout" ).click(function() {
        $( "#about" ).toggle( "slow", function() {
            $(".filter").css("visibility", "visible");

        });
    });

    $( "#navservices" ).click(function() {
        $( "#services" ).toggle( "slow", function() {
            $(".filter").css("visibility", "visible");
            // Animation complete.
        });
    });


    $( "#navteam" ).click(function() {
        $( "#team" ).toggle( "slow", function() {
            $(".filter").css("visibility", "visible");
            // Animation complete.
        });
    });


    $( "#navcontact" ).click(function() {
        $( "#contact" ).toggle( "slow", function() {
            $(".filter").css("visibility", "visible");
            // Animation complete.
        });
    });







    $("#navcontact, #navservices, #navteam").click(function(){
        $("#about").slideUp( "slow", function() {
            // Animation complete.
        });
    });

    $("#navabout, #navcontact, #navteam").click(function(){
        $("#services").slideUp( "slow", function() {
            // Animation complete.
        });
    });

    $("#navcontact, #navservices, #navabout").click(function(){
        $("#team").slideUp( "slow", function() {
            // Animation complete.
        });
    });

    $("#navabout, #navservices, #navteam").click(function(){
        $("#contact").slideUp( "slow", function() {
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



    $( "#welcome" ).click(function() {
        $( "#about, #services, #team, #contact" ).hide( "slow", function() {
            $(".filter").css("visibility", "hidden");
            // Animation complete.
        });
    });




});








