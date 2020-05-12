$('.search').keyup(function (event) {
if ($(this).val()) {
    var request = 'http://myphp.com/musique.php?request=' + $(this).val();
} else {
    var request = 'http://myphp.com/musique.php';
}
history.pushState({
    id: 'search'
}, 'sadas', request);
    $.ajax({
        type: 'GET',
        url: 'http://myphp.com/musique_ajax.php',
        data: {
            'request': $(this).val()
        },
        success: function(response) {
            $('.content').remove();
            $(response).appendTo('body');
        }
    });
});
