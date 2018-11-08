//Dark Mode Function

const body = document.querySelector('body');
const button = document.querySelector('button');
const modal = document.querySelector('.modal');
const modalBackground = document.querySelector('.modal-background');
const headline = document.querySelector('.headline');
const navbarFurtherDown = document.querySelector('.navbar-further-down')
const navbarAppearY = document.querySelector('.other-hero');


//Navbar further down appearing
window.addEventListener('scroll', () => {
  if (window.pageYOffset >= navbarAppearY.offsetTop) { //maybe chosing picture 2 or something like that
    navbarFurtherDown.classList.add("navbar-visible")
  } else {
    navbarFurtherDown.classList.remove("navbar-visible");
  }
});


// const openModal = () => {
//   modal.style.display = 'block';
//   modalBackground.style.display = 'block';
// };
// modalBackground.addEventListener('click', () => {
//   modal.style.display = 'none';
//   modalBackground.style.display = 'none';
// });


//setTimeout(openModal, 3000);


// function to add responsive class to navbar
function addClass() {
    const x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

//Fading in images as you scroll.
const fadeInIMGs = document.querySelectorAll('.fade-in-img');
let fadeInIMGY = 0;
let fadeInOpacity = 0;


window.addEventListener('scroll', () => {
  Array.from(fadeInIMGs) .forEach((fadeInIMG) => {
  fadeInIMGY = fadeInIMG.offsetTop
  let startFadeValue = fadeInIMGY-window.pageYOffset;
    if (window.pageYOffset >= fadeInIMGY-startFadeValue){
      fadeInOpacity =  (900-(fadeInIMGY-window.pageYOffset))/900;
      fadeInOpacity = Math.round(fadeInOpacity*1000)/1000;
    }
    if (startFadeValue <  -200){
      fadeInOpacity =  (900-(fadeInIMGY-window.pageYOffset))/700;
      fadeInOpacity = Math.round(fadeInOpacity*1000)/1000;
      fadeInOpacity = 2.6-fadeInOpacity;
    }
    if (fadeInOpacity < 0){
      fadeInOpacity = 0;
    }
    if (fadeInOpacity >= 0 && fadeInOpacity <= 1){
      fadeInIMG.style.opacity = fadeInOpacity;
    }
  })


});


// Array.from(fadeInIMGs).forEach((fadeInIMG) => {
//
// });
