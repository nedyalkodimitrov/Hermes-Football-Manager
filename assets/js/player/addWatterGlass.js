$('.water-button-plus').on('click', function() {

    var numOfWaterGlasses = parseInt($('.numOfWaterGlasses').text());
    if (numOfWaterGlasses >= 0 && numOfWaterGlasses < 20){
        var currentWaterGlasses = numOfWaterGlasses + 1;
    }
    $.ajax({
        url: '/player/addWaterGlasses',
        type: "POST"

    })
        .done(function( msg ) {

        });

    $('.numOfWaterGlasses').html(currentWaterGlasses);

});


