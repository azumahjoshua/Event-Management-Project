export function changeColor() {
	// console.log("change button page color");
	// const url = window.location.href;
	// console.log(url.split("/"));
	changebuttonColor();
}

function changebuttonColor() {
	let url = window.location.href;

	// Split the URL into an array using the '/' character as a separator
	let urlParts = url.split("/");

	// Get the last part of the URL (i.e., the page name)
	let pageName = urlParts[urlParts.length - 1];

	// Remove any query parameters or fragments from the page name
	pageName = pageName.split("?")[0].split("#")[0];

	// Output the page name to the console for testing
	const navMenu = document.querySelector(".nav-links");
	const getTickets = navMenu.children[3].classList.contains("get-tickets");
	if (pageName !== "index.php") {
		console.log(getTickets);
		// console.log("Page name: " + pageName);
		// Change the button color to red
		// button.style.backgroundColor = "red";
		if (getTickets) {
			const button = document.querySelector(".get-tickets");
			// console.log(button);
			button.style.backgroundColor = "white";
			const span = document.querySelector(
				".get-tickets > .get-ticketlink span"
			);
			// console.log(button);
			span.style.color = "black";
			// const button = document.querySelector(".get-tickets");
			// button.style.color = "red";
		}
	}
	// console.log(navMenu);
}
