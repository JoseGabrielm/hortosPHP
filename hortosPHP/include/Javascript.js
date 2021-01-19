$('.Apagar').on('click', function(event) {
    event.preventDefault();

    var Link = $(this).attr('href');

    if (confirm("Deseja mesmo apagar?")) {
        window.location.href = Link;
    } else {

        return false;

    }

});



$('.header').click(function() {
    $(this).toggleClass('expand').nextUntil('tr.header').slideToggle(0);
});