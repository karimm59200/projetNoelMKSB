const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
	document.querySelector('#countdown').classList.toggle('blue');
	document.querySelector('.button-noel').classList.toggle('blue');
	document.querySelector('#form').classList.toggle('blue');
	document.querySelector('#ajouterbtn').classList.toggle('red');
});