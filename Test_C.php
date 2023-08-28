<!DOCTYPE html>
<html>

<head>
    <title>Test C</title>
</head>

<body>
    <h2>Test C</h2>
    <form method="post">
        <label for="input_text">Input Text:</label>
        <input type="text" name="input_text" required><br><br>
        <input type="submit" name="submit" value="Count">
    </form>

    <?php
    function tes_c($text)
    {
        $letter_count = [];

        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                if (!isset($letter_count[$char])) {
                    $letter_count[$char] = 1;
                } else {
                    $letter_count[$char]++;
                }
            }
        }

        ksort($letter_count, SORT_STRING | SORT_FLAG_CASE);

        return $letter_count;
    }

    if (isset($_POST['submit'])) {
        $input_text = $_POST['input_text'];
        $letter_count = tes_c($input_text);

        echo "Input: \"$input_text\"<br>";
        echo "Output: [";
        $output_parts = [];
        foreach ($letter_count as $letter => $count) {
            $output_parts[] = "\"$letter\": $count";
        }
        echo implode(", ", $output_parts);
        echo "]";
    }
    ?>
    <ul>
        <a href="index.php">Back</a>
    </ul>
</body>

</html>