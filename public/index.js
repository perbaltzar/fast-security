//Dark Mode Function

const body = document.querySelector('body');
const button = document.querySelector('button');
const modal = document.querySelector('.modal');
const modalBackground = document.querySelector('.modal-background');



button.addEventListener('click', () => {
  body.classList.toggle('dark-mode'); //byter från lägga till, till ta bort.

});


let navbar = document.querySelector('.navbar');
let sticky = navbar.offsetTop;

//NavBar sticking to the top.
window.onscroll = () => {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};


const openModal = () => {
  modal.style.display = 'block';
  modalBackground.style.display = 'block';
};
modalBackground.addEventListener('click', () => {
  modal.style.display = 'none';
  modalBackground.style.display = 'none';
});


setTimeout(openModal, 3000);
