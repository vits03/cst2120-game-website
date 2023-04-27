




//LOGIN VALIDATION
function Validate_Login() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let username_error = document.getElementById("credential-check");
  let password_error = document.getElementById("password-check");

  //CLEARS ALL ERROR MESSAGES
 username_error.textContent="";
 password_error.textContent="";
 
  if (JSON.parse(localStorage.getItem(username)) == null) {
    username_error.textContent = "username  not found";
  } else {
    
    
       if (JSON.parse(localStorage.getItem(username)).password === password) {
      
      initialise_session(username);
      window.location.href = "/CW1/website/PHP/game.php";
    }
    else {
      
      password_error.textContent="wrong password"
    }
  }

}

//DISABLES SIGN IN BUTTON WHEN LOGGED IN
function disable_signin(){
  sign_in = document.getElementsByClassName("nav-sign-in")
  if (sessionStorage.length){
      sign_in[0].href="index.php"
  }
  else {
      sign_in[1].href="login.php"
  }
  document.getElementById("dropdown").addEventListener('mouseover',()=>{
  document.getElementById("dropdown-content").style.display="none";
})
}


function initialise_session(uname){
    sessionStorage.setItem(uname,JSON.stringify({session_score:0,is_loggedIn:true}));
}

window.onload=()=>{
disable_signin();
}
