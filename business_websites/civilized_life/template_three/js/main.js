$("a[data-target='.nav-collapse-post']").click(function () {
    $(".nav-collapse-filter").collapse("hide");
    $(".nav-collapse-post").collapse('toggle');
});

$("a[data-target='.nav-collapse-filter']").click(function () {
    $(".nav-collapse-post").collapse('hide');
    $(".nav-collapse-filter").collapse("toggle");
});