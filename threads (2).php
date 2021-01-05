<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google translate-->


    <title>Forums- Coding forum</title>
  </head>
  <body>


    <?php include 'header.php';?>
    <?php include 'connection.php';?>

    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <?php 
    $id=$_GET['catid'];
    $sql= "SELECT * FROM catagories where catagory_id=$id";
    $result= mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($result))
        {
          $catname= $row['catagory_name'];
          $catdesc=$row['catagory_desc'];
        }
    ?>



    <?php
    $showalert = false;
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST')
    {
        //insert into db
        $th_title=$_POST['title'];
        $th_desc=$_POST['desc'];

        $sql= "INSERT INTO 'threads'('thread_title','thread_desc','thread_cat_id','thread_user_id','time') VALUES ('$th_title','$th_desc','$id',0,current_timestamp())";
        $result= mysqli_query($conn,$sql);
        $showalert = true;
        if($showalert)
        {
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Thread added!</strong> Please wait for community to respond.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ';
        }
    }
    ?>
    
    <div class="container my-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?php echo $catname;?></h1>
        <p class="lead"><?php echo $catdesc;?></p>
        <hr class="my-4">
        <p>Peer group where students can help each other.</p>
  <!--<a class="btn btn-primary btn-lg" href="#" role="button">Explore this!</a>-->
    </div>
    </div>


    <div class="container">
    <h2>Browse Questions</h2>
  </div>

  <div class="container">
<br><br>
<form action="<?php $_SERVER['REQUEST_URI']?>" method="post">
      <div class="form-group">
        <label for="title">Question</label>
        <input type="text" class="form-control" id="title" name="title"  placeholder="Enter your question">
      </div>
  
    <div class="form-group">
      <label for="desc">Description</label>
      <textarea type="text" class="form-control" id="desc" name="desc" rows=3 placeholder="Elaborate your question" ></textarea>
    </div>

    

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

      <?php 
    $id=$_GET['catid'];
    $sql= "SELECT * FROM threads where thread_cat_id=$id";
    $result= mysqli_query($conn,$sql);
    $nores= true;
        while($row= mysqli_fetch_assoc($result))
        {
          $nores=false;
          $id= $row['thread_id'];
          $title=$row['thread_title'];
          $desc=$row['thread_desc'];
        
    
          echo '<div class="container" class="media my-3">
          
          <div class="media-body">
            <h5 class="mt-0"><a href="threadinfo.php?threadid='.$id.'">'.$title.'</a></h5>
            '. $desc.'
          </div>
        </div>';
      }

      if($nores)
{
   echo'<div class="container">
    <b>No questions yet</b>
    </div>';
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