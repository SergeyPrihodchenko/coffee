let animatedBlocks = document.querySelectorAll('.appear');

const callback = (entries, observer) => {
  entries.forEach((entry) => {
    // если элемент появился
    if(entry.isIntersecting) {
      if(entry.target.classList.contains('appear')) {
        entry.target.classList = [...entry.target.classList, entry.target.dataset.animation].join(' ');
        observer.unobserve(entry.target);
      }
    }
  });
}

let options = {
  // root: document.querySelector('.appear-wrap'),
  threshold: 0
};

// Создать наблюдателя
let observer = new IntersectionObserver(callback, options);

// Сообщить наблюдателю, какие элементы следует отслеживать
animatedBlocks.forEach((elem) => observer.observe(elem));