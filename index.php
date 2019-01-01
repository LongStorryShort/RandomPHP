<?php
  $browser = $_SERVER['HTTP_USER_AGENT']; 
  $ip = $_SERVER['REMOTE_ADDR'];
  $db = mysql_connect("your database host url", "db username", "db password");
  mysql_select_db("db name", $db);
  $sql = "INSERT INTO stats(ip,browser,ondate)
      VALUES('$ip', '$browser', now())";
  $results = mysql_query($sql);
?>

<html>

  <head>
    <title>Hello World!</title>
  </head>

  <body>
    <h1>Hello World!</h1>
    <p>This is the home page of the "Hello World!" web site.</p>
  </body>

</html>