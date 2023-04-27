<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Login page","login");
    outputNavigationbar("Login");
    main_section();
    form('Login');


    //Output the footer
    outputFooter('login');
?>