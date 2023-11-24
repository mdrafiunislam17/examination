<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        input {
            width: 50px;
        }
    </style>
</head>
<body>

    <h2>Number house multiplication table</h2>
    
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        $digits = str_split($number);

        echo '<br>';
        foreach ($digits as $digit) {
            echo '<p>' . getNumberName($digit) . '</p>';
        }
    }

    function getNumberName($number, $limit = 10) {
        for ($i = 1; $i <= $limit; $i++) {
            $result = $number * $i;
            echo "$number x $i = $result<br>";
        }
    }
    
    ?>

</body>
</html>
