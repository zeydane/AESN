<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<style type="text/css">
	.login {
		margin-top: ;
  width: 200px;
  height: 190px;
  padding: 10px;
  color: #fff;
  margin: 0 10px;
  background: url(login.png) no-repeat top;
}

.login h4 {
  color: #1c282d;
  margin-bottom: 30px;
}

.login form {
  margin: 0;
  padding: 0;
  margin-bottom: 20px;
}

.login form .login_field {
  width: 188px;
  padding: 2px 5px;
  color: #fff;
  background: #596f78;
  border: 1px solid #1a252a;
}

.login form label {
  display: block;
  width: 100px;
  margin-right: 10px;
  font-size: 14px;
}

.login form .login_button {
  background: #596f78;
  border: 1px solid #1a252a;
  padding: 5px 10px;
  font-weight: bold;
}
</style>
</head>
<body style="background-color: rgb(24, 30, 37);">
	<center>
	<div class="login">
		<form>
			<label><h4>Compte Admin</h4></label>
            <form method="post" action="../P/valide_admin.php">
                <label for="username">Adresse:</label> <input type="text" id="nom" autocomplete="off" name="nom" class="login_field" />
                <div class="cleaner_h10"></div>
                <label for="password">Mot de passe:</label> <input type="password" autocomplete="off" id="password" name="mdp" class="login_field" />
                <div class="cleaner_h10"></div>
                <input type="submit" name="valide" id="submit" value="Connecter" class="login_button" />
            </form>
		</form>
	</div>
	</center>
</body>
</html>