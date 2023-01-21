export function deleteEvent() {
	const deleteevetnt = document.getElementById("deleteevetnt");
	// console.log(deleteevetnt);
	deleteevetnt.addEventListener("click", () => {
		return confirm("Do you want delete this event?");
	});
}
