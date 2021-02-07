<?php

  session_start();

  include('./templates/header.php'); 

?>

  <main>
    <div class="container">
      <h2>You're done!</h2>
      <p>Congrats! You have completed the test.</p>
      <p>Final score: <?php echo $_SESSION['score']; ?></p>
      <a href="question.php?n=1" class="start">Take again</a>
    </div>
  </main>

<?php

  include('./templates/footer.php');

  $_SESSION['score'] = 0;
  
?>