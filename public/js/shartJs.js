var xValues = ["Achats", "Vents", "bancaire", "persones"];  
var yValues = [$('#Achat').val(),$('#Vents').val(),$('#Bancaire').val(),$('#TVA').val()];  
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
 
}); 
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::
var xValues = [];
var yValues = [];
var tva=$('#resultTva').val(); 
generateData("x * 2 + 7", 0,500, 0.5);

new Chart("myCharts", {
type: "line",
data: {
labels: xValues,
datasets: [{
fill: false,
pointRadius:1,  
borderColor:"rgba(255,0,0,0.5)",
data: yValues   
}]
},    
options: {
legend: {display: false},
title: {
display: true,
fontSize: 16
}
}
});
function generateData(value, i1, i2, step = 1) {
for (let x = i1; x <= i2; x += step) {
yValues.push(eval(value));
xValues.push(x);
}
}