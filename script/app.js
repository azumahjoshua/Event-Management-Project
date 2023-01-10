const hamburger = document.querySelector("#togglenava");
// console.log(hamburger.classList)
const navMenu = document.querySelector(".nav-links");
hamburger.addEventListener("click", () => {
  // console.log(navMenu.classList.contains('nav-links'))
  navMenu.classList.toggle('responsive')
})