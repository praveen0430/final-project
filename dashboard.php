<?php
session_start();
if (!isset($_SESSION['admin'])) {
    die("Access denied");
}

include "../db.php";
$result = $conn->query("SELECT * FROM complaints");

echo "<h2>Admin Dashboard</h2><table border='1'><tr><th>ID</th><th>Name</th><th>Flat</th><th>Complaint</th><th>Status</th><th>Action</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['flat_number']}</td>
      <td>{$row['complaint']}</td>
      <td>{$row['status']}</td>
      <td>
        <form method='POST' action='update_status.php'>
          <input type='hidden' name='id' value='{$row['id']}'>
          <select name='status'>
            <option>Pending</option>
            <option>In Progress</option>
            <option>Resolved</option>
          </select>
          <button>Update</button>
        </form>
      </td>
    </tr>";
}
echo "</table>";
?>