$('.add-circle').on('click', function () {

    $('.option-hidden-menu').css('visibility', 'visible');

    $('.close-menu-btn').on('click', function () {
        $('.option-hidden-menu').css('visibility', 'hidden');
    });
    $('.add-player-button').on('click', function () {
        $('.option-hidden-menu').css('visibility', 'hidden');
    });
    $('.add-coach-button').on('click', function () {
        $('.option-hidden-menu').css('visibility', 'hidden');
    });
});



$('.add-player-button').on('click', function () {
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

$('.add-coach-button').on('click', function () {
    $('.coach-status-container').css('visibility', 'visible')
        .css('height', '100vh')
        .css('top', '0%')
        .css('transition', 'ease 0.7s');
    $('.coach-status-div')
        .css('visibility', 'visible')
        .css('transition', ' ease 0.6s')
        .css('top', '50%')
        .css('transform', ' translate(-50%, -50%)');

    $('#treatment_info').css('visibility', 'visible');

    $('.fa-times-circle').on('click', function () {
        $('.coach-status-div')
            .css('top', '-50%')
            .css('transform', ' translate(-50%, -100%)')
            .css('transition', 'ease 1s');

        $('.coach-status-container').css('visibility', 'hidden')
            .css('height', '0vh')
            .css('top', '-50%')
            .css('transition', 'ease 1.1s');
    });
});

function SendRequestToPlayer (value) {
    $.ajax({
        method: "POST",
        data: {"playerInfo": value, "team" : "Ludogorets19"},
        url: "{{ path("+sendRequestToPlayer+") }}",
    })
        .done(function (data) {

            console.log(data)
        });
}






$('.players').on('click', function () {
    var player = $(this).attr('id');
    $('.team-status-container').css('visibility', 'visible');
    $('.team-status-div').css('visibility', 'visible');

    $('.fa-times-circle').on('click', function () {
        $('.team-status-container').css('visibility', 'hidden');
        $('.team-status-div').css('visibility', 'hidden');
    });
    $('#no').on('click', function () {
        $('.team-status-container').css('visibility', 'hidden');
        $('.team-status-div').css('visibility', 'hidden');
    });
    $('#yes').on('click', function () {
        $.ajax({
            method: "POST",

            url: " app.php/admin/deletePlayer/" + player,
        })
            .done(function( msg ) {
                window.location.href = "app.php/admin/youthTeams";

            });
    });
});

$('.coaches').on('click', function () {
    var coache = $(this).attr('id');
    $('.team-status-container').css('visibility', 'visible');
    $('.team-status-div').css('visibility', 'visible');

    $('.fa-times-circle').on('click', function () {
        $('.team-status-container').css('visibility', 'hidden');
        $('.team-status-div').css('visibility', 'hidden');
    });
    $('#no').on('click', function () {
        $('.team-status-container').css('visibility', 'hidden');
        $('.team-status-div').css('visibility', 'hidden');
    });
    $('#yes').on('click', function () {
        $.ajax({
            method: "POST",

            url: " app.php/admin/deleteCoache/" + coache,
        })
            .done(function( msg ) {
                window.location.href = "app.php/admin/youthTeams";

            });
    });
});


$(".coacheFName").inputmask("Regex", {
    regex:'[А-Я][а-я]+' ,
    alias: "datetime",
    clearIncomplete: true
});

$('#send-info').on('click', function () {
    var name = $('.name').val();
    var fName = $('.fName').val();
    var position = $('#position').val();
    var phone = $('.phone').val();

    $('#position').val(0);
    $('.name').val('');
    $('.fName').val('');
    $('.phone').val('');

    $.ajax({
        method: "POST",
        data: {"appbundle_users[name]": name, "appbundle_users[fName]": fName, "position": position, "appbundle_players[phone]": phone},
        url: "{{ path('youthTeam',{id : teamId}) }}",
    })
        .done(function( msg ) {
            console.log(msg);
            console.log(name);console.log(fName);console.log(position);console.log(phone);

        });
});

$('#send-info-coache').on('click', function () {
    var name = $('.coacheName').val();
    var fName = $('.coacheFName').val();
    var coachePosition = $('#coachePosition').val();
    var phone = $('.coachePhone').val();
    console.log(name);console.log(fName);console.log(coachePosition);console.log(phone);

    $.ajax({
        method: "POST",
        data: {"appbundle_users[name]": name, "appbundle_users[fName]": fName, "position": coachePosition, "appbundle_coaches[phone]": phone},
        url: "{{ path('youthTeam',{id : teamId}) }}",
    })
        .done(function( msg ) {


            if (msg = 2) {
                $('#coachePosition').val(0);
                $('.name').val('');
                $('.fName').val('');
                $('.phone').val('');
            }else if (msg = 1){
                $('.phone').val('');
            }else if(msg = 0){
                $('#position').val(0);
            }else{

            }

        });
});