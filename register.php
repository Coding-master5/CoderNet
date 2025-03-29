<!doctype html>
<html>
  <head>
    <title>Register - CoderNet</title>
    <link rel='icon' type='image/x-icon' href='https://coding-master5.github.io/CoderNet/icon.png'>
    <style>
      body {
        text-align:center;
        font-family:monospace;
        color:#0f0;
        background:#000;
      }
      button {
        color:#0f0;
        font-family:monospace;
        background:transparent;
        border:3px solid #0f0;
      }
      input {
        color:#0f0;
        font-family:monospace;
        background:transparent;
        border:3px solid #0f0;
      }
    </style>
  </head>
  <body>
    <h2>Register</h2>
    <form action='https://coding-master5.github.io/CoderNet/register.php'>
      <label>Username</label>
      <input name='username'>
      <label>Password</label>
      <input name='password'>
      <input type='submit'>
    </form>
  </body>
</html>
<?php
  $conn = new mysqli('jmeng.h.filess.io', 'CoderNet_distantare', '9cd4a4c154b64863db9d0ca118630d3ebc16c5f4', 'CoderNet_distantare');
  if (!$conn) {
    die('Database error');
  }
  $sql = 'INSERT INTO userInfo (username, password)
  VALUES ('.$_GET['username'].', '.$_GET['password'].')';
  $conn->query($sql);
  $conn->close();
?>
