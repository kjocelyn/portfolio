<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $answer1 = $_POST['question-1-answers'];
      $answer2 = $_POST['question-2-answers'];
      $answer3 = $_POST['question-3-answers'];
      $answer4 = $_POST['question-4-answers'];
      $answer5 = $_POST['question-5-answers'];

      $totalCorrect = 0;

      if ($answer1 == "B") { $totalCorrect++; }
      if ($answer2 == "B") { $totalCorrect++; }
      if ($answer3 == "A") { $totalCorrect++; }
      if ($answer4 == "D") { $totalCorrect++; }
      if ($answer5 == "B") { $totalCorrect++; }

      echo "<div id='results'>$totalCorrect / 5 correct</div>";
    ?>

  </body>
</html>
