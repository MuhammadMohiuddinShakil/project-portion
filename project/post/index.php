<?php
error_reporting(0);
require_once 'dbConfig.php';
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['post'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    $post     = $_POST['uploadtext']; 
    $folder   = $filename;
        
    $db = mysqli_connect("localhost", "root", " ");

        // Get all the submitted data from the form
        $sql = "INSERT INTO post (imagename,post) VALUES ('$filename','$post')";

        // Execute query
        mysqli_query($db, $sql);
        
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Your post uploaded successfully";
        }else{
            $msg = "Failed to upload post";
    }
} 
?>


<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

    #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}

</style>
<title>Image Upload</title>
<div id="userpost"></div>
<div id="content">
    

<form method="POST" action="" enctype="multipart/form-data">
    <p><?php echo $msg ?></p>
    <input type="file" name="uploadfile" value=""/>
    <input type="textarea" name ="uploadtext" value =""/>
        
    <div>
        <button type="submit" name="post">UPLOAD Post</button>
        </div>
</form>
<form method="POST" action="view.php" enctype="">
    <button>View Post</button>
</form>
</div>

</body>
</html>
