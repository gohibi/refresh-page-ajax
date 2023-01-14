<?php
if(isset($_POST["tweet"]))
{
 $connect = mysqli_connect("localhost", "root", "", "testing");
 $tweet = mysqli_real_escape_string($connect, $_POST["tweet"]);
 $sql = "INSERT INTO tbl_tweet (tweet) VALUES ('".$tweet."')";
 mysqli_query($connect, $sql);
}

?>