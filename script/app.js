const hamburger = document.querySelector("#togglenava");
// console.log(hamburger.classList)
const navMenu = document.querySelector(".nav-links");

hamburger.addEventListener("click", () => {
  // console.log(navMenu.classList.contains('nav-links'))
  navMenu.classList.toggle('responsive')
  // console.log(navMenu.classList.contains('responsive '))
  // console.log(navMenu.classList)
  // if (navMenu.className === "nav-links") {
    // navMenu.className += " responsive";
  // } else {
    // navMenu.className = "nav-links";
  // }
  // console.log(hamburger.className.includes('nav-links'))
  // if()
})