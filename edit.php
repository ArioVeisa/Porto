<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contacts WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone', message='$message' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: result.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>

<body>
    <form action="edit.php" method="post" autocomplete="off">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" value="<?php echo $row['phone']; ?>">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea name="message"><?php echo $row['message']; ?></textarea>
        </div>
        <input type="submit" value="Update">
    </form>
</body>

</html>