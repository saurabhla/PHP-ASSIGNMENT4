<?php
if(empty($_POST['url']))
{
    echo 'Enter URL <br>';
}else{
if(isset($_POST['url'])==true && empty($_POST['url'])==false){
    $url=$_POST['url'];
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
        echo 'Invalid URL <br>';
      }}if(empty($_POST['name']))
      {
          echo 'Enter First name';
      }else{
          if(isset($_POST['name'])==true && empty($_POST['name'])==false){
          $name=$_POST['name'];
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
             {
              echo 'Invalid Name-Must Contain Only Letters <br>';
            }
      }if(empty($_POST['email']))
      {
          echo 'ENter email <br>';
      }else{
      
      if(isset($_POST['email'])==true && empty($_POST['email'])==false){
          $email=$_POST['email'];
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)==true){
              echo'Invalid Email <br>';
      
          }
         
      }
      }
      }
   
}



?>
<link rel="stylesheet" type="text/css" href="stylePHP.css"/>
<div class="main">
<form class="form-style-4" action="" method="post">
<label for="field1">
<span>Enter URL</span><input type="text" name="url" required="true" />
</label>
<label for="field2">
<span>Enter Name</span><input type="text" name="name" required="true" />
</label>
<label for="field3">
<span>Enter Email</span><input type="text" name="email" required="true" />
</label>

<label>
<span> </span><input type="submit" value="Submit" />
</label>
</form>
</div>
<!-- <html>
  <head>
    <title>PHP VALIDATIONS PAGE</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css"/>
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Check Validations</h1>
          </div>
          <div class="panel-body">
            <form  method="post">
            <div class="form-group">
                <label for="number">Enter URL</label>
                <input
                type="text" name="url"
                />

              </div>
              <div class="form-group">
                <label for="firstName">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                />
              </div>
              
              
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />

              </div>
            
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
         
  </body>
</html> -->
<!-- <form action="" method=POST class="white">
<input type="text" name="url" placeholder="ENter Url"/>

<br>
<input type="text" name="name" placeholder="ENter name">
 
 <br>
 <input type="text" name="email" placeholder="ENter Email">
 <input type="submit" class="btn brand z-depth-0">
 
</form>
</div>
</body>
</html> -->