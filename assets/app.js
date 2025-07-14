
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';
import './styles/app.scss';
import './scripts/loader.js';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


const modal = document.getElementById('customModal');
const open = document.getElementById('openModal');
const close = modal.querySelector('.close');

open.addEventListener('click', () => {
    modal.style.display = 'block';
    console.log("test"); 
});

close.addEventListener('click', () => {
    modal.style.display = 'none';
});

window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});