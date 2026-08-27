<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>

    <h2>Sum of Two Numbers</h2>

    <form method="post">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>

        <input type="submit" name="submit" value="Compute Sum">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $sum = $num1 + $num2;

        echo "<h3>The sum is: $sum</h3>";
    }
    ?>

</body>
</html>