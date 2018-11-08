<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Fast Security</title>
</head>
<body>
  <!-- NAV BAR-->
<header>
  <nav class="topnav">
    <span class="logo">LOGO</span>
    <a class="burger-icon">
      <i class="fa fa-bars"></i>
    </a>
  </nav>

  <nav class="hidden" id="burger-nav">
    <ul>
      <li><a>Thing 1</a></li>
      <li><a>Thing 2</a></li>
      <li><a>Thing 3</a></li>
      <li><a>Thing 4</a></li>
    </ul>
  </nav>

</header>

<script src="index.js">
</script>
</body>
</html>





<?php
// function toggleClassHidden() {
//     const x = document.getElementByClassName("burger-nav");
//     if (x.idName === "hidden") {
//         x.idName = "";
//     } else {
//         x.idName = "hidden";
//     }
// }


// Function to toggle between classes hidden and burger-nav
const button = document.querySelector('.burger-icon');
const menu = document.querySelector('#burger-nav');

button.addEventListener('click', function(event) {
  menu.classList.toggle('burger-nav')
  menu.classList.toggle('hidden')
})

?>





// css


body {
  margin: 0px;
  height: 4000px;
}

/* Styles for TOP NAVBAR */
.topnav {
  background-color: #333;
  overflow: hidden;
}

.logo {
  float: left;
  display: block;
  color: aqua;
  text-align: center;
  padding: 14px 16px;
  font-size: 16px;
}

.burger-icon {
  float: right;
  display: block;
  color: #f2f2f2;
  padding: 14px 16px;
  font-size: 16px;
}

.burger-icon:hover {
  background-color: #ddd;
  color: black;
}

/* Styles for BURGER NAV */
.hidden {
  display: none;
}

.burger-nav {
  float: right;
  display: block;
  padding: 0px 16px;
  background-color: hotpink;
  /* align-content: left;
  border-color: black;
  border: 2px; */
}
