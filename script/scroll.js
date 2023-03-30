// Change Navbar color on scroll
export function scrollChange() {
	let navbar = document.querySelector("nav");
	// console.log(navbar);
	let scrollY = window.scrollY;
	if (scrollY < 200) {
		navbar.classList.remove("BgColour");
	} else {
		navbar.classList.add("BgColour");
	}
	// console.log(navbar);
}
window.addEventListener("scroll", scrollChange);
