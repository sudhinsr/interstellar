<html>
<head>
    <title>Login</title>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin|Interstellar</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
<!--        <link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <script src="js/bootstrap.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet'>

         <?php  
          session_start();
         require 'dbconfig.php'; ?> 
        <!-- Custom styles for this template -->
        <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>
</head>
<body>

<div class="bodycontainer">
            <div class="starter-template" >


 <form class="form-horizontal" action="q78945341inter.php" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputEmail">user</label>
    <div class="controls">
      <input type="text" id="inputEmail" required placeholder="Username" name="username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" required placeholder="Password" name="password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
      <button type="submit" class="btn" name="admin_log">Sign in</button>
    </div>
  </div>
</form>


                                                                 
            </div>
        </div>

        <?php
        if(isset($_POST['admin_log']))
        {
           $pswd = $_POST['password'];
            $pswd=md5($pswd);
            $query=mysql_query("SELECT * FROM `admin` WHERE name='".$_POST['username']."' AND password='$pswd'  ");
            $count=mysql_num_rows($query);
            echo $count;
            $val=mysql_fetch_assoc($query);
            if($count==1)
            {
                $_SESSION['admin_type']='granded';
            ?>

               <script type="text/javascript">
window.location = "z11224051994.php";
</script>
            <?php }
            else
            { ?>
              <script type="text/javascript">
              window.location = "index.php";
            </script>
           <?php }
        }





        ?>
                   
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <!-- compiled and minified Bootstrap JavaScript -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>