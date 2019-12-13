// const red_min_hex = '45';
// const red_min_dec = parseInt(red_min_hex, 16);
// const red_max_hex = 'cc';
// const red_max_dec = parseInt(red_max_hex, 16);
// const green_min_hex = '35';
// const green_min_dec = parseInt(green_min_hex, 16);
// const green_max_hex = 'ac';
// const green_max_dec = parseInt(green_max_hex, 16);
// const blue_min_hex = '20';
// const blue_min_dec = parseInt(blue_min_hex, 16);
// const blue_max_hex = '78';
// const blue_max_dec = parseInt(blue_max_hex, 16);
//
// const pi = Math.PI;
//
// const animateArc = chart => {
//     let arc = chart.getDatasetMeta(0).data[0];
//     let angle = arc._view.endAngle + pi / 2;
//     let angle_inverse = 2 * pi - angle;
//     let blue = Math.round(
//         (angle / (2 * pi)) * blue_max_dec + (angle_inverse / (2 * pi)) * blue_min_dec
//     ).toString(16);
//     if (arc._view.endAngle < pi / 2) {
//         let green = Math.round(
//             (angle / pi) * green_max_dec + ((pi - angle) / pi) * green_min_dec
//         ).toString(16);
//         if (green.length < 2) green = '0' + green;
//         let color = `#${red_max_hex}${green}${blue}`;
//         arc.round.backgroundColor = color;
//         drawArc(chart, arc, color);
//     } else {
//         let red = Math.round(
//             ((2 * pi - angle) / pi) * red_max_dec + ((angle - pi) / pi) * red_min_dec
//         ).toString(16);
//         if (red.length < 2) red = '0' + red;
//         if (red === '45') red = 50;
//         if (blue === '78') blue = 74;
//         let color = `#${red}${green_max_hex}${blue}`;
//         arc.round.backgroundColor = color;
//         drawArc(chart, arc, color);
//     }
// }
//
// const drawArc = (chart, arc, color) => {
//     let x = (chart.chartArea.left + chart.chartArea.right) / 2;
//     let y = (chart.chartArea.top + chart.chartArea.bottom) / 2;
//     chart.ctx.fillStyle = color;
//     chart.ctx.strokeStyle = color;
//     chart.ctx.beginPath();
//     if (arc != null) {
//         chart.ctx.arc(x, y, chart.outerRadius, arc._view.startAngle, arc._view.endAngle);
//         chart.ctx.arc(x, y, chart.innerRadius, arc._view.endAngle, arc._view.startAngle, true);
//     } else {
//         chart.ctx.arc(x, y, chart.outerRadius, 0, 2 * pi);
//         chart.ctx.arc(x, y, chart.innerRadius, 0, 2 * pi, true);
//     }
//     chart.ctx.fill();
// }
//
// const addCenterTextAfterUpdate = chart => {
//     if (
//         chart.config.options.elements.center &&
//         chart.config.options.elements.centerSub &&
//         chart.ctx
//     ) {
//         const centerConfig = chart.config.options.elements.center;
//         const centerConfigSub = chart.config.options.elements.centerSub;
//         const globalConfig = Chart.defaults.global;
//         let fontStyle = centerConfig.fontStyle;
//         let fontFamily = Chart.helpers.getValueOrDefault(centerConfig.fontFamily, 'Roboto');
//         let fontSize = Chart.helpers.getValueOrDefault(centerConfig.minFontSize, 20);
//         let maxFontSize = Chart.helpers.getValueOrDefault(centerConfig.maxFontSize, 90);
//         let maxText = Chart.helpers.getValueOrDefault(centerConfig.maxText, centerConfig.text);
//         do {
//             chart.ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);
//             let textWidth = chart.ctx.measureText(maxText).width;
//             if (textWidth < chart.innerRadius * 2 && fontSize < maxFontSize) fontSize += 1;
//             else {
//                 fontSize -= 1;
//                 break;
//             }
//         } while (true);
//         chart.center = {
//             font: Chart.helpers.fontString(fontSize, fontStyle, fontFamily),
//             fillStyle: Chart.helpers.getValueOrDefault(
//                 centerConfig.fontColor,
//                 globalConfig.defaultFontColor
//             ),
//         };
//         fontSize = Chart.helpers.getValueOrDefault(centerConfigSub.minFontSize, 10);
//         maxFontSize = Chart.helpers.getValueOrDefault(centerConfigSub.maxFontSize, 25);
//         maxText = centerConfigSub.text;
//         do {
//             chart.ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);
//             let textWidth = chart.ctx.measureText(maxText).width;
//             if (textWidth < chart.innerRadius * 2 && fontSize < maxFontSize) fontSize += 1;
//             else {
//                 fontSize -= 1;
//                 break;
//             }
//         } while (true);
//         chart.centerSub = {
//             font: Chart.helpers.fontString(fontSize, fontStyle, fontFamily),
//             fillStyle: Chart.helpers.getValueOrDefault(
//                 centerConfigSub.fontColor,
//                 globalConfig.defaultFontColor
//             ),
//         };
//     }
// }
//
// const roundCornersAfterUpdate = chart => {
//     if (chart.config.options.elements.arc.roundCorners !== undefined) {
//         let arc = chart.getDatasetMeta(0).data[chart.config.options.elements.arc.roundCorners];
//         arc.round = {
//             x: (chart.chartArea.left + chart.chartArea.right) / 2,
//             y: (chart.chartArea.top + chart.chartArea.bottom) / 2,
//             radius: (chart.outerRadius + chart.innerRadius) / 2,
//             thickness: (chart.outerRadius - chart.innerRadius) / 2,
//             backgroundColor: arc._model.backgroundColor,
//         };
//     }
// };
//
// const addCenterTextAfterDraw = chart => {
//     if (chart.center && chart.centerSub) {
//         chart.ctx.textAlign = 'center';
//         chart.ctx.textBaseline = 'middle';
//         const centerX = (chart.chartArea.left + chart.chartArea.right) / 2;
//         const centerY = (chart.chartArea.top + chart.chartArea.bottom) / 2;
//         const lowerY = (chart.chartArea.top + chart.chartArea.bottom) / 2 + 65;
//         const centerConfig = chart.config.options.elements.center;
//         chart.ctx.font = chart.center.font;
//         chart.ctx.fillStyle = chart.center.fillStyle;
//         chart.ctx.fillText(centerConfig.text, centerX, centerY);
//         const centerSubConfig = chart.config.options.elements.centerSub;
//         chart.ctx.font = chart.centerSub.font;
//         chart.ctx.fillStyle = chart.centerSub.fillStyle;
//         chart.ctx.fillText(centerSubConfig.text, centerX, lowerY);
//     }
// };
//
// const roundCornersAfterDraw = chart => {
//     if (chart.config.options.elements.arc.roundCorners !== undefined) {
//         var arc = chart.getDatasetMeta(0).data[chart.config.options.elements.arc.roundCorners];
//         var startAngle = pi / 2 - arc._view.startAngle;
//         var endAngle = pi / 2 - arc._view.endAngle;
//         chart.ctx.save();
//         chart.ctx.translate(arc.round.x, arc.round.y);
//         chart.ctx.fillStyle = arc.round.backgroundColor;
//         chart.ctx.beginPath();
//         chart.ctx.arc(
//             arc.round.radius * Math.sin(startAngle),
//             arc.round.radius * Math.cos(startAngle),
//             arc.round.thickness,
//             0,
//             2 * pi
//         );
//         chart.ctx.arc(
//             arc.round.radius * Math.sin(endAngle),
//             arc.round.radius * Math.cos(endAngle),
//             arc.round.thickness,
//             0,
//             2 * pi
//         );
//         chart.ctx.fill();
//         chart.ctx.restore();
//     }
// };
// var data = $('#playersStatus').val();
// var datasets = [{
//     "data": [99  , 100],
//     "backgroundColor": [ "#e0e0e0", "#e0e0e0" ]
// }];
// var chartData = {
//     type: 'doughnut',
//     data: { datasets: datasets },
//     options: {
//         responsive: true,
//         maintainAspectRatio: false,
//         cutoutPercentage: 95,
//         segmentShowStroke: false,
//         events: [],
//         elements: {
//             arc: {
//                 roundCorners: 0,
//                 borderWidth: 0
//             },
//             center: {
//                 maxText: "100%",
//                 text: `${datasets[0].data[1]}`,
//                 fontColor: "#646464",
//                 fontFamily: "Roboto",
//                 fontStyle: "normal",
//                 minFontSize: 20,
//                 maxFontSize: 90
//             },
//             centerSub: {
//                 text: ``,
//                 fontColor: "#a6a6a6",
//                 minFontSize: 10,
//                 maxFontSize: 25,
//
//             }
//         },
//         animation: {
//             onProgress: animation => {
//                 animation.easing = 'linear';
//                 animateArc(animation.chart)
//             }
//         }
//     }
// }
//
// var ctx = document.getElementById('chart').getContext('2d');
// var chart = new Chart(ctx, {
//     ...chartData,
//     plugins: [{
//         beforeDraw: chart => {
//             drawArc(chart, null, '#e0e0e0');
//         },
//         afterUpdate: chart => {
//             addCenterTextAfterUpdate(chart);
//             roundCornersAfterUpdate(chart);
//         },
//         afterDraw: chart => {
//             addCenterTextAfterDraw(chart);
//             roundCornersAfterDraw(chart);
//         },
//         resize: () => new Chart(ctx, {
//             ...chartData,
//             plugins: [{
//                 beforeDraw: chart => {
//                     drawArc(chart, null, '#e0e0e0');
//                 },
//                 afterUpdate: chart => {
//                     addCenterTextAfterUpdate(chart);
//                     roundCornersAfterUpdate(chart);
//                 },
//                 afterDraw: chart => {
//                     addCenterTextAfterDraw(chart);
//                     roundCornersAfterDraw(chart);
//                 },
//             }]
//         })
//     }]
// });
//
/**
 * Built with the jQuery plugin that was born as a result of the great dribble shot
 * https://rendro.github.io/easy-pie-chart/
 **/
//
// function color(percent) {
//     var color = '#F44336';
//
//     if (percent > 50) {
//         color = '#8bc34a'; //green
//     } else {
//         color = '#F44336'; //red
//     }
//     return color;
// }
//
// $('.percentage').easyPieChart({
//     animate: 1000,
//     lineWidth: 5,
//     scaleColor: false,
//     size: 124,
//     onStep: function(value) {
//         this.$el.find('span').text(Math.round(value));
//     },
//     onStop: function(value, to) {
//         this.$el.find('span').text(Math.round(to));
//     },
//     barColor: color
// });
// var app = angular.module('app', ['easypiechart']);
// app.controller('chartCtrl', ['$scope', function ($scope) {
//     $scope.percent = 65;
//     $scope.options = {
//         animate:{
//             duration:0,
//             enabled:false
//         },
//         barColor:'#2C3E50',
//         scaleColor:false,
//         lineWidth:20,
//         lineCap:'circle'
//     };
// }]);
$(function () {
    $('.min-chart#chart-sales').easyPieChart({
        barColor: "#fa6b4d",
        scaleColor: "#dad2da",
        trackColor: "#dad2da",
        scaleLength: 5,
        size: 150,
        onStep: function (from, to, percent) {
            $(this.el).find('.chart-text').text(Math.round(percent));
        }
    });
});