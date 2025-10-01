<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>

<body>
    <li><a href="index.php">Go Back</a></li>
    <?php
    $sentence = "Hold high the torch;<br>
        Let its blaze reach all corners,<br>
        Throughout the world<br>
        to lighten the course of darkness.<br>
        Keep wise and well not forgetting fidelity,<br>";

    $charCount = strlen($sentence);
    $wordCount = str_word_count($sentence);
    $uppercase = strtoupper($sentence);
    $lowercase = strtolower($sentence);

    echo "Sentence: $sentence <br>";
    echo "Number of characters: $charCount <br>";
    echo "Number of words: $wordCount <br>";
    echo "Uppercase: $uppercase <br>";
    echo "Lowercase: $lowercase <br>";
    ?>
</body>

</html>