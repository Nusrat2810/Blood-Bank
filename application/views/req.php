<!DOCTYPE html>
<html>
<head>
	<title>Requests</title>
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
		<h3>All Requests</h3>
	</div>

	<?php
	if($res->num_rows()>0)
	{
		foreach ($res->result() as $row) { ?>

	

<table class="table-fill" >

<thead>
	<tr>
	
	<th class="text-left">Blood Group</th>
	<th class="text-left">District</th>
	<th class="text-left">Area</th>
	<th class="text-left">Number</th>
	<th class="text-left">Donor</th>
	</tr>
</thead>

<tbody class="table-hover" >
	<tr>
	
	<td class="text-left"><?php echo $row->BG."<br>"; ?></td>
	<td class="text-left"><?php echo $row->D."<br>"; ?></td>
	<td class="text-left"><?php echo $row->A."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Number."<br>"; ?></td>
	<td class="text-left"><?php echo $row->Donor."<br>"; ?></td>
	<br><br>
	</tr>
</tbody>
</table>
	<a href="http://localhost/p-300/Hello/give<?php echo ($row->Id); ?> "><button class="button" style="margin-right: 200px; margin-top: 5px; float: right;">I'll Give</button></a><br>


	<?php
	}
	echo "<br><br>";
	}
	else
	{?>
		<table class="table-fill">
		<tbody  class="table-hover">
			<br><br><br><br><br><br><br>
		<td class="text-left"  style="text-align: center;"><?php echo " SORRY!!! <br> No Requests!"; ?></td>
	</tbody>
	</table>
	<?php
	}

	?>

</body>
</html>