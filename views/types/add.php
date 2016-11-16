<h2>Agregar Tipo</h2>

<form action="<?php echo APP_URL."/types/add"; ?>"
	method="POST">
	<p>
		<label for="name">Typename</label>
		<input type="text" name="name">
	</p>

	<p>
		<input type="submit" >
	</p>
</form>