<?php
//Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Sign up page","gamepage");
    outputNavigationbar("gamepage");
    main_section();
    
    //array of leaderboard names
    $names = array(
      'walter white',
      'mike tyson',
      'jim halpert',
      'Arvind Boolell',
      'Rajesh Bhagwan',
      'Barack Obama',
      'Peter Griffin',
      'Pravin jaugnath',
      'Gustavo Fring',
      'Gros matou'
  );
  $scores= array('87,234','55,754','51,902','49,513','43,093','34,411','22,918','14,511','11,919','9,515');
  $trophy_icon='<i class="fa-solid fa-medal"></i>';
  
 function output_leaderboard($trophy_icon){
  //outputing each ranking and score from array
   for($i = 0; $i < 10; $i++){
      echo'<div class="ranking no'. $i .'">';
      echo '<div>';
      echo'<span>'. $i+1 .'</span>';
       echo $trophy_icon;
       echo'<span class="no'. $i .' name"></span>';
       echo'</div>';
       echo '<div>';
       echo'<span class="no'. $i .' score"></span>';
       echo '</div>';
       echo'</div>';
       }
   
       for($i = 0; $i < 5 ; $i++){
        
         echo'</div>';}
       }

 
  ?>
<!-- Contents of the page -->

 <div class="game-section">

    <canvas></canvas>

 
      </div>
      <div class="leaderboard-section">
         <div class="leaderboard">
             <div class="leaderboard-title">
                <i class="fa-solid fa-trophy"></i>  
                <p>leaderboard</p>
             </div>
            
                 <div class="ranking-container">
                     
<?php

//output leaderboard
  output_leaderboard($trophy_icon);
   //Output the footer
    outputFooter('game');
?>