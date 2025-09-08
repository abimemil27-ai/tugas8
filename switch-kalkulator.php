<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator SWITCH</title>
</head>
<body>
    <h2>Kalkulator SWITCH</h2>
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $op = $_POST["op"];
        $hasil = 0;

        switch ($op) {
            case "+": $hasil = $a + $b; break;
            case "-": $hasil = $a - $b; break;
            case "*": $hasil = $a * $b; break;
            case "/": $hasil = ($b != 0) ? $a / $b : "Error (bagi nol)"; break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
