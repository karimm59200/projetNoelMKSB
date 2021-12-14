// COUNTDOWN //

// Set the date we're counting down to
var countDownDate = new Date("Dec 16, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("countdown").innerHTML =  `<div class="timer2">${days}<br> jours</div><div class="timer2">${hours}<br> hours</div><div class="timer2">${minutes}<br> minutes</div><div class="timer2">${seconds}<br> secondes</div>`
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);

// COUNTDOWN fin //

// FUNCTION AJOUTER //

let ajouter = document.querySelector('#ajouterid');
let input = document.querySelector('#inputAjouter');
let form = document.querySelector('#form')

ajouter.addEventListener('click', (e) => {
  e.preventDefault();
  let div = document.createElement("div");
  div.innerHTML = `${input.value}`
  document.querySelector('#section-list').appendChild(div);
});

ajouter.addEventListener('click', (e) => {
  e.preventDefault();
  input.value ="";
});

// let cadeaux = document.querySelector('#img-cadeaux')

// cadeaux.addEventListener('click', e => {
//   e.preventDefault();
  
// })

// Tirage au sort
// const list = []; //création du tableau vide

// doument.querySelector('#name').addEventListener('keypress', function (e) {
//   if (e.key === "Entrer") {
//     const name = document.getElementById('name').value;
//     list.push(name);
//     console.log(list);
//   };
// });

// const go = document.getElementById('go');

// go.addEventListener('click', function() {
//   const choose = Math.floor(Math.random()*list.length);

//   const result = list[choose];
//   document.getElementById('result').textContent = result;

//   list.splice(choose, 1);
//   console.log(list);
// });