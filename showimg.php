

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Uploaded images</title>
  </head>
  <body>
    

    <?php include 'header.php';?>
    <div class="container my-4">
    <div class="jumbotron">
        <h1 class="display-4">View uploaded images</h1>
        
        <hr class="my-4">
        <p>Students and faculty can view the images uploaded</p>
  <!--<a class="btn btn-primary btn-lg" href="#" role="button">Explore this!</a>-->
    </div>
    </div>
    <div class="container">
<?php
// Include the database configuration file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Get images from the database
 $sql = "SELECT * FROM images ORDER BY p_id DESC";
 $query = mysqli_query($conn, $sql);

if($query->num_rows > 0){
    while($row = $query->fetch_assoc())
    {
        $imageURL = 'uploads/'.$row["file_name"];
?>
 <img src="<?php echo $imageURL; ?>" alt="" width="400px" height="200px" margin=5% padding=5% />
<?php 
}
}else{ 
	?>
    <p>No image(s) found...</p>
<?php 
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