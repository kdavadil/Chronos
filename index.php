<?php 
require 'classes/DB.php';

$database = new Database;

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){
  $uname = $post['uname'];
  $email = $post['email'];
  $pass = md5($post['password']);

  $database->query('INSERT INTO users (username, email, password) VALUES(:username, :email, :password)');
  $database->bind(':username', $uname);
  $database->bind(':email', $email);
  $database->bind(':password', $pass);
  $database->execute();
  if($database->lastInsertId()){
    echo '<p>Post Added!</p>';
  }
}

$database->query('SELECT * FROM users');
$rows = $database->resultset();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chronos</title>

	 <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<!-- Materialize -->
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="views/CSS/app.css">

</head>
<body>
	
<div class="container">
<h3 class="form-title">Register</h3>

 <div class="card">
    <div class="card-content">
<div class="row">
    <form class="col s12" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="row">
          <div class="input-field col s12">
            <input name="uname" type="text" class="validate" required>
            <label for="uname">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="email" type="email" class="validate" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <input type="submit" class="btn waves-effect waves-light" name="submit">
          <i class="material-icons right">send</i>
          </button>
      </div>
    </form> 

<!-- <?php foreach($rows as $row) : ?>
  <div>
    <h3><?php echo $row['username']; ?></h3>
    <p><?php echo $row['email']; ?></p>
  </div>
<?php endforeach; ?> -->


</div> 
</div>
</div>
</div> 

</body>
</html>
