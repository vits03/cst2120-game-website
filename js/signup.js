let email = document.getElementById("email");
let signupBtn = document.getElementById("signup-btn");
let login_btn = document.getElementById("login-btn");


let username = document.getElementById("username");
let date = document.getElementById("date");
let username_check = document.getElementById("uname-check");
let email_check = document.getElementById("email-check");
let pass_check = document.getElementById("pass-check");


//CHECKS FOR UNIQUE USERNAME 
username.addEventListener("input", (e) => {
  if (!username.value.length) {
    username_check.textContent = "";
  } else {
    if (window.localStorage.getItem(username.value)) {
      username_check.style.color = "red";
      username_check.textContent = "username already exists!!!";

      signupBtn.style.opacity = "0.5";
    } else {
      username_check.style.color = "green";
      username_check.textContent = "unique username";

      signupBtn.style.opacity = "1";
    }
  }
 
});

//CHECKS FOR PASSWORD REGEX AND EMAIL UNIQUENESS
function Validate_signup() {
  let email_flag = email_checks(email.value);
  let passwordCheck = document.getElementById("password_check");

  let passwordRGEX = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;
  let pwdResult = passwordRGEX.test(password.value);

  if (pwdResult) {
    if (passwordCheck.value == password.value) {
      pass_flag = true;
    } else {
      pass_check.textContent = "password does not match";
    }
  } else {
    pass_check.textContent =
      "Use 8 or more characters with a mix of letters, numbers & symbols";
  }
  if (email_flag && pass_flag) {
   
    store_userData(username.value, password.value, email.value, date.value);
    initialise_session(username.value);
    window.location.href = "/CW1/website/PHP/game.php";
  }
}


function initialise_session(uname) {
  sessionStorage.setItem(
    uname,
    JSON.stringify({ session_score: 0, is_loggedIn: true })
  );
}

//CREATES LOCAL STORAGE ENTRY FOR REGISTRATION
function store_userData(uname, pass, mail, date) {
  localStorage.setItem(
    uname,
    JSON.stringify({ password: pass, email: mail, highscore: 0, dob: date })
  );
}


//EMAIL UNIQUENESS CHECK
function email_checks(userEmail) {
  keys = Object.keys(localStorage);

  index = keys.length;

  
  if (index) {
    for (let i = 0; i < index; ++i) {
      if (JSON.parse(localStorage.getItem(keys[i])).email == userEmail) {
        
        email_check.textContent = "email address is aleady registered";
        return false;
      }
    }

    return true;
  } else {
    return true;
  }
}

function disable_signin() {
  sign_in = document.getElementsByClassName("nav-sign-in");
  if (sessionStorage.length) {
    sign_in[0].href = "index.php";
  } else {
    sign_in[1].href = "signup.php";
  }
  document.getElementById("dropdown").addEventListener("mouseover", () => {
    document.getElementById("dropdown-content").style.display = "none";
  });
}

disable_signin();
