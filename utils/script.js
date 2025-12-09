const username = document.getElementById("name")
const password = document.getElementById("password")
const check_password = document.getElementById("check_password")
const form_ins = document.getElementById("form_ins")

form_ins.addEventListener("submit", function(e) {
  e.preventDefault();

  const regexname = /^[a-zA-Z\s]{3,}$/;
  const regexpassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/;

  if (!regexname.test(username.value.trim())) {
    alert("error");
    username.style.border = "2px solid red";
    return;
  } 
 else if (!regexpassword.test(password.value.trim())) {
    alert("error");
    password.style.border = "2px solid red";
    return;
  }
  else if (check_password.value !== password.value) {
    alert("error");
    check_password.style.border = "2px solid red";
    return;
  }
   else {
    password.style.border = "2px solid green";
    username.style.border = "2px solid green";
    check_password.style.border = "2px solid green";
  }
});


