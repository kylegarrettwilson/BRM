

$( document ).ready(function() {


    $("#image").click(function () {
        $("#bio").show("bounce", 1000);
    });

    $("#bio").click(function () {
        $("#bio").hide("slow");
    });


    $("#image").mouseover(function () {
        $("#image").css("background-image", "url(images/about_me2.jpg)");
    });

    $("#image").mouseout(function () {
        $("#image").css("background-image", "url(images/about_me.jpg)");
    });


});