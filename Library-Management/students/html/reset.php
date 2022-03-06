
<!DOCTYPE html>
<html>
<head>
  <link rel="Stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet"href="../css/style.css">
  <title>Lms</title>
  <link rel="icon" type="image/icon" href="../images/g.jpg">
  <link rel="icon" type="image/icon" href="../images/g.jpg">  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="card 18rem">
  <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <form method="post" action="../database/reset.php">
      <input type="password" name="old" placeholder="Old Password" required="">
      <input type="password" name="new" placeholder="New Password" required=""id="txtPassword">
      <input type="password" name="new" placeholder="New Password" required=""id="txtConfirmPassword">
      <br>
      <input type="submit" name="submit" value="submit" class="btn btn-primary" id="btnSubmit">
    </form>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
</body>
</html>
  
                                            