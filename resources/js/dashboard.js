const selectPdocunt = document.querySelector('.select-name-product');
const namePdocut = document.querySelector('.name-product');

namePdocut.textContent = selectPdocunt.value;

let path = 'setCoffee';

selectPdocunt.addEventListener('change', (e) => {
    
    namePdocut.textContent = e.target.value + (e.target.value == 'Десерт' ? 'а' : '');

    path = 'setSweet';

});

const titleInp = document.querySelector('.title');
const descriptionInp = document.querySelector('.description');
const fileInput = document.querySelector('.file-input');

const coffeeForm = document.querySelector('.coffee-form');

const imgInp = document.querySelector('.img-previou');
imgInp.innerHTML = '<svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" /></svg>';

fileInput.addEventListener('change', (e) => {
    let f = e.target.files[0];
    if(!f.type.match('image/*')) {
        f = [];
    }
    const reader = new FileReader();
    
    

    reader.onloadend = () => {
        const img = document.createElement('img');
        img.src = reader.result;
        img.width = 190;
        img.height = 190;
        img.alt = 'not loding IMG';
        imgInp.removeChild(imgInp.lastChild);
        imgInp.append(img);
    }

    reader.readAsDataURL(f);
})

coffeeForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData;
    formData.append('title', titleInp.value);
    formData.append('description', descriptionInp.value);
    formData.append('img', fileInput.files[0]);

    axios.post('admin/product/' + path, formData, {
        headers: {
            "Content-Type": 'multipart/form-data'
        }
    })
    .then(res => {
        titleInp.value = '';
        descriptionInp.value = '';
        fileInput.files[0];
        imgInp.innerHTML = '<svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" /></svg>';
    })
    .catch(err => {
        console.log(err);
    })
});