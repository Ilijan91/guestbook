<?php
$user_name = $email = $comment = $title = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_name = test_input($_POST["user_name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $title = test_input($_POST["title"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>  
    <head>  
        <title>Guestbook</title>  
         
        <link href="../css/style.css" rel="stylesheet" />  
        

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
 
    <body>  
        <div class="container">  
            <br>  
            <br>
            <br>
    <div class="table-responsive"> 

    <h3 align="center">Guestbook entry data:</h3><br>

    <div class="box">
     <form id="formId" action="" method="POST">
     
      

       <div class="col-xs-12">
            <div class="form-group">
            <label>Name</label>
            <input type="text" name="user_name" id="user_name" placeholder="Enter Name" class="form-control"  />
            </div>
        </div>

        <div class="col-xs-12">
            <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" id="title" placeholder="Title" class="form-control"  />
            </div>
        </div>

      <div class="col-xs-12">
          <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" placeholder="Email" class="form-control" />
          </div>
      </div>

      <div class="col-xs-12">
        <div class="form-group">
        <label for="comment">Comment</label>
        <textarea class="form-control" name="comment" placeholder="Your comment goes here..." id="comment" rows="4"></textarea>
        </div>
      </div>





      <div class="form-group">
       <input type="submit" id="form-submit" name="submit" value="Submit" class="btn btn-success" />
      </div>
      <div id="errors"></div>  
    
     </form> <!-- end of form -->
     <div class="form-group">
        <a role="button" class="btn btn-primary" href="show">Show all Users</a>
     </div>
    </div> <!-- end of div .box -->
   </div> <!-- end of div .table-responsive -->

  </div> <!-- end of div .container -->

  
    </body>  
</html>  
