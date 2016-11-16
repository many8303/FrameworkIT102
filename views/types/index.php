<h2>Listado de tipos</h2>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th><th>Action</th></th><th></th>
	</tr>

<?php foreach ($types as $type): ?>
<tr>
	<td><?php echo $type["types"]["id"]; ?></td>
	<td><?php echo $type["types"]["name"]; ?></td>
	<td>
		<a href="<?php echo APP_URL."/types/edit/".$type["types"]["id"]; ?>">Edit</a>
	</td>
	<td>
		<a href="<?php echo APP_URL."/types/delete/".$type["types"]["id"]; ?>">Delete</a>
	</td>
	<td>
		<a href="<?php echo APP_URL."/types/add/".$type["types"]["id"]; ?>">Add</a></li>
	</td>
</tr>
<?php endforeach; ?>

</table>