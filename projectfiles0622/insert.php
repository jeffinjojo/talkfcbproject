<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id16664855_talkfcbuser", "~&|Mi7%nm0W8d^u4", "id16664855_talkfcbdatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$post_title = mysqli_real_escape_string($link, $_REQUEST['post_title']);
$post_image = mysqli_real_escape_string($link, $_REQUEST['post_image']);
$post_content = mysqli_real_escape_string($link, $_REQUEST['post_content']);

 
// Attempt insert query execution
$sql = "INSERT INTO posts (post_title, post_image, post_content) VALUES ('$post_title', '$post_image', '$post_content')";
if(mysqli_query($link, $sql)){
    header("location: posts.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>