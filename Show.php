<html>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf.mysql.database.azure.com', 'it63070162@labitf', '0994424004Art', 'labitf', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="650" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="50"> <div align="center">Delete</div></th>
    <th width="50"> <div align="center">Edit</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><a href="Delete.php?ID=<?php echo $Result['ID'];?>">Delete</a></td>
    <td><a href="Update.php?ID=<?php echo $Result['ID'];?>">Update</a></td>
  </tr>
<?php
}
?>
</table>
<a href="form.html">ADD</a>
<?php
mysqli_close($conn);
?>
</body>
</html>
