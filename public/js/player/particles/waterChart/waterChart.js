function createChart(labels, data ){
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL,  {
        type: 'line',
        data: {
            labels: labels,
    datasets: [{
        label: "Дневен прием на вода",
        data:  data ,
    backgroundColor: [
        'rgba(105, 0, 132, .2)',
    ],
        borderColor: [
        'rgba(200, 99, 132, .7)',
    ],
        borderWidth: 2
}
]
},
    options: {
        responsive: true
    }
});


}


