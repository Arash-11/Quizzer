<?php

  include('./config/database.php');

  session_start();

  // Set question number
  $number = (int) $_GET['n'];

  /*
  *  Get total questions
  */
  $query = "SELECT * FROM questions";

  // Get result
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;


  /*
  *  Get question
  */
  $query = "SELECT * FROM questions WHERE question_number = $number";

  // Get result
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

  $question = $result->fetch_assoc();

  /*
  *  Get choice
  */
  $query = "SELECT * FROM choices WHERE question_number = $number";

  // Get choices
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>

<?php include('./templates/header.php'); ?>

  <main>
    <div class="container">
      <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
      <p class="question">
        <?php echo $question['text']; ?>
      </p>
      <form action="process.php" method="post">
        <ul class="choices">
          <?php while($row = $choices->fetch_assoc()): ?>
            <li>
              <input name="choice" type="radio" value="<?php echo $row['id']; ?>">
              <?php echo $row['text']; ?>
            </li>
          <?php endwhile; ?>
        </ul>
        <button type="submit" name="submit">Submit</button>
        <input type="hidden" name="number" value="<?php echo $number; ?>">
      </form>
    </div>
  </main>

<?php include('./templates/footer.php'); ?>