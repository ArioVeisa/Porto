<?php
    include 'conn.php';

    $sql = "SELECT id, create_time, name, email, phone, message FROM contacts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
        <tr>    
            <th>ID</th>
            <th>Time</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>";
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>".$row["id"]."</td>
                <td>".$row["create_time"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["message"]."</td>";
                
            echo "
                <td>
                    <button><a href='edit.php?id=".$row["id"]."'>Edit</a></button>
                     | 
                     <a href='delete.php?id=".$row["id"]."'>Delete</a>
                </td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }



?>