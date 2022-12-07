<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    *{
      margin:   0px;
      padding:  0px;
      box-sizing:   border-box  ;
    }
    .bg{
      margin: 0px;
      width: 1535px;
      height: 720px;
      background-color: #D7C9E7;
      background-image: url(bg.jpg);
      background-repeat: no-repeat;
      background-size: 100%;
      background-position: center;
      background-color: rgb(  0, 0.1, 1);
    }
    #log{
      position: center;
      border: 2px solid red;
      padding: 70px 40px;
      margin-top: 30%;
      -webkit-box-shadow: 4px 6px 17px 4px rgba(0,0,0,0.75);
      -moz-box-shadow: 4px 6px 17px 4px rgba(0,0,0,0.75);
      box-shadow: 4px 6px 17px 4px rgba(0,0,0,0.75);
    }
    button{
      -webkit-box-shadow: 1px 3px 26px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 3px 26px 1px rgba(0,0,0,0.75);
box-shadow: 1px 3px 26px 1px rgba(0,0,0,0.75);
    }
    center{
      margin-top: -20px;
      color: darkred;
      font: bold;
      font-size: 30px;
    }
    label{
      color: black;
      font-size: 25px;

    }
    img{
      box-sizing: inherit;
      border: 3px;
      margin: auto;
      border-radius: 30px;
      border-bottom-right-radius: 0px;
    }
    #log1{
      margin-top: 10%;
    }

  </style>
</head>
<body>
  <div class="container-fluid bg">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12">
         <img src="logo.png" id="log1"> 
      </div>
      
      <div class="col-md-1 col-sm-1 col-xs-12"></div>
      
      <div class="col-md-4 col-sm-4 col-xs-12">
        <form id="log" action="login.php" method="post">
          <center><b>Login Form for MIS Reports</b><br><br></center>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="Password" class="form-control" placeholder="Password" name="pwd">
          </div>
          <div class="checkbox"> &nbsp&nbsp&nbsp&nbsp&nbsp                                                                                               
              <input type="checkbox"><b>Remember me</b>
          </div>
          <button type="submit" class="btn btn-success btn-block">Login</button>
        </form>
      </div>

      <div class="col-md-2 col-sm-2 col-xs-12"></div>

      <div class="col-md-2 col-sm-2 col-xs-12">
         <img src="logoH.jfif" id="log1"> 
      </div>
    </div>
  </div>

</body>
</html>
