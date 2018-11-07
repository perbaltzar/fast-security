//Dark Mode Function

const body = document.querySelector('body');
const button = document.querySelector('button');
const modal = document.querySelector('.modal');
const modalBackground = document.querySelector('.modal-background');
const headline = document.querySelector('.headline');
let language = "english";



// button.addEventListener('click', () => {
//   //body.classList.toggle('dark-mode'); //byter från lägga till, till ta bort.
//   if (language === "english"){
//     language = "swedish";
//   }else{
//     language = "english";
//   }
//
//   if (language === "swedish"){
//     headline.textContent = 'Det här är en rubrik';
//   }else{
//     headline.textContent = 'This is a headline';
//   }
// });


let navbar = document.querySelector('.navbar');
let sticky = navbar.offsetTop;

//NavBar sticking to the top.
window.addEventListener('scroll', () => {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
});


const openModal = () => {
  modal.style.display = 'block';
  modalBackground.style.display = 'block';
};
modalBackground.addEventListener('click', () => {
  modal.style.display = 'none';
  modalBackground.style.display = 'none';
});


setTimeout(openModal, 3000);




function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
