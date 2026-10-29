<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>5CS045 Task1 2453796</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <?php include "db.php"; ?>
    <?php
    $sql = "SELECT * FROM movies ORDER BY Movie_id";
    $results = mysqli_query($mysqli, $sql);
    if (!$results) {
    die("Query failed: " . mysqli_error($mysqli));
}
    ?>

    <div class="container-fluid">

      <h1>Library</h1>

      <div class="container text-center">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Movie Name</th>
              <th scope="col">Genre</th>
              <th scope="col">Price</th>
              <th scope="col">Date of release</th>
            </tr>
          </thead>
          <?php while($a_row = mysqli_fetch_assoc($results)):?>
          <tbody>
            <tr>
              <th scope="row"><?=$a_row['Movie_name']?></th>
              <td><?=$a_row['Genre']?></td>
              <td>£<?=$a_row['Price']?></td>
              <td><?=$a_row['Date of release']?></td>
            </tr>
            
          </tbody>
          <?php endwhile;?>
        </table>
      </div>
    </div>
    

    

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
