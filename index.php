<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<html>
<head>
  <title>Heroku Test</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Heroku Test</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
      </li>
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>about">About</a>
      </li>
      <li>
        <a class="nav-link" href="<?php echo ROOT_URL; ?>contact">Contact Us</a>
      </li>
    </ul>
      </div>
</nav>

<?php
  //echo 'This is Index Page';

  $sql = 'SELECT * FROM contact.contact';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  for($rowCount=1; $rowCount<=3; $rowCount++){
  print_r ($details.name);
   
  }
?>

</body>
</html>
