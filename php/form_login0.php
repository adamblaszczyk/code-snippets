<html>

  <head>
    <title>PHP Example</title>
  </head>
  
  <body>
  
  <form action="form_login0.php" method="POST">
  Key: <input type="text" name="key">
  <input type="submit" value="Wyslij">
  </form>
  
  <?php
  if(isset($_POST['key'])) {
    $key = $_POST['key'];
    if($key=='secret') {
      echo('Klucz prawidlowy!');
    }
    else {
      echo('Nie wpisano prawidlowego klucza!!!');
    }
  }
  ?> 
  
  </body>
  
</html>
