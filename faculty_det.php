<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Faculty info</title>
  </head>

  <body>
    
 <?php include 'header.php';?>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 <div class="container my-4">
    <div class="jumbotron">
        <h1 class="display-4">Faculty details</h1>
        
        <hr class="my-4">
        <p>Name and email-id of department faculty</p>
  <!--<a class="btn btn-primary btn-lg" href="#" role="button">Explore this!</a>-->
    </div>
    </div>
    <div class="container">
  <?php

      $con= mysqli_connect('localhost','root','') or die ("could not connect");
      mysqli_select_db($con,'forum') or die ("could not connect Database");

      //connect

      if(isset($_POST['search-btn']))
      {
        $searchq = $_POST['search-btn'];
        $searchq= preg_replace("#[^0-9a-z]#i","",$searchq);

        $req = "SELECT * FROM faculty_reg WHERE subject LIKE '%$searchq%'" or die("could not search");
        

        $query = mysqli_query($con,$req);
        $count = mysqli_num_rows($query);

        if($count == 0)
        {
          echo('No faculty of this department available<br>');
        }
        else
        {
          while($row = mysqli_fetch_array($query))
          {
            $fname= $row['first_name'];
            $lname = $row['last_name'];
            $email=$row['emailid'];
            $col=$row['college_name'];

            echo "<font color='black' font face='Roboto' size=5px >".$fname  .  "</font>";
            echo "<font color='black' font face='Roboto' size=5px>".$lname  .  "<br></font>";
            echo "<font color='black' font face='Roboto' size=5px>".$email."<br></font>";
            echo "<font color='black' font face='Roboto' size=5px>".$col."<br></font>";
            
            echo("<br>");

          }

        }
      }
        ?>
      </div>

  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>