
<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <style type="text/css">
   .box{
    width:600px;
    margin:6% auto;
    border:1px solid #ccc;
   }
   .login{
       background-color: #cf1010;
       color: #fff;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box p-5">
   <h3 align="center">LOGIN</h3><hr><br />

   
   
   
   <form method="post" action="{{route('admin_login')}}" enctype="multipart/form-data">
   @csrf
    <input type="hidden" name="_token" value="dWbESgNQf2KMYaAO5otzXp0bJDLNR1axvj4DRrjp">
    <div class="form-group">
     <label>Username</label>
     <input type="text" name="admin_name" class="form-control" />
    </div>
    <div class="form-group">
     <label>Password</label>
     <input type="password" name="admin_pass" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-block login" value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>