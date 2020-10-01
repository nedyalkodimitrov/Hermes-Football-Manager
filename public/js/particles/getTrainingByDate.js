 function  getTrainingByDate(date){
    var results = [];
    var a = 5;


    console.log(date);

     return $.ajax({
        url: "trainingByDate",
        data: {'date': date},


    });

     return a;



}

