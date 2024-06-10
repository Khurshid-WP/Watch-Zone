<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "testing";
  $connection = new mysqli($servername, $username, $password, $dbname);
  $query = "SELECT * FROM testing where id=1";
  $result = $connection->query($query);
  $rows = [];
  if ($result == true) {
    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
    <?php
      if (!empty($rows)) {
        foreach ($rows as $index => $row) {
          $image = $row['images'];
          echo "<div class='carousel-item";
          echo ($index == 0) ? " active" : "";
          echo "'>";
          echo "<img src='$image' alt='Image $index' class='d-block' style='width:100%'>";
          echo "</div>";
        }
      }
    ?>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</body>
</html>
