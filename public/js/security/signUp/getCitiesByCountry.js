$('#country').change( function() {
    var countryId = $(this).find(':selected').attr('data-id');

    $.ajax({
        type: "POST",
        url: "/getCitiesByCountry",
        data: {'countryId' : countryId}
    })
        .done(function( msg ) {
            var cities = JSON.parse(msg)
            $('#cities option').remove();
            $('#cities').append("<option>Choose city</option>>");
           for(let i = 0; i < cities.length; i++){
                $('#cities').append("<option>"+cities[i][1] +"</option>>");
           }
console.log(cities);
            console.log("Gotovo");
        });


});

