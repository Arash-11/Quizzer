<?php

  include('./config/database.php');

  /*
  *  Get total number of questions
  */

  $query = "SELECT * FROM questions";

  // Get results
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;

?>

<?php include('./templates/header.php'); ?>

  <main>
    <div class="container">
      <h2>Test your PHP knowledge</h2>
      <p>This is a multiple choice quiz to test your knowledge of PHP</p>
      <ul>
        <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimated Time: </strong><?php echo $total * 0.5 ?> minute</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>

<?php include('./templates/footer.php'); ?>