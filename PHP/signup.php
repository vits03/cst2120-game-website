<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header, navigation bar ,opening statements of the body and the sign up form element 
    outputHeader("Sign up page","signup");
    outputNavigationbar("signup");
    main_section();
    form('signup');
    
    //Output the footer
    outputFooter('signup');
?>