const selectProduct = document.querySelector('.select-name-product');

selectProduct.addEventListener('change', (e) => {
    const value = e.target.value;
    const coffee = document.querySelector('.coffee-tbody');
    const sweet = document.querySelector('.sweet-tbody');

    switch (value) {
        case 'Кофе':
            coffee.classList.toggle('display-hiden');
            sweet.classList.toggle('display-hiden');
            break;
        case 'Десерт':
            sweet.classList.toggle('display-hiden');
            coffee.classList.toggle('display-hiden');
            break;
    
        default:
            break;
    }
})