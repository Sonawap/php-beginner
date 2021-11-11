<?php
include "db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sex =  $_POST['sex'];

    $sql = "INSERT INTO users (name,sex) values ('$name', '$sex')";
    $save = $sonawap->query($sql);

    if($save){
        echo "user Data saved";
    }
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM users where id='$id'";
    $delete = $sonawap->query($sql);

    if($delete){
        echo "Deleted";
    }
}


$sql = "SELECT * FROM users";
$users = $sonawap->query($sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <form method="POST" action="form.php">
            <input type="text" name="name" placeholder="enter your name"><br>
            <select name="sex">
                <option>Male</option>
                <option>Female</option>
            </select><br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <div style="margin-top: 20px;">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Action</th>
                </tr>

                <?php while($user = $users->fetch_assoc()) :?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['sex'] ?></td>
                    <form action="form.php" method="POST">
                        <input type="hidden" value="<?php echo $user['id'] ?>" name="id"/>
                        <td>
                            <button type="submit" name="delete">Delete</button>
                            <a href="user.php?user=<?php echo $user['id'] ?>">show</a>
                        </td>
                    </form>
                </tr>
                <?php endwhile ?>
            </table>
        </div>
    </body>
</html>