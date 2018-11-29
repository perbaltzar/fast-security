//Burger Variables
const burger = document.querySelector('.burger-container');
const drop_in = document.querySelector('.drop-in');
//Sticky Navbar Variables
const sticky = document.querySelector('.navbar-further-down ');
const sticky_appear = document.querySelector('.second-hero');
const sticky_disappear = document.querySelector('.footer')
//Sticky navbar button
const go_to_bottoms = document.querySelectorAll('.go-to-bottom');
const dropdown_newsletter = document.querySelector('.drop-down-newsletter');
const fade_in = document.querySelector('.first-hero');

fade_in.classList.add('fade-in')

///////////////////////////////
//Activate the drop down menu//
///////////////////////////////
burger.addEventListener('click', ()=> {
  drop_in.classList.toggle('drop-in-active');
  burger.classList.toggle('burger-animation');
});
/////////////////
//Sticky NAVBAR//
/////////////////
window.addEventListener('scroll', () => {
  if (window.pageYOffset >= sticky_appear.offsetTop && window.pageYOffset <= sticky_disappear.offsetTop) { //maybe chosing picture 2 or something like that
    sticky.classList.add("navbar-visible")
  } else {
    sticky.classList.remove("navbar-visible");
  }
});



/////////////////
//  The modal  //
/////////////////
if (open_the_modal){
  //Modal variables
  const modal = document.querySelector('.modal-container');
  const close = document.querySelector('.close');

  //Open the modal//
  const open_modal = () => {
    modal.style.display = 'flex';
  }

  //Close the Modal//
  close.addEventListener('click', () =>{
    modal.style.display = 'none';
  });
  setTimeout(open_modal, 2000);
};


//////////////////////////////////
//  Scroll down to input-field  //
//////////////////////////////////
Array.from(go_to_bottoms).forEach((go_to_bottom) =>{
  go_to_bottom.addEventListener('click', () =>{
    drop_in.classList.remove('drop-in-active');
    burger.classList.remove('burger-animation');
    document.querySelector('.footer').scrollIntoView({
      behavior: 'smooth'
    });
  });
})
