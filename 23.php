23)              <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'lab';
        $conn = mysqli_connect($host, $user, $password, $database);
        
        $sql = "INSERT INTO students (name, phone) VALUES ('$name', '$phone')";
        if (mysqli_query($conn, $sql)) {
            echo 'Student information saved successfully';
        } else {
            echo 'Error: ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } 

?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?> " required>
    <br>
    <label>Phone number:</label>
    <input type="text" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?> "required>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>