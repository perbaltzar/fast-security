//Dark Mode Function

const body = document.querySelector('body');
const button = document.querySelector('button');
const modal = document.querySelector('.modal');
const modalBackground = document.querySelector('.modal-background');
const headline = document.querySelector('.headline');
const navbarFurtherDown = document.querySelector('.navbar-further-down')


//Navbar further down appearing
window.addEventListener('scroll', () => {
  console.log(window.pageYOffset);
  if (window.pageYOffset >= 1000) { //maybe chosing picture 2 or something like that
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
