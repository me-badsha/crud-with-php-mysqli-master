<?php include 'inc/header.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php 
$id = $_GET['id'];
$db = new Database();
$query = "select * from tbl_user where id=$id";
$result = $db->select($query)->fetch_assoc();


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
    if(empty($name)||empty($email)||empty($skill)){
        echo "field must not be empty !";
    } else {
        $query = "update tbl_user set name='$name', email='$email', skill='$skill' where id=$id";
        $result = $db->update($query); 
        echo "Data Updated Successfully !";
    }
}

?>
<?php
if(isset($_POST['delete'])){
    $query = "delete from tbl_user where id=$id";
    $result = $db->delete($query);
    echo "Data Deleted Successfully !";
}

?>







<form action="" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $result['name']; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $result['email']; ?>"></td>
        </tr>
        <tr>
            <td>Skill</td>
            <td><input type="text" name="skill" value="<?php echo $result['skill']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="SAVE">
                <input type="submit" name="delete" value="DELETE">
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Back</a>


<?php include 'inc/footer.php'; ?>
