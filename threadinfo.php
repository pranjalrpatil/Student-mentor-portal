<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
    $id=$_GET['threadid'];
    $sql= "SELECT * FROM threads where thread_id=$id";
    $result= mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($result))
        {
          $threadname= $row['thread_title'];
          $threaddesc=$row['thread_desc'];
        }
    ?>

   

<?php
    $showalert = false;
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST')
    {
        //insert into db
        $com=$_POST['comment'];
        

        $sql= "INSERT INTO 'comments'('comment','thread_id','comment_time') VALUES ('$com','$id',0,current_timestamp())";
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
  <h1 class="display-4"><?php echo $threadname;?></h1>
  <p class="lead"><?php echo $threaddesc;?></p>
  <hr class="my-4">
  <p>Peer group where students can help each other.</p>
  
</div>
    </div>

    <div class="container">
      <h1>Comments</h1>

        <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
      
  
    <div class="form-group">
      <label for="exampleInputEmail">Comment</label>
      <textarea class="form-control" id="comment" name="comment" rows=3 ></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Post comment</button>
  </form>

</div>

      

      <?php 
    $id=$_GET['threadid'];
    $sql= "SELECT * FROM comments where thread_id=$id";
    $result= mysqli_query($conn,$sql);
    $nores=true;
        while($row= mysqli_fetch_assoc($result))
        {
          $nores=false;
          $id= $row['comment_id'];
          $content=$row['comment'];
          $time=$row['comment_time'];
        
    
    
  echo '<div class="media my-3">
  
  <div  class="container">
    
   --'. $content.'
  </div>
</div>';

echo '
  
  <div  class="container">
    
    '. $time.'
  
</div>';


}

if($nores)
{
   echo'<div  class="container">
    <b>No threads yet</b>
 </div>';
}

?>
<br>
<div class="container">
<a href="index.php" class="btn btn-primary"> Home page</a>
</div>
    
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>