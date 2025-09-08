<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator FUNCTION</title>
</head>
<body>
    <h2>Kalkulator dengan Function</h2>
    <form method="post">
        <input type="number" name="a" required>
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="b" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    function hitung($a, $b, $op) {
        switch ($op) {
            case "+": return $a + $b;
            case "-": return $a - $b;
            case "*": return $a * $b;
            case "/": return ($b != 0) ? $a / $b : "Error (bagi nol)";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $op = $_POST["op"];
        $hasil = hitung($a, $b, $op);

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
