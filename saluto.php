<?php 
  $wordCensored = $_POST['words'];
  $paragraphNormal = $_POST['paragraph'];
  $paragraphCensored = str_replace($wordCensored, '***', $paragraphNormal);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto Php</title>
</head>
<body>
    <p>
        il paragrafo è: <?php echo $paragraphNormal ?>. La sua lunghezza è: <?php echo strlen($paragraphNormal);?> caratteri.
    </p>

    <p>
        il paragrafo dopo la censura è: <?php echo $paragraphCensored?>. La sua lunghezza è: <?php echo strlen($paragraphCensored);?> caratteri.
    </p>
</body>
</html>
