function acceptRequestFromTeam(value){
    $.ajax({
        type: "POST",
        url: "player/acceptCoachRequest/" + value,
        data: {'teamName': value}
    })
        .done(function (data) {
            window.location.replace("player");
        });


}