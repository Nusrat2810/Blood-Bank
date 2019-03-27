<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" type="text/css" href="/p-300/design/css/user_table.css">

	 
  <!-- form bootstrap from w3 strt-->
   

</head>
<body  background="/p-300/design/image/W13.png" style="background-attachment: fixed;background-repeat: no-repeat;">
	
<br>
<div class="header" style="margin: 0 0 10px;">
<ul  style="width: 100%;">
	<li><a href="http://localhost/p-300/Hello/logout" style="text-decoration: none; float: right;">Logout</a></li>
	<li><a href="http://localhost/p-300/Hello/Banned" style="text-decoration: none; float: right;">Banned Users</a></li>
	<li><a href="http://localhost/p-300/" style="text-decoration: none; float: right;">Home</a></li>
</ul>
</div>
<br>
	<div class="table-title" align="center">
		<h3>All Users List</h3>
	</div>

	<?php
	if($users->num_rows()>0)
	{
		foreach ($users->result() as $row) { ?>

	

<table class="table-fill">

<thead>
	<tr>
	<th class="text-left">Name</th>
	<th class="text-left">Number</th>
	<th class="text-left">Blood Group</th>
	<th class="text-left">District</th>
	<th class="text-left">Area</th>
	<th class="text-left">Fit/Unfit</th>

	</tr>
</thead>

<tbody class="table-hover">
	<tr>
	<td class="text-left"><?php echo $row->Name."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Number."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Blood."<br>"; ?></td>
	<td class="text-left"><?php echo $row->District."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Area."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Fit."<br>"; ?></td>

	<br><br>
	</tr>

</tbody>

</table>
<a href="http://localhost/p-300/Hello/bann/<?php echo ($row->Id); ?> "><button class="button" style="margin-right: 100px; margin-top: 5px;">Ban User</button></a>
	<a href="http://localhost/p-300/Hello/make_admin/<?php echo ($row->Id); ?> " ><button id='d1' class="button" style=" margin-top: 5px;">Make Admin</button></a>
	<br><br>
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