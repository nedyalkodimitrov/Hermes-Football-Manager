function DeleteTeamRequest(value){
    $.ajax({
        type: "POST",
        url: "removeTeamRequest",
        data: {'teamRequestId': value}
    })
        .done(function (data) {
            window.location.replace("player");
        });


}