<html>

  <head>
    <title>PHP Example</title>
  </head>
  
  <body>
  
  <form action="form_login1.php" method="POST">
  Login: <input type="text" name="login">
  Password: <input type="password" name="passwd">
  <input type="submit" value="LogIn">
  </form>
  
  <?php
  if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    if($login=='admin' && $passwd=='123') {
      echo('Witaj administratorze!');
    }
    else {
      echo('Zaloguj sie na konto administratora!!!');
    }
  }
  ?> 
  
  </body>
  
</html>
