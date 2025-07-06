<?php
include "db.php";
$result = $conn->query("SELECT * FROM complaints ORDER BY submitted_at DESC");

echo "<h2>Your Complaints</h2><table border='1'><tr><th>ID</th><th>Name</th><th>Flat</th><th>Complaint</th><th>Status</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['flat_number']}</td>
      <td>{$row['complaint']}</td>
      <td>{$row['status']}</td>
    </tr>";
}
echo "</table>";
?>