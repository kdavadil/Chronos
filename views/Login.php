<?php 

include_once "../classes/DB.php";

if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$pass = $_POST['pass'];

	$object = new User();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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

<h3 class="form-title">Login</h3>

 <div class="card">
    <div class="card-content">
<div class="row">
    <form class="col s12">
	      <div class="row">
	        <div class="input-field col s12">
	          <input id="email" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	      </div>
	      <div class="row">
		  <input type="submit" class="btn waves-effect waves-light" name="submit">

	    </div>
    </form> <!-- end of form -->
  </div>
</div>
</div> <!-- end card -->

</div>   <!-- end container -->     


</body>
</html>
