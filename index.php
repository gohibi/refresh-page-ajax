<html>
 <head>
  <title>Auto Refresh Div Content Using jQuery and AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
 </head>
 <body> 
  <div class="container box">
   <form name="add_tweet" method="post">
    <h3 align="center">Commentaire</h3>
    <div class="form-group">
     <textarea name="tweet" id="tweet" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group" align="right">
     <input type="button" name="tweet_button" id="tweet_button"  value="Commenter" class="btn btn-info" />
     
    </div>
   </form>
   
   <br />
   <br />
   <div id="load_tweets"></div>
   
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
 $('#tweet_button').click(function(){
  var tweet_txt = $('#tweet').val();
  //trim() is used to remover spaces
  if($.trim(tweet_txt) != '')
  {
   $.ajax({
    url:"insertion.php",
    method:"POST",
    data:{tweet:tweet_txt},
    dataType:"text",
    success:function(data)
    {
     $('#tweet').val("");
    }
   });
  }
 });
 
 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#load_tweets').load("fetch.php").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 1000);
 
});
</script>