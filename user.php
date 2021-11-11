<?php
$id = $_GET['user'];
include "db.php";
if(isset($id)){
    $sql = "SELECT * FROM users where id = '$id'";
    $user = mysqli_fetch_array($sonawap->query($sql));
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $id = $_POST['id'];
    $sql = "UPDATE users set name = '$name', sex = '$sex' where id = '$id'";
    $save = $sonawap->query($sql);
    header('Location: form.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <form method="POST" action="user.php">
            <input type="hidden" value="<?php echo $_GET['user'] ?>" name="id"/>
            <input type="text" name="name" placeholder="enter your name" value="<?php echo $user['name'] ?>"><br>
            <select name="sex">
                <option>Male</option>
                <option>Female</option>
            </select><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>