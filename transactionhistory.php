<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <script src="https://kit.fontawesome.com/c7819ef3be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
	margin:500px  auto 0;
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

<body style="background-color : #F1948A;">

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

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
            <p>&copy 2021. Made by <b>SRM TECHIES</b> <br> SRM TECHIES Foundation</p>
</footer> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>