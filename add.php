<?php

  include('./config/database.php');

  include('./templates/header.php');

  if(isset($_POST['submit'])) {
    // Get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];

    // Choices array
    $choices = [
      1 => $_POST['choice1'],
      2 => $_POST['choice2'],
      3 => $_POST['choice3'],
      4 => $_POST['choice4'],
      5 => $_POST['choice5']
    ];

    // Question query
    $query = "INSERT INTO questions (question_number, text) VALUES ('$question_number', '$question_text')";

    // Run query
    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

    // Validate insert
    if($insert_row) {
      foreach($choices as $choice => $value) {
        if($value != '') {
          $is_correct = $correct_choice == $choice ? 1 : 0;
          // Choice query
          $query = "INSERT INTO choices (question_number, is_correct, text) VALUES ('$question_number', '$is_correct', '$value')";

          // Run query
          $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

          // Validate insert
          if($insert_row) {
            continue;
          } else {
            die('Error: (' . $mysqli->errno . ') ' . $mysqli->error);
          }
        }
      }
      $msg = 'Question has been added';
    }
  }

  /*
  *  Get total questions
  */
  $query = "SELECT * FROM questions";
  // Get results
  $questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $questions->num_rows;
  $next = $total + 1;

?>

  <main>
    <div class="container">
      <h2>Add a question</h2>
      <?php
        if(isset($msg)) {
          echo '<p>' . $msg . '</p>';
        }
      ?>
      <form action="add.php" method="post">
        <p>
          <label>
            <span>Question Number</span>
            <input type="number" name="question_number" value="<?php echo $next; ?>">
          </label>
        </p>
        <p>
          <label>
            <span>Question Text</span>
            <input type="text" name="question_text">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #1</span>
            <input type="text" name="choice1">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #2</span>
            <input type="text" name="choice2">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #3</span>
            <input type="text" name="choice3">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #4</span>
            <input type="text" name="choice4">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #5</span>
            <input type="text" name="choice5">
          </label>
        </p>
        <p>
          <label>
            <span>Correct Choice Number</span>
            <input type="number" name="correct_choice">
          </label>
        </p>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </main>

<?php include('./templates/footer.php'); ?>