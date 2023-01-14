<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "SELECT * FROM tbl_tweet ORDER BY tweet_id ASC";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  //echo '<p>'.$row["tweet"].'</p>';
 }
}
?>