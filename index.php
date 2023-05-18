<?php include 'inc/header.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
$db = new Database();
$query = "select * from tbl_user";
$row = $db->select($query);
?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "delete from tbl_user where id=$id";
    $result = $db->delete($query);
    echo 'Data Deleted Successfully !';
}

?>

 
 <table>
 	<tr>
 		<th>Serial</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Skill</th>
 		<th>Action</th>
 	</tr>
<?php if($row){ ?>
<?php $i = 1; while($result = $row->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td><?php echo $result['skill']; ?></td>
        <td>
  <a href="update.php?id=<?php echo $result['id']; ?>">Update</a>||
  <a onclick="return confirm('Are you sure to Delete?')"
     href="?id=<?php echo $result['id']; ?>">Delete</a>
        </td>
    </tr>
<?php } ?>
<?php } else{ ?>
        <h2>Data Not Found</h2>
<?php } ?>
 </table>


















 <a href="create.php">create</a>
 
 
 
<?php include 'inc/footer.php'; ?>