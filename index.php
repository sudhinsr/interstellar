                                                                                                                                  <?php
session_start();
ob_flush();
?>

   
   
    <!DOCTYPE html>
   <head>
    <link rel="shortcut icon" href=".\favicon.ico" type="image/x-icon" />
    <title>INTERSTELLAR</title>
   </head>
        <!-- Mirrored from trial.foces.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2014 06:26:34 GMT -->
    

        <?php if (isset($_SESSION['FBID']))
          {
          ?>
            <script type="text/javascript">
            window.location="other.php";

            </script>
            <?php        //echo "mwole";
              }
                else
                {
              //echo "mwone";

           ?> 
          
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.5, minimum-scale=.5, maximum-scale=2, target-densitydpi=device-dpi">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'><!--[if lt IE 9]> <script                src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="css/site.css" rel="stylesheet">
    <script src="js/jquery-1.8.2.min.js"></script>
<!--    <script src="js/jquery.parallax.min.js"></script>-->
<!--    <script src="js/jquery.countdown.js"></script>-->
<!--    <script src="js/jquery.countdown.date.js"></script>-->
    <script src="js/site.js"></script>
     
    <body style="overflow:hidden;">
    
      


    
    
        <div class="siteWrap">
     
         
            
            <span class="shuttle-wrap"><span class="shuttle"></span></span>
    
    
            <div class="redPlanet"></div>
                    
            <div class="l-main">            
                <h1 class="title title-h1">INTERSTELLAR</h1>
                <h2 class="title title-h2">Its not just a Game</h2>            
         
          
            

<a class='login' title='Login link' href="fbconfig.php"></a>










            </div>




           <div class="footer" style="position:absolute; top:1000px">
                    <p style="color:white">@CecFoces</p>
            </div>
         
         
         
         
         </div>
    
   <?php
 }
   ?>
      
     </body>
                            
                            
                            
                            
                            
                            
                            