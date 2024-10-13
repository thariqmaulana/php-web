<!-- 
  Secara default metode di form itu get. maka dia menjadi query param.
  form digunakan untuk mengirim data dari client ke server.
  bagusnya form itu post bukan get. jadi data dikirim di body, bukan di query.
  data akan disimpan di global variable $_POST(array)
-->
<!-- 
  Nah disinilah atribut name di <input> akan berguna
  dia sebagai key di variable POST(array)
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Post</title>
</head>
<body>
  <form action="post.php" method="post">
    <label> First Name :
      <input type="text" name="first_name">
    </label>
    <br/> <br/>
    <label> Last Name :
      <input type="text" name="last_name">
    </label>
    <br/><br/>
    <input type="submit" value="Register">
  </form>
</body>
</html>