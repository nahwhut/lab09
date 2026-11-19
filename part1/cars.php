<?php
  require_once "settings.php";
  $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Used car list from exhibition_db">
  <title>Cars for Sale</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <h1>Cars for Sale</h1>
<?php
  if (!$conn) {
    echo "<p>Database connection failure.</p>";
  } else {
    $query  = "SELECT * FROM cars";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr>";
      echo "<th>Car ID</th>";
      echo "<th>Make</th>";
      echo "<th>Model</th>";
      echo "<th>Price</th>";
      echo "<th>Year</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "<p>There are no cars to display.</p>";
    }

    mysqli_close($conn);
  }
?>
</body>
</html>