<!DOCTYPE html>
<html>
<head>
	<title>Required List</title>
	<link rel="stylesheet" type="text/css" href="/p-300/design/css/table.css">
	 <link rel="stylesheet" type="text/css" href="/p-300/design/css/design2.css"/>
</head>
<body background="/p-300/design/image/W13.png"  style="background-attachment: fixed;background-repeat: no-repeat;">
	
<br>
	<ul>
	<li><a href="http://localhost/p-300/Hello/logout" style="text-decoration: none">Logout</a></li>
	<li><a href="http://localhost/p-300/" style="text-decoration: none">Home</a></li>
</ul>
	<br>
	<div class="table-title" align="center">
		<h3>Required Donor List</h3>
	</div>

	<?php
	if($list->num_rows()>0)
	{
		foreach ($list->result() as $row) { ?>

	

<table class="table-fill">

<thead>
	<tr>
	<th class="text-left">Name</th>
	<th class="text-left">Phone Number</th>
	</tr>
</thead>

<tbody class="table-hover">
	<tr>
	<td class="text-left"><?php echo $row->Name."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Number."<br>"; ?></td>
	<br><br>
	</tr>
</tbody>
</table>


	<?php
	}
	echo "<br><br>";
	}
	else
	{?>
		<table class="table-fill">
		<tbody  class="table-hover">
			<br><br><br><br><br><br><br>
		<td class="text-left"  style="text-align: center;"><?php echo " SORRY!!! <br> No User Available!"; ?></td>
	</tbody>
	</table>
	<?php
	}

	?>

</body>
</html>