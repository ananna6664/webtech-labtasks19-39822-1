
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>



<table>
	<thead>
		<tr>
			<th>USER Name</th>
			<th>USER Email</th>
			<th>USER Address</th>
			<th>USER Phone Number</th>
			<th>USER Gender</th>
			<th>USER Dob</th>
			<th>USER Password</th>		
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="../showStudent.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>