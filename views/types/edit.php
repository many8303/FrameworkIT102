<h2>Editar tipo</h2>

<form action="<?php echo APP_URL."/types/edit"; ?>"
	method="POST">
	<input type= "hidden" name="id" value = "<?php echo $type["id"]; ?>">
	<p>
		<label for="typename">Name</label>
		<input type="text" name="name" value = "<?php echo $type["name"]; ?>">
	</p>
	

	<p>
		<input type="submit" >
	</p>
</form>