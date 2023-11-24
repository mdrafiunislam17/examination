<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 70px;
        }
        input {
            width: 50px;
        }
    </style>
</head>
<body>

    <h2>Simple calculator</h2>
    
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Number 1" required>
        <select name="operation" required>
            <option value="add">Sum</option>
            <option value="subtract">sub</option>
            <option value="multiply">Mul</option>
            <option value="divide">Div</option>
        </select>
        <input type="text" name="num2" placeholder="Number 2" required>
        <button type="submit">calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo '<p style="color: red;">The last quotient is not divisible by zero.</p>';
                }
                break;
            default:
                echo '<p style="color: red;">Unfamiliar operation</p>';
                break;
        }

        echo '<h3>Result: ' . $result . '</h3>';
    }
    ?>

</body>
</html>
