<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin|Interstellar</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'>

         <?php  require 'dbconfig.php'; ?> 
        <!-- Custom styles for this template -->
        <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body >
    <?php
     session_start();
    if($_SESSION['admin_type']!='granded')
    {
        header('location:q78945341inter.php');
    }
    else
    {
    ?>

       
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


                
            
            
     
<!-- Modal -->
  <center>
      

                <form class="form-inline" action="#" method="POST" enctype="multipart/form-data">
  <input type="text" class="input-small" placeholder="NUMBER" name="number" required>
  <input type="text" class="input-small" placeholder="ANSWER" name="answer" required><br><br><br><br>

  <label for="file">Question:</label>
            <input type="file" name="file1" id="file" accept="image/gif, image/jpeg,image/png" required='required'/> 
            <label for="file">Pop up -label:</label>
            <input type="file" name="file2" id="file" accept="image/gif, image/jpeg,image/png" /> 
  
  <input type="submit" class="btn" name="upload" value="upload">
</form>
          </center>              
   
       

   
 <?php                
                        
        if (isset($_POST['upload'])) 
    {
        error_reporting(0);
                $number=$_POST["number"];
         $type1=$_FILES["file1"]["type"];
         $type2=$_FILES["file2"]["type"];
         $temp1= $_FILES["file1"]["temp_name"];
         $temp2= $_FILES["file2"]["temp_name"];
         $answer=$_POST['answer'];
         $answer=md5($answer);
   
          $a="question/quest".$number;
           $b="question/quest_popup";
           $a=$a. $_FILES["file1"]["name"];
           $b=$b. $_FILES["file2"]["name"];
          
        error_reporting(0);
         $allowedExts = array("image/jpg","image/JPEG","image/png","image/PNG","image/gif","image/GIF","image/JPG","image/jpeg");
        if(in_array($type1, $allowedExts) OR in_array($type2, $allowedExts))
        {
                
                move_uploaded_file($_FILES["file1"]["tmp_name"],$a);
                  move_uploaded_file($_FILES["file2"]["tmp_name"],$b);
                  if(mysql_query("INSERT INTO `question` (`number`, `path`, `popup`, `answer`) VALUES ('$number', '$a', '$b', '$answer')"))
                  {
                    ?>

                         <div id="saveAlert" class="alert-message success fade in" data-alert="alert" style="top:0">
  <a class="close" href="admin_home.php">×</a>
  <p><strong>Well done!</strong> Sucess add more :).</p>
</div>

                    <?php
                  }
                  else
                  {
                    ?>


                         <div id="saveAlert" class="alert-message success fade in" data-alert="alert" style="top:0">
  <a class="close" href="admin_home.php">×</a>
  <p><strong>Well done!</strong> Oops Question levelalready exists.</p>
</div>

                    <?php
                  }
      
        }

  
        else
          {?>

           <div id="saveAlert" class="alert-message success fade in" data-alert="alert" style="top:0">
  <a class="close" href="admin_home.php">×</a>
  <p><strong>Well done!</strong> You have enterd an invalid file format.</p>
</div>
<?php
            }
 }
    ?>
     
            <table  class="table">
                          <thead>
                             <th></th>
                             <th></th>
                             <th></th>
                             <th></th> 
                            <th></th>
                            <th>Name</th>
                            <th>Point</th>
                            <th></th>
                            
                            <th></th>
                          </thead>

           <?php




            $query="SELECT * FROM `leader` WHERE 1 ORDER BY point desc";
            $query=mysql_query($query);
            while($row=mysql_fetch_assoc($query))
            {            echo "<tbody>";

                  ?>
              <td></td><td></td><td></td><td></td>
              <td><img src="https://graph.facebook.com/<?php echo $row['uid']; ?>/picture" class="img-circle"></td>
              <td><a href="https://www.facebook.com/<?php echo $row['uid']; ?>" target="_blank"><?php echo $row['user_name'];?></a></td>
                        <?php
                        echo "<td>".$row['point']."</td>";
                        echo "<td>".$row['uid']."</td>";
                        echo'<td>
                                <form  action="#" method="POST" id="form">
                                <input type="hidden" id="var1" name="del_user" value='.$row['uid'].'/>
                                <label  class=" control-label">
                                <input type="submit"class="btn btn-large btn-block btn-primary" id="form" name="delete_user" value="delete">
                                
                                </form>
                            
                                <td>';
                         echo "</tbody>";
            }
            if(isset($_POST['delete_user']))
            {
                $user_deleted=substr($_POST['del_user'],0,-1);
                $query="DELETE from leader WHERE uid='$user_deleted'";
                mysql_query($query);
                 echo ' <META HTTP-EQUIV="refresh" CONTENT="2;URL=admin_home.php"> ';
            }
            ?>
</table>

           
                                                  
       
            <script src="js/jquery.min.js"></script>
                <!-- compiled and minified Bootstrap JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <?php
        }
            ?>
    </body>
</html>

