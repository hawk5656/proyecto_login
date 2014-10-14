<?php

	include_once 'code_files/db_connect.php';
	include_once 'code_files/functions.php';
	
	if(isset($_GET['error'])){
		echo '<p class="error">Error al logear</p>';
	}
?>
		<script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
<h2 class="title">Login</h2>
<form action="code_files/process_login.php" method="post" name="login_form">
	<label for="email">Email: </label><br /><input type="text" name="email" /> <br />
	<label for="password">Contrase&ntilde;a:</label><br /><input type="password" name="password" id="password" /> <br />
	<input type="button" value="login" onclick="return formhash(this.form, this.form.password);" />
</form>
<nav>
	<a href="registro.php">registrarse</a>
</nav>