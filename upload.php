<?php include 'header.php';?>


<?php
// Include the database configuration file
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$statusMsg = '';

// File upload path
//$targetDir = "uploads/";
//$fileName = basename($_FILES["file"]["name"]);
//$targetFilePath = $targetDir . $fileName;
//$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "INSERT into images (file_name,p_id) VALUES ('".$fileName."', 2)";
            $insert = mysqli_query($conn, $sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{

   // $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>PROJECT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<link href="bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
  <body>
    <div class="container my-4">
    <div class="jumbotron">
        <h1 class="display-4">Upload image</h1>
        
        <hr class="my-4">
        <p>Students can upload images for better clarification of doubts/ contributing to projects</p>
  <!--<a class="btn btn-primary btn-lg" href="#" role="button">Explore this!</a>-->
    </div>
    </div>
    <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:<br>
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
    </form>
    <button><a href="showimg.php">View already uploaded images</a></button>
</div>
</body>