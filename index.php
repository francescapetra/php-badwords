<?php
 $bad_words = $_GET["block"];

 $paragraph = "Grande figlio di puttana, ma che amico per me, uno che ruba anche la luna se la deve dare a te, eeh...Grande però, che grande figlio di puttana. Eeeh, aspetterò ancora un'altra settimana. Adesso so anche il perché, perché sei un figlio di puttana. Ed è per questo che a te la gente tutto ti perdona. Perché dicono: Guarda come suona la chitarra.....Quel grande figlio di puttana!!!";

 $change_paragraph = str_replace('puttana', $bad_words, $paragraph);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo Canzone</title>
</head>
 <body>
  <h1>Testo canzone</h1>
  <p><?php echo $change_paragraph ?> </p>
  <p><?php echo 'La lunghezza del paragrafo è ' .strlen($change_paragraph) ?> </p>
        
 </body>
</html>