/* -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ */

'use strict'

//ITEMS SELECTION FROM HTML

const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.close-sell-house');

const btnOpenModalLogin = document.querySelector('#sell');

const modalLogin = document.querySelector('.sell-house')


//Fontion Pour Ouvrir le Modal En Cliquant Sur SELL YOUR PROPERTY
const openModal = function (e) {
    e.preventDefault();
    modalLogin.classList.remove('hidden');
    overlay.classList.remove('hidden');

};

//Close Modal
const closeModal = function () {
    modalLogin.classList.add('hidden');
    overlay.classList.add('hidden');
};

btnOpenModalLogin.addEventListener('click', openModal);

//Close Modal apres clique sur le bouton croix
btnCloseModal.addEventListener('click', closeModal);

//Close Modal apres clique sur le BLUR
overlay.addEventListener('click', closeModal);

//Close Modal apres appuyer ECHAP
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !modalLogin.classList.contains('hidden')) {
        closeModal();
    }
});


/* -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ */
