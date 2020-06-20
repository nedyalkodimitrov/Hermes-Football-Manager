function acceptRequestFromTeam(value){
    $.ajax({
        type: "POST",
        url: "player/acceptTeamRequest/" + value,
        data: {'teamName': value}
    })
        .done(function (data) {
            window.location.replace("player");
        });


}