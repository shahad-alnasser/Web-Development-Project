
function checkRequired(fields) {
  for (let i = 0; i < fields.length; i++) {
    if (fields[i].value.trim() === "") {
      alert("Please fill all required fields.");
      return false;
    }
  }
  return true;
}

// Email validation
function isValidEmail(email) {
  let pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!pattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }
  return true;
}

// Saudi mobile validation
function isValidMobile(mobile) {
  let pattern = /^\+9665\d{8}$/;
  if (!pattern.test(mobile)) {
    alert("Mobile number must be in this format: +9665XXXXXXXX");
    return false;
  }
  return true;
}

// Password rules
function isValidPassword(password) {
  if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return false;
  }
  if (!/[A-Z]/.test(password)) {
    alert("Password must contain at least one uppercase letter.");
    return false;
  }
  if (!/\d/.test(password)) {
    alert("Password must contain at least one number.");
    return false;
  }
  return true;
}

function isValidAge(dobValue) {
  let dob = new Date(dobValue);
  let today = new Date();

  let age = today.getFullYear() - dob.getFullYear();
  let m = today.getMonth() - dob.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
    age--;
  }

  if (age < 18) {
    alert("You must be at least 18 years old.");
    return false;
  }
  return true;
}
