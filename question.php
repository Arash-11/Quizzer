<?php

?>

<?php include('./templates/header.php'); ?>

  <main>
    <div class="container">
      <div class="current">Question 1 of 5</div>
      <p class="question">
        What does PHP stand for?
      </p>
      <form action="process.php" method="post">
        <ul class="choices">
          <li><input name="choice" type="radio" value="1">PHP: Hypertext Preprocessor</li>
          <li><input name="choice" type="radio" value="1">Private Home Page</li>
          <li><input name="choice" type="radio" value="1">Personal Home Page</li>
          <li><input name="choice" type="radio" value="1">Personal Hypertext Preprocessor</li>
        </ul>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </main>

<?php include('./templates/footer.php'); ?>