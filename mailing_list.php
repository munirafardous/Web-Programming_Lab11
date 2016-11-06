<?php
include 'header.php';
$connect = mysql_connect("localhost","wp_eatery","password") or die("Sorry, Not connected");
mysql_select_db("wp_eatery") or die("Table is not available");
$mysql = "select * from mailinglist";
$list = mysql_query($mysql,$connect);
if(!$list)
echo "Something Wrong..data did not retrive from database!!!";  
?>

<html>
<head> 
   <title>Mailing List</title>
</head>

<body>
<form>
	<center>
	<h2> Data List</h2>
	<table border="1">
	<tr>
	<th>Full Name</th>
	<th>Email</th>
	<th>Username</th>
	<th>Phone</th>
	
	</tr>

<?php while($row = mysql_fetch_array($list, MYSQL_ASSOC)){?>
	<tr> 
	<td><?php echo $row['firstName']; echo " "; echo $row['lastName']; ?></td>
	<td><?php echo $row['emailAddress'] ?></td>
	<td><?php echo $row['username'] ?></td>
	<td><?php echo $row['phoneNumber'] ?></td>
	</tr>
<?php } ?>

	</table>
	</center>
</form>
</body>
</html>

<?php
	include 'footer.php';
?>