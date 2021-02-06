<?php

?>

<?php include('./templates/header.php'); ?>

  <main>
    <div class="container">
      <h2>Add a question</h2>
      <form action="add.php" method="post">
        <p>
          <label>
            <span>Question Number</span>
            <input type="number" name="question_number">
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
            <span>Choice #1</span>
            <input type="text" name="choice2">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #1</span>
            <input type="text" name="choice3">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #1</span>
            <input type="text" name="choice4">
          </label>
        </p>
        <p>
          <label>
            <span>Choice #1</span>
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