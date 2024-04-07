// const block = entry.target.querySelector('.appear');

// Создать наблюдателя
const observer = new IntersectionObserver(entries => {
   // перебор записей
   entries.forEach(entry => {
    const block = entry.target.querySelector('.appear');
    // если элемент появился
    if (entry.isIntersecting) {
      // добавить ему CSS-класс
      block.classList.add('animate__animated','animate__fadeInLeft');
      return;
    }
    block.classList.remove('animate__animated','animate__fadeInLeft');

  });
});


// Сообщить наблюдателю, какие элементы следует отслеживать
observer.observe(document.querySelector('.appear-wrap'));