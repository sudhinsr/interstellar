<html>
<head>
	<title>Signup|Interstellar</title>
<?php

ob_start();

session_start();



require 'dbconfig.php';

$_SESSION['expire']+=60;

if($_SESSION['FBID']||($_SESSION['expire']<=time()))
 {      session_destroy();
     
 }
 else
 {
?>
</head>
<body>


    <center><h2>Add User Information</h2></center>
    <form class="form-horizontal" role="form" method="post" action="signup.php">
    <div class="form-group">
        <label class="col-sm-3 control-label">
         Name:
        </label>
        <div class="col-sm-3">
            <p class="form-control-static"> <?php echo $_SESSION['fbname']; ?> </p>
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-3 control-label">College</label>
        <div class="col-lg-3 ">
              
              <input id="ex" type="text" class="form-control" name="college" value="" required="required" data-toggle="tooltip" data-placement="right" title="Please enter your College">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-3 control-label">Mobile number</label>
        <div class="col-lg-3 ">
              <input type="number" class="form-control" name="mobile" value="" required="required">
        </div>
    </div>
    
    
  
  
    <label  class="col-sm-6 control-label">
        <input type="submit"class="btn btn-primary" name="update" value="Update">
    </label>
   
  
    </form>
    <?php
          if(isset($_POST['update']))
          {
              
            
           if (strlen($_POST['mobile'])!=10)
              echo " Enter a valid Mobile Number.";
        
            else
            {
              
              
               
                    $query="UPDATE `leader` SET college='".$_POST['college']."',mobile='".$_POST['mobile']."',level='1'";
               if(mysql_query($query))
               {
                 header('Location: question.php');   
                 $_SESSION['form_complete']='yes';
             	}

             }
           }  

                
        ?>









<?php 
}
?>
</body>
</html>