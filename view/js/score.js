var result = localStorage.getItem('res');
var score = localStorage.getItem('scr');
var name = localStorage.getItem('name');


var advice = parseInt(score);

document.getElementById("name").innerHTML = name;

//print the result
document.getElementById("showResult").innerHTML = result;

//print advice depending on result
if(advice < 5){
    document.getElementById("advice").innerHTML = "Merely have chance to get affected by COVID-19. Please stay in atleast 6 feet away from other people. Contact doctor for more advices.";
}
else if(advice = 5){
    document.getElementById("advice").innerHTML = "Possible suspected case for COVID-19 affected. Please stay in isolation for 2 weeks. Contact doctor for advices.";
}
else if(advice > 5 & advice < 7){
    document.getElementById("advice").innerHTML = "Highly chance of COVID-19 affected. You are asked to avoid any physical contact with people, and stay isolation. Contact doctor immediately.";
}
else{
    document.getElementById("advice").innerHTML = "Almost confirmed case of COVID-19 positive. Please stay in isolation and avoid any physical contact with other people, and contact doctor immediately. Best is to be hospitalized as soon as possible.";
}
