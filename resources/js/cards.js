const cards = document.querySelectorAll('.card-item');

cards.forEach(card => 
  card.addEventListener('click', () => {
    card.querySelector('.card-info').classList.toggle('card-info-up'); 
  })
);