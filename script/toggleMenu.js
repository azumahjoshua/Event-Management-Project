export function toggleMenu() {
	/* Toggle Menu */
	const hamburger = document.querySelector("#togglenava");
	// console.log(hamburger.classList)
	const navMenu = document.querySelector(".nav-links");
	// if (navMenu.contains("get-tickets")) {
	// 	console.log("yes");
	// }
	hamburger.addEventListener("click", () => {
		// console.log(navMenu.classList.contains('nav-links'))
		navMenu.classList.toggle("responsive");
	});
	/* Toggle Menu  Ends */
	// changebuttonColor();
}

// function changebuttonColor() {
// 	let url = window.location.href;

// 	// Split the URL into an array using the '/' character as a separator
// 	let urlParts = url.split("/");

// 	// Get the last part of the URL (i.e., the page name)
// 	let pageName = urlParts[urlParts.length - 1];

// 	// Remove any query parameters or fragments from the page name
// 	pageName = pageName.split("?")[0].split("#")[0];

// 	// Output the page name to the console for testing
// 	console.log("Page name: " + pageName);
// 	// console.log(navMenu);
// }
