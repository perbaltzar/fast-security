const burger = document.querySelector('.burger-container');
const drop_in = document.querySelector('.drop-in');
const sticky = document.querySelector('.navbar-further-down ');
const sticky_appear = document.querySelector('.second-hero');

//Activate the drop down menu
burger.addEventListener('click', ()=> {
  drop_in.classList.toggle('drop-in-active');
  burger.classList.toggle('burger-animation');
});
//Sticky NAV
window.addEventListener('scroll', () => {
  if (window.pageYOffset >= sticky_appear.offsetTop) { //maybe chosing picture 2 or something like that
    sticky.classList.add("navbar-visible")
  } else {
    sticky.classList.remove("navbar-visible");
  }
});
