const body = document.querySelector('body');
const button = document.querySelector('button')




button.addEventListener('click', () => {
  body.classList.toggle('dark-mode'); //byter från lägga till, till ta bort.
});