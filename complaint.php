<?php
include "db.php";

$name = $_POST['name'];
$flat = $_POST['flat_number'];
$text = $_POST['complaint'];

$stmt = $conn->prepare("INSERT INTO complaints (name, flat_number, complaint) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $flat, $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Complaint Submission</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    .success {
      color: green;
    }

    .error {
      color: red;
    }

    a.button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 25px;
      background: #00b894;
      color: white;
      text-decoration: none;
      border-radius: 25px;
      transition: background 0.3s;
    }

    a.button:hover {
      background: #019875;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    if ($stmt->execute()) {
        echo "<h2 class='success'>Complaint submitted successfully!</h2>";
    } else {
        echo "<h2 class='error'>Error: " . $stmt->error . "</h2>";
    }
    ?>
    <a class="button" href="index.html">Go Back</a>
  </div>
</body>
</html>