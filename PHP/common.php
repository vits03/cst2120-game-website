<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title,$page){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<link rel="stylesheet" href="/css/' . $page .'.css">';
    echo '<script src="https://kit.fontawesome.com/32d80fb20c.js" crossorigin="anonymous"></script>';
    echo '</head>';
    echo '<body>';
}

/* Outputs  the navigation bar */
function outputNavigationbar($page){
    $linkNames = array("Home", "Login", "Game");
    $linklist = array("index.php", "login.php", "game.php");
    
    /* adds the html element and the link of every page on the navigation bar */
for($i = 0; $i < count($linkNames); $i++){
     
   if($linkNames[$i] == 'Home'){
    echo' <div class="navbar-section">';
    echo'  <header class="navbar">';
    echo'    <div class="game-logo">    ';
    echo'        <div class="game-title-nav">';
    echo'         <a href="'. $linklist[$i] .'">Jetpack Rush</a>';
    echo'        </div>';
    echo'    </div>';
    echo'    <div class="user-container">';}
    if($linkNames[$i] == 'Login'){
      echo'       <a href="' . $linklist[$i] . '" class="nav-sign-in">sign in</a>';
     }
    if($linkNames[$i] == 'Game'){
      echo'       <a href="' . $linklist[$i] . '" class="nav-sign-in">play</a>';
      echo'       <div class="dropdown" id="dropdown" >';
      echo '<button class="dropbtn"> ';
      echo'  <p id="user-greeting"></p>';
      echo'       <i class="fa-solid fa-user"></i>';
       echo '   </button>';
      echo'  <div class="dropdown-content" id="dropdown-content">';
      echo'  <a class="log-out-btn" onclick=log_out() href="#">log out</a>';
      echo'  <a class="delete-acc-btn" onclick=delete_account() href="#">delete account</a>';
      echo'</div>';
      echo'      </div>';
      echo'    </div>';
      echo' </header>';
      echo'</div>';

}
}
}
   
   
   


//Outputs the footer and closing statement of HTML
function outputFooter($page){
    echo'<div class="footer">     ';
    echo'    <div class="link-container">';
    echo'         <a>copyright© Vitthal</a>';
    echo'        <a href="#">About us</a>';
    echo'        <a href="#">Terms and conditions</a>';
    echo'        <a href="#">privacy</a>';
    echo'        <a href="#">Contact us</a>';
    echo'    </div>';
    echo'</div>';
    
    echo '<script src="../js/' . $page . '.js"></script>';
    if ($page=='game'){
        echo'<script src="../js/' . $page . 'canvas.js"></script>';
    }
    echo'</body>';
    echo'</html>';
}

//outputs the opening statement of the body
function main_section(){
    echo'<div class="main-section">';
    echo'<div class="main-wrapper">';

}

//outputs the form element of the  login page or sign up page
function form($page){
    if ($page=='Login'){
        $action=$page;
        $registration_fields='';
        $formValidation='"credential-check"';
         $form='<p>No account?<a class=signup-link href="signup.php">Sign up</a></p>';
    }
    else {
        $formValidation='"uname-check"';
        $registration_fields='<label for="psw"><p>Email address<span id="email-check"></span></p></label>
        <input type="email" id="email" placeholder="Enter your email address" name="email" required>
        <label for="psw"><p>date of birth<span id="dob-check"></span></p></label>
        <input type="date" id="date" required>';
         $form='<label for="psw"><p>Confirm Password<span id="pass-check"></span></p></label>
         <input type="password" id="password_check" placeholder="Enter Password again" name="psw" required> ';
         //seperate the concatenated page name (ex signin becomes sign in)
         $action=ucfirst(substr($page,0,4));
         $action .= ' ' .substr($page,4,2);
    }
    echo'<h1>' . $action  .'</h1>';
    echo'  <form   onsubmit="return false"';
    echo'      <div class="form-container">';
    echo'        <label for="uname" ><p>Username<span id=' . $formValidation . '></span></p></label>';
    echo'        <input type="text" id="username" placeholder="Enter Username" name="uname" required>';
    echo          $registration_fields;
    echo'        <label for="psw" ><p>Password<span id="password-check"></span></p></label>';
    echo'        <input type="password" id="password" placeholder="Enter Password" name="psw" required>';
    echo          $form;
    echo'        <input type="submit"  class="' . strtolower($page) . '-btn" id="' . strtolower($page) . '-btn" onclick="Validate_' . $page . '()"  >' . $action . '</button>' ;
    echo'        </form>';

    echo'    </div>';
    echo'</div>';
    echo'</div>';
    
}
