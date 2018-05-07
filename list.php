<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<a href = "add.php">
	<button class="btn btn-warning">+ Add User</button>
</a>
<div class="clearfix"></div><br>

<table id="dataTable" class="display" style="width:100%">
	<thead>
		<tr>
			<th>User Name</th>
			<th>Email Id</th>
			<th>Phone Number</th>
			<th>DOB</th>
		</tr>
	</thead>
	<tbody>
<?php
		if(!empty($data))
		{
			foreach($data as $value)
			{
?>
				<tr>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['phone']; ?></td>
					<td><?php echo date('d M Y' , strtotime($value['dob'])); ?></td>
				</tr>
<?php
			}
		}
?>
	</tbody>
</table>

<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>