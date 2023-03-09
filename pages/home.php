<?php
$title = 'Home';

// open database
$db = open_sqlite_db('secure/site.sqlite');

// query grades table
$result = exec_sql_query($db, 'SELECT * FROM music;');

// get records from query
$records = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?> - Song Recommendations for Dance Choreography</title>

  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" media="all">
</head>

<body>
  <?php include 'includes/header.php'; ?>

  <main class="home">
    <h2><?php echo $title; ?></h2>

    <table>
      <tr>
        <th>Name</th>
        <th>Artist</th>
        <th>Music Genre</th>
        <th>Potential Dance Style</th>
        <th>Choreography Inspiration</th>
      </tr>
      <?php
      // write a table row for each record
      foreach ($records as $record) { ?>
        <tr>
          <td><?php echo htmlspecialchars( $record['name'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['artist'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['genre' ] ); ?></td>
          <td><?php echo htmlspecialchars( $record['style'] ); ?></td>
          <td><?php echo htmlspecialchars( $record['inspiration'] ); ?></td>
        </tr>
      <?php } ?>
    </table>

  </main>

</body>

</html>
