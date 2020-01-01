
$('.add-player-container').on('click', function () {
    $('.player-status-container').css('visibility', 'visible')
        .css('height', '100vh')

    $('.player-status-div')
        .css('top', '50%')
        .css('transform', ' translate(-50%, -50%)');

    $('#treatment_info').css('visibility', 'visible');

    $('.fa-times-circle').on('click', function () {
        $('.player-status-div')
            .css('top', '0%')
            .css('transform', ' translate(-50%, -100%)');

        $('.player-status-container').css('visibility', '')
            .css('height', '0vh')


    });


});