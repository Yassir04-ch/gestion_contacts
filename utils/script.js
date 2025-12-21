const fname = document.getElementById("fname")
const lname = document.getElementById("lname")
const password = document.getElementById("password")
const user_email = document.getElementById("user_email")
const check_password = document.getElementById("check_password")
const form_ins = document.getElementById("form_ins")



  const regexname = /^[a-zA-Z\s]{3,}$/;
  const regexpassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/;
  const regexphone = /^[0-9]{10}$/;
  const regexemail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


  // validation form inscription
form_ins.addEventListener("submit", function(e) {
  if (!regexname.test(fname.value.trim())) {
    alert("entrez first name");
    e.preventDefault();
    return;
  }  
 else if (!regexname.test(lname.value.trim())) {
    alert("entrez last name");
    e.preventDefault();
    return;
  } 
  else if (!regexemail.test(user_email.value.trim())) {
    alert("entrez email");
    e.preventDefault();
    return;
  } 
 else if (!regexpassword.test(password.value.trim())) {
    alert("entrez password like Yassir123@ ");
    e.preventDefault();
    return;
  }
  else if (check_password.value !== password.value) {
    alert("Passwords do not match!");
    e.preventDefault();
    return;
  }
   else {
    password.style.border = "2px solid green";
    username.style.border = "2px solid green";
    check_password.style.border = "2px solid green";
  }
});
//  validation form add contact
const form_con = document.getElementById("form_con");
const namecon = document.getElementById("namecon");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const address = document.getElementById("address");

form_con.addEventListener("submit",function(e){
   if (!regexname.test(namecon.value.trim())) {
    alert("entrez name contact");
    e.preventDefault();
    return;
  }
  else if (!regexemail.test(email.value.trim())) {
    alert("entrez email");
    e.preventDefault();
    return;
  } 
 else if (!regexphone.test(phone.value.trim())) {
    alert("entrez number Phone");
    e.preventDefault();
    return;
  }
  if (!regexname.test(address.value.trim())) {
    alert("entrez address");
    e.preventDefault();
    return;
  }
})

  const btndel =  document.querySelectorAll('.btn-delete')

btndel.forEach(function(btn_delete) {
    btn_delete.addEventListener('click', function (e) {
        if (!confirm('Are you sure you want to delete this contact?')) {
            e.preventDefault();
        }
    });
});