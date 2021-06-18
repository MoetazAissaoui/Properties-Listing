/* -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ */

'use strict';

//ITEMS SELECTION FROM HTML

const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.close-modal');

const btnOpenModalLogin = document.querySelector('.show-login');
const btnOpenModalSignup = document.querySelector('.show-signup');

const modalLogin = document.querySelector('.modal--login')
const modalSignup = document.querySelector('.modal--signup')

//Les Deux Boutons Dans SECTION SEARCH
const btnOpenModalLogin2 = document.querySelector('.show-login2');
const btnOpenModalSignup2 = document.querySelector('.show-signup2');



//Fontion Pour Ouvrir le Modal En Cliquant Sur LOGIN dans NAVBAR
const openModal = function (e) {
    e.preventDefault();
    modalLogin.classList.remove('hidden');
    overlay.classList.remove('hidden');

};

//Fontion Pour Ouvrir le Modal En Cliquant Sur SIGN UP dans SEARCH
const openSignup = function (e) {
    e.preventDefault();
    modalLogin.classList.add('hidden');
    modalSignup.classList.remove('hidden');
}

//Ouvrir le Modal Sign UP FROM LOGIN MODAL
const openSignup2 = function (e) {
    e.preventDefault();
    modalSignup.classList.remove('hidden');
    overlay.classList.remove('hidden');
}

//Close Modal
const closeModal = function () {
    modalLogin.classList.add('hidden');
    modalSignup.classList.add('hidden');
    overlay.classList.add('hidden');
};


btnOpenModalLogin.addEventListener('click', openModal);
btnOpenModalLogin2.addEventListener('click', openModal);

btnOpenModalSignup.addEventListener('click', openSignup);
btnOpenModalSignup2.addEventListener('click', openSignup2);

//Close Modal apres clique sur le bouton croix
btnCloseModal.addEventListener('click', closeModal);

//Close Modal apres clique sur le BLUR
overlay.addEventListener('click', closeModal);

//Close Modal apres appuyer ECHAP
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && (!modalLogin.classList.contains('hidden') || !modalSignup.classList.contains('hidden'))) {
        closeModal();
    }
});


//Implementation de PASSWORD EYE
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {

    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    this.classList.toggle('fa-eye-slash');
});


//Condition sur PASSWORD MATCH dans SIGN UP - PASSWORD ans Re-Type PASSWORD
const btnSignupLast = document.querySelector('#lastSignup');


/* -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ */






