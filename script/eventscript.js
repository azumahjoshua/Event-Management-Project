export function eventValidation() {
	// https://javascript.info/import-export
	/* Event Form Validation */
	const event_name = document.getElementById("event_name");
	const event_description = document.getElementById("event_description");
	const event_location = document.getElementById("event_location");
	// const eventcategory = document.getElementById("event_category");
	const keyword = document.getElementById("event_keyword");
	const video_url = document.getElementById("video_url");
	const image_url = document.getElementById("image_url");
	const startdate = document.getElementById("startdate").value;
	// console.log(startdate);
	const enddate = document.getElementById("end_date").value;
	// console.log(enddate);
	//
	const event_registeration_form = document.querySelector("form");
	if (event_registeration_form) {
		event_registeration_form.addEventListener("submit", (event) => {
			let validInput = validAllInput();
			if (!validInput) {
				event.preventDefault();
			}

			// console.log("Hello thhere");
		});
	}

	/* Error Message */
	function errorMessage(input, message) {
		const formControl = input.parentElement;
		// console.log(formControl)
		const small = formControl.querySelector("small");
		formControl.className = "form-group  error";
		small.innerText = message;
	}
	/* Success Message */
	function successMessage(input) {
		const formControl = input.parentElement;
		formControl.className = "form-group success";
	}
	function validAllInput() {
		if (
			!(
				validateEventName() &&
				validateEventDescription() &&
				validateEventLocaion() &&
				validateEventkeyword() &&
				validateImageUrl()
			)
		) {
			return false;
		} else {
			return true;
		}
	}
	// console.log(event_registeration_form);
	// validate event name
	function validateEventName() {
		if (event_name.value.trim() === "") {
			errorMessage(event_name, "Event name can not be empty");
			return false;
		} else if (!isNaN(event_name.value.trim())) {
			errorMessage(event_name, "Event name should be letters");
			return false;
		} else {
			successMessage(event_name);
			return true;
		}
	}

	function validateEventDescription() {
		if (event_description.value.trim() === "") {
			errorMessage(event_description, "Event description can not be empty");
			return false;
		} else if (!isNaN(event_description.value.trim())) {
			errorMessage(event_description, "Event description should be letters");
			return false;
		} else {
			successMessage(event_description);
			return true;
		}
	}

	function validateEventLocaion() {
		if (event_location.value.trim() === "") {
			errorMessage(event_location, "Event location can not be empty");
			return false;
		} else if (!isNaN(event_location.value.trim())) {
			errorMessage(event_location, "Event location should be letters");
			return false;
		} else {
			successMessage(event_location);
			return true;
		}
	}

	function validateEventkeyword() {
		if (keyword.value.trim() === "") {
			errorMessage(keyword, "Provide Keywords for your event");
			return false;
		} else if (!isNaN(keyword.value.trim())) {
			errorMessage(keyword, "Keywords should be letters");
			return false;
		} else {
			successMessage(keyword);
			return true;
		}
	}
	// https://bobbyhadz.com/blog/javascript-check-if-url-is-image
	function isImage(url) {
		return /\.(jpg|jpeg|png|webp|avif|gif|svg)$/.test(url);
	}
	function validateImageUrl() {
		let imageurl = image_url.value;
		if (!isImage(imageurl)) {
			errorMessage(image_url, "Not A Valid Image Url");
			return false;
		} else {
			successMessage(image_url);
			return true;
		}
	}
}
