<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Search for a car by model">
  <title>Search Cars</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>
  <h1>Search Cars</h1>
  <form method="get" action="search_result.php">
    <p>
      <label for="model">Car model:</label>
      <input type="text" id="model" name="model" placeholder="e.g. Astra">
      <input type="submit" value="Search">
    </p>
  </form>
</body>
</html>