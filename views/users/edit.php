<h2>Editar usuario</h2>

<form action="<?php echo APP_URL."/users/edit"; ?>"
	method="POST">
	<input type= "hidden" name="id" value = "<?php echo $user["id"]; ?>">
	<p>
		<label for="username">Username</label>
		<input type="text" name="username" value = "<?php echo $user["username"]; ?>">
	</p>
	<p>
		<label for="Newpassword">Password</label>
		<input type="password" name="newPassword">
	</p>
		<p>
		<label for="type_id">Type</label>
			<select name="type_id" id="type_id">
				<?php 
				foreach ($types as $type):
					if ($type["types"]["id"]==$user["type_id"]) {
				?>
						<option selected value = "<?php echo $type["types"] ["id"]; ?>">
							<?php 
								echo $type["types"] ["name"];
							 ?>
						</option>
				<?php 
					}else{ 
				?>
						<option value = "<?php echo $type["types"] ["id"]; ?>">
							<?php 
								echo $type["types"] ["name"];
							 ?>
						</option>
				<?php 
					}  
				?>
				 				
				<?php 
				endforeach 
				?>
			</select>
	</p>
	<p>
		<input type="submit" >
	</p>
</form>