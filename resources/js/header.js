
window.addEventListener('DOMContentLoaded', ()=>{
  const header = document.querySelector('.header'); // элемент header
  const burger = header.querySelector('.burger'); // кнопка меню
  const nav = header.querySelector('.coffee__nav'); // блок с навигацией
  const clsNav = nav.querySelector('.close__nav'); // кнопка закрытия меню
  const containerMessager = document.querySelector('.container_messager');
  const buttonMessager = containerMessager.querySelector('.btn-messager'); // кнопка чата
  const modalMessager = document.querySelector('.container-modal-messager');
  const btnCloseModal = modalMessager.querySelector('.messager-close');
  const displayMessager = modalMessager.querySelector('.display-messages');
  const inpMessager = modalMessager.querySelector('.input-messager');
  const btnImg = modalMessager.querySelector('.btn_img'); // кнопка добавления картинки
  const btnSend = modalMessager.querySelector('.btn_send'); // кнопка отправки сообщения

  inpMessager.addEventListener('focus', () => {
    const elem = document.createElement('li');
    elem.classList.add('f-left');
    elem.classList.add('row-message');
    elem.classList.add('temp-li');
    elem.style.display = 'none';
    displayMessager.appendChild(elem);
  });

  inpMessager.addEventListener('input', (e) => {

    const value = e.target.value;

    const tempLi = document.querySelector('.temp-li');

    if(value.length > 0) {
      tempLi.style.display = 'inline-block';
      tempLi.innerHTML = value;
    }

    if(value.length < 1) {
      tempLi.style.display = 'none';
    }

  });

  btnCloseModal.addEventListener('click', () => {
    modalMessager.style.display = 'none';
    containerMessager.style.display = 'block';
  });
  
  const aticeAnimate = () => {
  
    if(containerMessager.classList.contains('animate__slideInUp')) {
      setTimeout(() => {
        containerMessager.classList.remove('animate__slideInUp');
        if(containerMessager.classList.contains('animate__tada')) {
          containerMessager.classList.remove('animate__tada');
        }
        setTimeout(() => {
          containerMessager.classList.add('animate__tada');
        }, 500);
      })
    }
    if(containerMessager.classList.contains('animate__tada')) {
      containerMessager.classList.remove('animate__tada');
    }
  
    setTimeout(() => {
      containerMessager.classList.add('animate__tada');
    }, 1000);
  }
  
  burger.addEventListener('click', () => {
    // nav.classList.remove('animate__slideOutDown');
    // nav.classList.add('animate__animated', 'animate__slideInUp');
    nav.classList.add('open');
  
  });
  
  let intervalAnimate = setInterval(aticeAnimate, 4000);
  
  buttonMessager.addEventListener('mouseover', () => {
    clearInterval(intervalAnimate);
  })
  
  buttonMessager.addEventListener('mouseout', () => {
    intervalAnimate = setInterval(aticeAnimate, 4000);
  })
  
  buttonMessager.addEventListener('click', async (e) => {
  
    window.axios.post('/messager/render', {
      
    })
    .then((result) => {
      
      if(result.data) {

        if(result.data.messages.length > 0) {

          result.data.messages.map((el) => {
            const li = document.createElement('li');
            li.classList.add();
            li.classList.add(result.data.auth_id == el.user_id ? 'f-left' : 'f-right');
            li.classList.add('row-message');
            li.textContent = el.text;
            displayMessager.appendChild(li);
          });

        }
        
        containerMessager.classList.add('animate__tada');
      
        containerMessager.style.display = 'none';
        modalMessager.style.display = 'block';
      } else {

        console.log('Авторизуйтесь !');
        //************************************************** */ надо сделать предупреждение 
      }

    })
    .catch((err) => {
      console.log(err);
    })

    
  })

  btnSend.addEventListener('click', (e) => {
    window.axios.post('messager/create', {text: inpMessager.value})
    .then((res) => {
      displayMessager.lastElementChild.classList.remove('temp-li');
      inpMessager.value = '';
    })
    .catch((err) => {
      console.log(err);
    })

  });
  
  clsNav.addEventListener('click', () => {
    // nav.classList.remove('animate__slideInUp');
    // nav.classList.add('animate__slideOutDown');
    nav.classList.remove('open');
  });
  
  window.onscroll = function() {
    if (window.scrollY > 100) {
      header.classList.add("color");
  } else {
      header.classList.remove("color");
  }
  }


  
  });
  
  