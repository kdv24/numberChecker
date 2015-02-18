<?php
  $guess = $_GET["user_guess"];
  $favorite_number = rand(1,20);
  $message = checkGuess($guess, $favorite_number);

  function checkGuess($guessed_number, $winning_number)
    {
      if ($guessed_number < 1 || $guessed_number > 20) {
        return "That's not between 1 and 20!";
      }

      elseif ($guessed_number == $winning_number) {
        return "Way to go! You guessed it!";
      }
      elseif ($guessed_number < $winning_number) {
        return "You're a little low.  Maybe next time.";
      }
      else {
        return "Your number is too high this time.  You lose.";
      }
    }

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap.min.css">
    <title>Guess My Number</title>
</head>
<body>
  <div class="container">
    <h1><?php echo $message; ?></h1>
    <h3><?php echo "You guessed: " . $guess; ?> </h3>
    <h3><?php echo "The right answer was: " . $favorite_number; ?> </h3>
  </div>
</body>
</html>







