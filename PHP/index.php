<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Jetpack Rush","home");
    outputNavigationbar("Home");
    main_section();
?>

<!-- Contents of the page -->

         <h1 class="game-title">Jetpack Rush</h1>
         <a href="login.php"  class="sign-in">sign in</a>
         </div>
      </div>
       <div class="rocket"><img src="/assets/rocket.png" alt=""></div>
          <div class="jet">
            <img src="/assets/jet2.png" alt="">
     </div>
<?php
    //Output the footer
    outputFooter("home");
?>