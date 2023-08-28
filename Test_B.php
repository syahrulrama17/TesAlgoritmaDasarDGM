<!DOCTYPE html>
<html>

<head>
    <title>Test B</title>
</head>

<body>
    <h2>Test B</h2>
    <form method="post">
        <label for="text">Input Text:</label>
        <input type="text" name="text" required><br><br>
        <label for="pattern">Input Pattern:</label>
        <input type="text" name="pattern"><br><br>
        <input type="submit" name="submit" value="Count">
    </form>

    <?php
    function pattern_count($text, $pattern)
    {
        if (empty($pattern)) {
            return 0;
        }

        $panjang_text = strlen($text);
        $panjang_pattern = strlen($pattern);
        $count = 0;

        for ($i = 0; $i <= $panjang_text - $panjang_pattern; $i++) {
            $match = true;
            for ($j = 0; $j < $panjang_pattern; $j++) {
                if ($text[$i + $j] !== $pattern[$j]) {
                    $match = false;
                    break;
                }
            }
            if ($match) {
                $count++;
            }
        }

        return $count;
    }
    if (isset($_POST['submit'])) {
        $input_text = $_POST['text'];
        $input_pattern = $_POST['pattern'];
        $output = pattern_count($input_text, $input_pattern);

        echo "Input : \"$input_text\",\"$input_pattern\"<br>";
        echo "Output :  $output ";
    }
    ?>
    <ul>
        <a href="index.php">Back</a>
    </ul>
</body>

</html>