const burger = document.querySelector('.burger-container');
const drop_in = document.querySelector('.drop-in');


burger.addEventListener('click', ()=> {
  drop_in.classList.toggle('drop-in-active');
  burger.classList.toggle('burger-animation');
});
