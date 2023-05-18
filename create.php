<?php include 'inc/header.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php
$db = new Database();

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
    if(empty($name)||empty($email)||empty($skill)){
        echo "field must not be empty !";
    } else {
        $query = "insert into tbl_user(name, email, skill) value('$name','$email','$skill')";
        $result = $db->insert($query); 
        echo "Data Saved Successfully !";
    }
}

?>







<form action="create.php" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Enter Name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" placeholder="Enter Email"></td>
        </tr>
        <tr>
            <td>Skill</td>
            <td><input type="text" name="skill" placeholder="Enter Skill"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="SAVE">
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Back</a>


<?php include 'inc/footer.php'; ?>