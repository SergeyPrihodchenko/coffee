import 'bootstrap/dist/js/bootstrap.js';
import 'animate.css';




import './bootstrap';
import './header';
import './product-slider';

import Alpine from 'alpinejs';
import axios from 'axios';


window.Alpine = Alpine;

Alpine.start();

const imgs = [];

const file = document.querySelector('.file-input');
const txt = document.querySelector('.text-message');
const sendBtn = document.querySelector('.send-btn');

sendBtn.addEventListener('click', async () => {
    axios.post('admin/product/setCoffee', {'title': txt.value})
    .then(response => {
        console.log(response);
    })
    .catch(err => {
        console.log(err);
    })
});

file.addEventListener('change', (e) => {
    imgs.push(e.target.files[0]);
});

