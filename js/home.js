


//DISPLAYS USER WELCOME MESSAGE ONCE LOGGED IN
function display_user_greeting(){
user_greeting=document.getElementById("user-greeting");
let uname=sessionStorage.key(0);
if (uname==null){
    user_greeting.textContent="";
    
    document.getElementById("dropdown").addEventListener('mouseover',()=>{
        document.getElementById("dropdown-content").style.display="none";
    })
}
else {
    user_greeting.textContent=`Hello ${uname}` ;
}
}


//CLEARS SESSION STORAGE
function log_out(){
    sessionStorage.clear();
    window.location.href="/CW1/website/PHP/index.php";
}

//REMOVES USER ACCOUNT FROM LOCAL STORAGE
function delete_account(){
    let uname=sessionStorage.key(0);
    localStorage.removeItem(uname);
    log_out()

}



function disable_signin(){
    sign_in = document.getElementsByClassName("nav-sign-in")
    console.log(sign_in)
    if (sessionStorage.length){
        sign_in[0].href="index.php"
    }
    else {
        sign_in[1].href="login.php"
    }
}

window.onload=()=>{
display_user_greeting();
disable_signin();
};