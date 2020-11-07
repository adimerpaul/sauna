<!DOCTYPE html>
<html>
<head>
	<title>Ingreso</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="images/index.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="acceso.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="nombre" type="text" id="inputEmail" class="form-control" placeholder="Nombre" required autofocus>
                <input name="clave" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>