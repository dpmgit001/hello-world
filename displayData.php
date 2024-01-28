<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question and Answer Display</title>
</head>
<body>
    <h2>Question and Answer Display</h2>
    <table>
        <tr>
            <th>Question</th>
            <th>Answer</th>
        </tr>
        <?php
        $file = 'data.txt';
        $data = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($data as $line) {
            list($question, $answer) = explode(' - ', $line);
            echo "<tr><td>$question</td><td>$answer</td></tr>";
        }
        ?>
    </table>
</body>
</html>