<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Admin Login</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login Admin</div>
        <div class="card-body">
          <form method="POST" action="ceklogin.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
          </form>
        </div>
      </div>
    </div>

  </body>

</html>
