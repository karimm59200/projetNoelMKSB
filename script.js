// COUNTDOWN //

// Set the date we're counting down to
var countDownDate = new Date("Dec 15, 2021 16:00:00").getTime();

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
  document.getElementById("countdown").innerHTML =  `<div class="temps">${days}<br> jours</div><div class="temps">${hours}<br> hours</div><div class="temps">${minutes}<br> minutes</div><div class="temps">${seconds}<br> secondes</div>`

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "<h1>Joyeux Noël !!</h1>";
  }
}, 1000);

// COUNTDOWN fin //

// FUNCTION AJOUTER //

//let ajouter = document.querySelector('#ajouterbtn');
// let input = document.querySelector('#inputAjouter');

// ajouter.addEventListener('click', e => {
//   e.preventDefault();
//   let div = document.createElement("div");
//   div.innerHTML = `${input.value}`;
// console.log(div);
//   document.querySelector('#section-list').appendChild(div);
// });

// ajouter.addEventListener('click', e => {
//   e.preventDefault();
//   input.value ="";
// });

// let cadeau = document.querySelector('#img-cadeau')

// cadeau.addEventListener('click', e => {
  //   e.preventDefault();
  
  // })

// let div = [`${input.value}`];
// console.log(div);


// TIRAGE AU SORT //

