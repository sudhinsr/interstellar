                                                                                                                                
                                                                <?php
session_start(); 
require 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
    <
<html xmlns:fb="http://www.facebook.com/2008/fbml">



<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  <head>
    <title>Interstellar|Leaderboard</title>
<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->









        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rules</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
        <script src="js/bootstrap.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'>

           
        <!-- Custom styles for this template -->
        <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
        <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>
        
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <style>
      #plane{
        position:relative; 
        top:0px; 
        background-image: url("i/normandy.png");
        background-repeat: no-repeat; 
        display:block;
        height:50px; 
        width:100px;
      }
    </style>
    <body >
    
      <div class="navbody">    
         <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed" role="navigation">
            <div class="container">
                <div class="navbar-header">
                   
                       
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    
                    <a class="navbar-brand" href="/index.html">Interstellar</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li ><a href="question.php">Play</a></li>
                        <li class="active"><a href="leaderboard.php">Leaderboard</a></li>
                        <li><a href="rules.html">Rules and regulations</a></li>
                        <li><a href="about.html">Team</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    
                        
                    </ul>
                </div>     
            </div>
        </nav>

        </div>  
        </div> 
 <!--                       
<div class='a example_selector' id="ast1">
        </div>
<div class='a example_selector' id="ast2">
        </div>
<div class='a example_selector' id="ast3">
        </div>
<div class='a example_selector' id="ast4">
        </div>
<div class='a example_selector' id="ast5">
        </div>
<div class='a example_selector' id="ast6">
        </div>
<div class='a example_selector' id="ast7">
        </div>   
-->   
   
       <script>
       $(document).ready(function(){
    
    $(".example_selector").each(function() {
         animateDiv($(this));
    });
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h =100;
    var w =500;
    
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);
    
    return [nh,nw];    
    
}

function animateDiv(obj){
    var newq = makeNewPosition();
    var oldq = $(obj).offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);
    
    $(obj).animate({ top: newq[0], left: newq[1] }, speed, function(){
      animateDiv($(this));        
    });
    
};

function calcSpeed(prev, next) {
    
    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);
    
    var greatest = x > y ? x : y;
    
    var speedModifier = 0.03;

    var speed = Math.ceil(greatest/speedModifier);

    return speed;

}</script>
      <div class="bodycontainer" style="font-family:Electrolize;">
        <!--    <div class="starter-template" style="font-family:Electrolize;">   -->

<div style="font-size:24px;color:white; font-family:Electrolize;">











<table class="table" style="width: 600px" cellpadding="0" cellspacing="0">

<!--
<table  class="table"> -->
                          <thead>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th> 
                            <th></th>
                            <th>Name</th>
                            <th>Point</th>
                            
                            <th></th>
                          </thead>
                        </table>  
                          
                          
        <div style="overflow: auto;height: 750px; width: 100%;">
  <table class="table" style="width: 600px;" cellpadding="0" cellspacing="0">                  
                          

           <?php




            $query="SELECT * FROM `leader` WHERE 1 ORDER BY point desc";
            $query=mysql_query($query);
            while($row=mysql_fetch_assoc($query))
            {            echo "<tbody>";

                        ?><td></td><td></td><td></td><td></td>
                        <td><img src="https://graph.facebook.com/<?php echo $row['uid']; ?>/picture" class="img-circle"></li></td>
                        <td><a href="https://www.facebook.com/<?php echo $row['uid']; ?>" target="_blank"><?php echo $row['user_name'];?></a></td>
                        <?php
                        echo "<td>".$row['point']."</td>";
                        
                         echo "</tbody>";
            }
            
            ?>
</table>
</div>





    
    
 

</div>

 </div>
 
 
       
  <footer>
				<div class="container">
						<div class="footer-ribon">
				        <span>Contact</span>
						</div>
                </div>
            <div class="footed">
              <div class="logo1">
        <!--          <p style="font-size:10px;color:white; font-family:Electrolize;">SITES</p>
                   <p style="font-size:20px;color:white; font-family:Electrolize;"><a href="http://cecsummit.org">SUMMIT</a></p> -->
                  <img src="./i/summit.png" >
                </div>
                    <div class="footdiv1">
                    <p>
                        </p>
                       <p style="font-size:24px;color:white; font-family:Electrolize;"> Contact Us</p>
                        <ul>
                            
  <li ><p style="font-size:14px; color:white; font-family:Electrolize;"><i class="glyphicon-map-marker" style="font-size:25px"></i><strong style="font-size:16px;color:white; font-family:Electrolize"> Address:</strong >College of Engineering ,Chengannur</p>
                            </li>
                            <li class="phone"><i class="glyphicon-envelope" style="font-size:25px;color:white;"></i><strong style="font-size:16px;color:white; font-family:Electrolize">  Email:</strong><a href="www.google.com" style="font-size:16px; font-family:Electrolize">interstellar2k14@gmail.com</a></li>
                        </ul>
                       
                        </div>
                    <div class="social1">
                        <p>
                        </p>
                        <h4 style="font-size:24px; font-family:Electrolize;">Follow Us</h4>
                        <div class="swrap">
                            <a target="_blank" href="https://www.facebook.com/Interstellar2k14?ref=hl">
                    <div class="fb">
                   </div>    </a> 
                    <a target="_blank" href="https://plus.google.com/u/0/114835822116894615230">
                        <div class="twit">
                        </div></a>
                              <a target="_blank" href="https://plus.google.com/u/0/114835822116894615230">
                        <div class="gplus">
                        </div></a>
                        <div class="youtub">
                        </div>
                            </div>
                    </div>
               </div>
						
                
			</footer>
		                                              
       
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- compiled and minified Bootstrap JavaScript -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>

















     












<?php
    else: ?>     <!-- Before login --> 
            <script type="text/javascript">
   window.location="index.php";

</script>
    <?php endif ?>
  </body>
</html>
  
                            
                            
                            
                            