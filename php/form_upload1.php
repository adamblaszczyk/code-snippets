<html>

  <head>
    <title>PHP Example</title>
  </head>
  
  <body>
  
  <form action="form_upload1.php" method="POST" enctype="multipart/form-data">
  Przeslij plik: <input type="file" name="plik">
  <input type="submit" value="Wyslij plik">
  </form>
  
  <?php
  echo ('name = '.$_FILES['plik']['name'].'<br>');
  echo ('type = '.$_FILES['plik']['type'].'<br>');
  echo ('size = '.$_FILES['plik']['size'].'<br>');
  echo ('tmp_name = '.$_FILES['plik']['tmp_name'].'<br>');
  echo ('error = '.$_FILES['plik']['error'].'<br><br>');

  echo ('md5_file = '.md5_file($_FILES['plik']['tmp_name']));
  ?> 
  
  </body>
  
</html>
