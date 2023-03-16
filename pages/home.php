<?php
// open database
$db = open_sqlite_db('secure/site.sqlite');

// query grades table
$result = exec_sql_query($db, 'SELECT * FROM music;');

// get records from query
$records = $result->fetchAll();

// 1. Initialize default page state.

$show_confirmation = False;

// feedback message CSS classes
$form_feedback_classes = array(
  'name' => 'hidden',
  'artist' => 'hidden',
  'genre' => 'hidden',
  'style' => 'hidden',
  'inspo' => 'hidden',
);

// values
$form_values = array(
  'name' => '',
  'artist' => '',
  'genre' => '',
  'style' => '',
  'inspo' => '',
);

$sticky_values = array(
  'name' => '',
  'artist' => '',
  'genre' => '',
  'style' => '',
  'inspo' => '',
);

// 2. If form was submitted:
if (isset($_POST['submit-form'])) {

  // 3. Store form data as variables.
  $form_values['name'] = trim($_POST['name']); // untrusted
  $form_values['artist'] = trim($_POST['artist']); // untrusted

  // 4. Assume form is valid.
  $form_valid = True;
  // 5. Validate each piece of required data:

  // Name is required.
  // 6. If $data is empty ($data == ''):
  if ($form_values['name'] == '') {
    // 7. Mark form as invalid.
    $form_valid = False;
    // 8. Show corrective feedback for $data.
    $form_feedback_classes['name'] = '';
  }

  // 6. If $data is empty ($data == ''):
  if ($form_values['artist'] == '') {
    // 7. Mark form as invalid.
    $form_valid = False;
    // 8. Show corrective feedback for $data.
    $form_feedback_classes['artist'] = '';
  }

    // 6. If $data is empty ($data == ''):
  if ($form_values['genre'] == '') {
    // 7. Mark form as invalid.
    $form_valid = False;
    // 8. Show corrective feedback for $data.
    $form_feedback_classes['genre'] = '';
  }


  // 9. If form data is valid:
  if ($form_valid) {
    // 10. Show confirmation.
    $show_confirmation = True;
  } else { // 11. Otherwise:
    // 12. Set sticky values and echo them.
    $sticky_values['name'] = $form_values['name'];
    $sticky_values['artist'] = $form_values['artist'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Home - Song Recommendations for Dance Choreography</title>

  <link rel="stylesheet" type="text/css" href="/public/styles/site.css" media="all">
</head>

<body>

<header>
  <title>Song Recommendations </title>
</header>
<main>
  <div class="home">
    <h2>Song Recommendations for Dance</h2>

    <table>
      <tr>
        <th>Song Name</th>
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
  </div>

<section>
<!-- Don't show the form or the confirmation message -->
<?php if(!$show_confirmation) { ?>

  <h2>Song recommendation form</h2>

  <p>Feel free to add any song recommendation that is suitable for dance. You can suggest what styles of dance and inspiration choreographies if possible too!</p>


      <form method="post" action="/pages/home.php" novalidate>

        <p class="feedback <?php echo $form_feedback_classes['name']; ?>">Please provide your song recommendation name.</p>
        <div class="label-input">
          <label for="name_field">Song Name:</label>
          <input id="name_field" type="text" name="name" value="<?php echo $sticky_values['name']; ?>">
        </div>

        <p class="feedback <?php echo $form_feedback_classes['artist']; ?>">Please provide an artist name.</p>
        <div class="label-input">
          <label for="artist_field">Artist Name:</label>
          <input id="artist_field" type="text" name="artist" value="<?php echo $sticky_values['artist']; ?>">
        </div>

        <p class="feedback <?php echo $form_feedback_classes['genre']; ?>">Please provide a genre.</p>
        <div class="label-input">
          <label for="genre_field">Song Genre:</label>
          <input id="genre_field" type="text" name="genre" value="<?php echo $sticky_values['genre']; ?>">
        </div>

        <p class="feedback <?php echo $form_feedback_classes['style']; ?>"></p>
        <div class="label-input">
          <label for="style_field">Choreography Style:</label>
          <input id="style_field" type="text" name="style" value="<?php echo $sticky_values['style']; ?>">
        </div>

        <p class="feedback <?php echo $form_feedback_classes['inspo']; ?>"></p>
        <div class="label-input">
          <label for="inspo_field">Choreography Inspiration:</label>
          <input id="inspo_field" type="text" name="inspo" value="<?php echo $sticky_values['inspo']; ?>">
        </div>

        <div class="align-right">
          <input type="submit" value="submit" name = "submit-form">
        </div>
      </form>
    </section>
    <?php } else { ?>

    <!-- Show the form or the confirmation message. -->

      <section>
        <h2>Thanks for your recommendation!</h2>

        <p>Thank you for your reccomendation of <?php echo htmlspecialchars($form_values['artist']); ?> 's <?php echo htmlspecialchars($form_values['name']); ?>.</p>

        <p><a href="/pages/home.php">Submit another recommendation</a>.</p>
      </section>
    <?php } ?>

  </main>

</body>

</html>
