
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

    <script src="https://kit.fontawesome.com/c7819ef3be.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #82E0AA;">



<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color : black;">LOGIN</h2>
        <br> 

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">


		

          <form action="login3.php"  class="app-form" method="post">
		  <?php if (isset($_POST['error'])) { ?>
     		<p class="error"><?php echo $_POST['error']; ?></p>
     	<?php } ?>
            
			<div class="app-form-group">
              <input class="app-form-control" placeholder="Email" type="email" name="email" >
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="password" type="password" name="password" >
            </div>
            
           
            <br>
            <div class="app-form-group button">
              <input class="app-form-button btn btn-primary" type="submit" value="LOGIN" name="submit"></input>
              
               <input class="app-form-button btn btn-primary" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>

    <a href="createuser.php" class="mohit btn btn-primary btn-lg active " role="button" aria-pressed="true">SIGN-UP</a>

  </div>
</div>


<footer id="footer">


<a href="https://www.facebook.com">
  <i class="social-icon fab fa-facebook fa-2x"></i>
  </a>

  <a href="https://www.instagram.com">
  <i class="social-icon fab fa-instagram fa-2x"></i>
</a>

<a href="https://www.twitter.com">
  <i class="social-icon fab fa-twitter fa-2x"></i>

  </a>

  <a href="https://www.gmail.com">
  <i class="social-icon far fa-envelope fa-2x"></i>
  </a>

  <p>&copy 2021. MADE BY <b>SRM TECHIES</b> <br> SRM TECHIES FOUNDATION</p>
    </footer>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>