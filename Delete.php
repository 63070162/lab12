<?php
$conn=mysqli_connect("labitf.mysql.database.azure.com", "it63070162@labitf", "0994424004Art", "labitf", 3306) 
or die("connect error");
$ID=$_GET["ID"];
$delete_sql="Delete from guestbook where ID=".$ID."";
$Delete_query=mysqli_query($conn, $delete_sql);
if ($Delete_query){
    echo "Delete successful";
}
else{
    echo "failed to delete";
}
?>
