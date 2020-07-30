function getTrainingByDate(date){
   var results = [];
    console.log(date);

    $.ajax({
        type: "POST",
        url: "/coache/trainingByDate",
        data: {'date': date}
    })
        .done(function( msg ) {
            console.log(  msg );
            results = msg;

        });
    return results;
}
