
$('.add-player-container').on('click', function () {
    $('.player-status-container').css('visibility', 'visible')
        .css('height', '100vh')
        .css('top', '0%')
        .css('transition', 'ease 0.7s');
    $('.player-status-div')
        .css('visibility', 'visible')
        .css('transition', ' ease 0.6s')
        .css('top', '50%')
        .css('transform', ' translate(-50%, -50%)');

    $('#treatment_info').css('visibility', 'visible');

    $('.fa-times-circle').on('click', function () {
        $('.player-status-div')
            .css('top', '-50%')
            .css('transform', ' translate(-50%, -100%)')
            .css('transition', 'ease 1s');

        $('.player-status-container').css('visibility', 'hidden')
            .css('height', '0vh')
            .css('top', '-50%')
            .css('transition', 'ease 1.1s');


    });


});