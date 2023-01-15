/* Toggle Menu */
const hamburger = document.querySelector("#togglenava");
// console.log(hamburger.classList)
const navMenu = document.querySelector(".nav-links");
hamburger.addEventListener("click", () => {
	// console.log(navMenu.classList.contains('nav-links'))
	navMenu.classList.toggle("responsive");
});

/* Toggle Menu  Ends */

/* Form Validation */
const form = document.getElementById("form-registeration");
// console.log(form)
const username = document.getElementById("username");
const password = document.getElementById("password");
const passwordrepeat = document.getElementById("repeat-password");
const title = document.getElementById("title");
// const gender  = document.querySelector('dropdown')
const lastname = document.getElementById("lastname");
const firstname = document.getElementById("firstname");
// const address1 = document.getElementById('address1')
// const address2 = document.getElementById('address2')
const post_code = document.getElementById("post-code");
// const description = document.getElementById('description')
const email = document.getElementById("email");
const telephone = document.getElementById("phone");
const sub = document.getElementById("submit");
// const profile_url = document.getElementById('profile_url')
//
form.addEventListener("submit", (event) => {
	let valid = validateInputs();
	if (!valid) {
		event.preventDefault();
	}
});

function validateInputs() {
	if (
		!(
			validateEmail() ||
			validateFirstName() ||
			validateLastName() ||
			validatePostCode() ||
			validateTitle() ||
			validateReapeatedPassword() ||
			validateUserName() ||
			validatePassword()
		)
	) {
		return false;
	}
	return true;
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

function phonenumber(inputtxt) {
	/*
  +XX-XXX-XXX-XXX
  +XX.XXX.XXX-XXX
  +XX XXX XXX XXX
  */
	let phoneno =
		/^\+?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
	if (!inputtxt.value.match(phoneno)) {
		errorMessage(passwordrepeat, "Phone number should be [+ 123 456 678 912]");
		return false;
	}

	return false;
}
