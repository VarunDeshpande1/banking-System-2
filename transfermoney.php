<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>

    <script src="https://kit.fontawesome.com/c7819ef3be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }

      #footer{
	margin:10px  auto;
	padding: 4% 5%;
	text-align: center;
	background-color: #e7dbf6;
  }
  .social-icon
  {
	margin: 20px 10px;
  }
  .b{
	font-size: 1.5rem;
	font-weight: bold;
	color: Black;
  }
  .fa-facebook {
	color: #3b5998;
  }
  .fa-instagram{
	color: black;
  }
  .fa-twitter{
	color: #55acee;
  }
  .fa-envelope{
	color: black;
  }
  .last{
	font-size: 1.5rem;
	margin-right: 150px;
	line-height: 5;
  }



    </style>
</head>

<body style="background-color : #BDC3C7;">
<?php
    session_start();
    include 'config.php';
    $email=$_SESSION['email'];
    $sql = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">name</th>
                            <th scope="col" class="text-center py-2">email</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #A569BD;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
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


         <!-- <footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>AYUSH PRAJAPATI</b> <br> Ayush Prajapati Foundation</p>
        </footer> -->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>