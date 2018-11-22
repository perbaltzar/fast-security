//Burger Variables
const burger = document.querySelector('.burger-container');
const drop_in = document.querySelector('.drop-in');
//Sticky Navbar Variables
const sticky = document.querySelector('.navbar-further-down ');
const sticky_appear = document.querySelector('.second-hero');
//Modal variables
const modal = document.querySelector('.modal-container');
const close = document.querySelector('.close');

//Activate the drop down menu
burger.addEventListener('click', ()=> {
  drop_in.classList.toggle('drop-in-active');
  burger.classList.toggle('burger-animation');
});
//Sticky NAVBAR
window.addEventListener('scroll', () => {
  if (window.pageYOffset >= sticky_appear.offsetTop) { //maybe chosing picture 2 or something like that
    sticky.classList.add("navbar-visible")
  } else {
    sticky.classList.remove("navbar-visible");
  }
});

//Open the modal
const open_modal = () => {
  modal.style.display = 'flex';
};
//Close the Modal
close.addEventListener('click', () =>{
  modal.style.display = 'none';
});
// modal.addEventListener('click', () => {
//   modal.style.display = 'none';
//   modalBackground.style.display = 'none';
// });


setTimeout(open_modal, 3000);
