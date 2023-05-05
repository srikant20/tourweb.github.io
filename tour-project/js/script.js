let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".navbar .nav");

menu.onClick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};
