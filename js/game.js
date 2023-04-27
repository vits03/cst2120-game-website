


function display_user_greeting(){
    user_greeting=document.getElementById("user-greeting");
    let uname=sessionStorage.key(0);
    if (uname==null){
        user_greeting.textContent="";
    }
    else {
        user_greeting.textContent=`Hello ${uname}` ;
    }
    }
    

function log_out(){
    sessionStorage.clear();
    window.location.href="/CW1/website/PHP/index.php";
}

function delete_account(){
    let uname=sessionStorage.key(0);
    localStorage.removeItem(uname);
    log_out()

}

function disable_signin(){
    sign_in = document.getElementsByClassName("nav-sign-in")
    console.log(sign_in)
    if (sessionStorage.length){
        sign_in[0].href="game.php"
    }
}


function output_leaderboard(){
    alert("ff")
    console.log("jjj")
    //get all scores and usernamefrom the local storage
    let rankings=document.getElementsByClassName("score");
    let names=document.getElementsByClassName("name");
    scores=[]
    highscores=[]
    keys = Object.keys(localStorage);
    index=keys.length
    console.log(index);
     for (let i = 0; i<index;i++){
        console.log(index)
        highscore=parseInt(JSON.parse(localStorage.getItem(keys[i])).highscore)
        //store them in an array of objects
        scores.push({username:keys[i],highscore:highscore})
     }
    console.log(scores)
    let temp=0
    for (let j=0;j<10;j++){
        for (let k=0;k<(scores.length-j-1);k++){
            if( scores[k].highscore > scores[k+1].highscore){
                temp=scores[k];
                scores[k]=scores[k+1];
                scores[k+1]=temp;
            }
        }
    }
     console.log(scores)
     console.log(rankings)
     scores=scores.slice(scores.length-10,scores.length)
     console.log(scores)
    //sort using bubble sort
    //keep only first 10 element of array
    for (let r=0;r<scores.length;r++){
        rankings[r].innerHTML=scores[scores.length-r-1].highscore
        names[r].textContent=scores[(scores.length-r-1)].username
    }
  
 
}

window.onload=()=>{
    display_user_greeting();
    disable_signin();
    output_leaderboard();
}


document.addEventListener('DOMContentLoaded', function() {
    display_user_greeting();
    disable_signin();
    output_leaderboard();
}, false);