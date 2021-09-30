<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
  else
  {

      $sql="insert into create_account(name,email,password,mobile,address,gender,country) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location:Login.php'); 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>StoreMyResult.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
<style>
/* unvisited link */
a:link {
  color: red;
}
a:link {
  text-decoration: underline;
}


/* visited link */
a:visited {
  color: black;
}

/* mouse over link */
a:hover {
  color: hotpink;
}
}
</style>
</head>
<body style="margin-top:50px;">
<div class="container-fluid"style="background-color:#4286f4;color:#000;margin-right: 350px;
  margin-left: 350px;"> <!-- Primary Id-->
  <div class="container">
    <div class="row" style="margin-right: 350px;
  margin-left: 30px;">
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Name :</h4></div>
          <div class="col-sm-7" >
              <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Password :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Address :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Gender :</h4></div>
          <div class="col-sm-7">
              <select name="countr" class="form-control" required>
	      <option value="" disabled selected hidden>Choose Gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4>Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
	      <option value="" disabled selected hidden>Choose a Country</option>
              <option>India</option>
              <option>Pakistan</option>
              <option>China</option>
            </select>
        </div>
        </div>

        
           
          
           <center> <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'nice font', cursive;height:40px;width:90px"/></center><br>
<center><p><a href="login.php">Already have an Account ?</a></p></center>
		<br/>
          </div>
          </div>
          </div>
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
</body>
</html>
