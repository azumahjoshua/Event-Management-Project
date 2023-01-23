export function registerValidation() {
	/* Form Validation */
	// console.log(form);
	const username = document.getElementById("username");
	const password = document.getElementById("password");
	const passwordrepeat = document.getElementById("repeat_password");
	const title = document.getElementById("title");
	// const gender = document.querySelector("dropdown");
	const lastname = document.getElementById("lastname");
	const firstname = document.getElementById("firstname");
	const address1 = document.getElementById("address1");
	const address2 = document.getElementById("address2");
	const address3 = document.getElementById("address3");
	const post_code = document.getElementById("post-code");
	const description = document.getElementById("description");
	const email = document.getElementById("email");
	const telephone = document.getElementById("phone");
	// const sub = document.getElementById("submit");
	const profile_url = document.getElementById("profile_url");
	//

	const form = document.querySelector("form");
	if (form) {
		form.addEventListener("submit", (event) => {
			let valid = validateInputs();
			if (!valid) {
				event.preventDefault();
			}
		});
	}
	// });
	function validateInputs() {
		if (
			!(
				validateUserName() &&
				validatePassword() &&
				validateReapeatedPassword() &&
				validateTitle() &&
				validateFirstName() &&
				validateLastName() &&
				validatePostCode() &&
				validateEmail() &&
				validateAddress1() &&
				validateAddress2() &&
				validateAddress3() &&
				validatedescription() &&
				phonenumber() &&
				validateprofileUrl()
			)
		) {
			return false;
		}
		return true;
	}
	// description should not be empty
	function validatedescription() {
		if (description.value.trim() === "") {
			errorMessage(description, "Description can not be empty");
			return false;
		} else {
			successMessage(description);
			return true;
		}
	}
	// validateAddress1
	function validateAddress1() {
		if (address1.value.trim() === "") {
			errorMessage(address1, "Address 1 Can not be empty");
			return false;
		} else {
			successMessage(lastname);
			return true;
		}
	}
	// validateAddress2
	function validateAddress2() {
		if (address2.value.trim() === "") {
			errorMessage(address2, "Address 2 Can not be empty");
			return false;
		} else {
			successMessage(address2);
			return true;
		}
	}
	function validateAddress3() {
		if (address3.value.trim() === "") {
			errorMessage(address3, "Address 3 Can not be empty");
			return false;
		} else {
			successMessage(address3);
			return true;
		}
	}
	function validatedescription() {
		if (description.value.trim() === "") {
			errorMessage(description, "description  Can not be empty");
			return false;
		} else {
			successMessage(description);
			return true;
		}
	}
	// Validate Postal Code
	function validatePostCode() {
		if (isUSAZipCode(post_code.value)) {
			successMessage(post_code);
			return true;
		} else {
			errorMessage(post_code, "Postal Code can not be be black");
			return false;
		}
	}
	// Validate Email
	function validateEmail() {
		if (email.value.trim() === "") {
			errorMessage(email, "Email can not be blank");
			return false;
		} else if (!emailTest(email.value.trim())) {
			errorMessage(email, "Not a valid email");
			return false;
		} else {
			successMessage(email);
			return true;
		}
	}
	// validate Title
	function validateTitle() {
		// Validate Title
		if (!isNaN(title.value.trim())) {
			errorMessage(title, "Title should not be a number");
			return false;
		} else if (title.value.length <= 0) {
			errorMessage(title, "Title should not be  blank");
			return false;
		} else {
			successMessage(title);
			return true;
		}
	}
	// validate password
	function validateReapeatedPassword() {
		if (passwordrepeat.value === "") {
			errorMessage(passwordrepeat, "Password cannot be blank");
			return false;
		} else if (password.value !== passwordrepeat.value) {
			errorMessage(passwordrepeat, "Passwords does not match");
			return false;
		} else {
			successMessage(passwordrepeat);
			return true;
		}
	}
	// Validate Last name
	function validateLastName() {
		if (lastname.value.trim() === "") {
			errorMessage(lastname, "First name cannot be blank");
			return false;
		} else {
			successMessage(lastname);
			return true;
		}
	}
	// Validate First name
	function validateFirstName() {
		if (firstname.value.trim() === "") {
			errorMessage(firstname, "First name cannot be blank");
			return false;
		} else {
			successMessage(firstname);
			return true;
		}
	}
	// Validate Username
	function validateUserName() {
		if (username.value.trim() === "") {
			errorMessage(username, "Username cannot be blank");
			return false;
		} else if (!isNaN(username.value)) {
			errorMessage(username, "Username cannot be numbers");
		} else {
			successMessage(username);
			return true;
		}
	}
	// Validate Passowrd
	function validatePassword() {
		if (password.value === "") {
			errorMessage(password, "Password cannot be blank");
			return false;
		} else {
			successMessage(password);
			return true;
		}
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

	/* Validate Email Using Rejex*/
	function emailTest(email) {
		return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
			email
		);
	}
	/* Form Validation Ends */

	/* Postal Code Validation 
	This function uses a regular expression that checks for 5 digits 
	( \d{5} ) followed by optional hyphen and four digits( (-\d{4})? ).
	Ref
	https://www.javascript-coder.com/form-validation/javascript-zip-code-validation/
	*/
	function isUSAZipCode(str) {
		return /^\d{5}(-\d{4})?$/.test(str);
	}

	function phonenumber() {
		/*
	  +XX-XXX-XXX-XXX
	  +XX.XXX.XXX-XXX
	  +XX XXX XXX XXX
	  */
		// let phoneno =
		// /^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
		let phoneno = /^[0-9]{10}$/;
		if (telephone.value == "") {
			errorMessage(telephone, "Phone number should not be blank [0123456789]");
			return false;
		} else if (!telephone.value.match(phoneno)) {
			errorMessage(
				telephone,
				"Phone number should be of the form [0123456789]"
			);
			return false;
		}
		successMessage(telephone);
		return true;
	}
	// Validate profile Url
	function validateprofileUrl() {
		if (profile_url.value == "") {
			errorMessage(profile_url, " Profile url should not be  blank");
			return false;
		}
		let urlvalue = isValidUrl(profile_url.value);
		if (!urlvalue) {
			errorMessage(profile_url, "Not a valid url");
			return false;
		} else {
			successMessage(profile_url);
			return true;
		}
	}
	// https://codingbeautydev.com/blog/javascript-check-if-string-is-url/
	// check if the url is valid
	function isValidUrl(string) {
		try {
			new URL(string);
			return true;
		} catch (err) {
			return false;
		}
	}
}
