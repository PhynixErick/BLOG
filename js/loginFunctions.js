//Get modal element
var modal = document.getElementById('simpleModal');
//Get open modal button
var modalBtn = document.getElementById('loginSubmit');
//Get close button
var closeBtn = document.getElementById('closeBtn');

//Listen for click
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);

function openModal() {

    modal.style.visibility = 'visible';
}

function closeModal() {
    modal.style.visibility = 'hidden';
}