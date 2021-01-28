<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login_style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <title>ログイン画面</title>
</head>

<body>

  <div class="container">
    <div class="wrapper">
      <form action="login_act.php" method="post" name="Login_Form" class="form-signin">
        <h3 class="form-signin-heading">ログイン画面</h3>
        <a href="register.php">新規登録はこちら</a>

        <input type="text" class="form-control" name="username" placeholder="username" required="" autofocus="" />
        <input type="text" class="form-control" name="password" placeholder="password" required="" autofocus="" />

        <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">ログイン</button>
      </form>
    </div>
  </div>

  <button class="button" type="submit" onclick="location.href='index.php'">トップに戻る</button>

  <script type="text/javascript" src="js/font.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>