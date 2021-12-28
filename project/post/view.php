<?PHP $db = mysqli_connect("localhost", "root", " ");
        $result = mysqli_query($db, "SELECT * FROM post ");
while($data = mysqli_fetch_array($result))
{

    ?>
<img src="<?php echo $data['imagename']; ?>" width="200" height="100">
<p><?php echo $data['post']; ?></p>

<?php
} 

?>