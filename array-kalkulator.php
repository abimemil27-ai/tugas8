<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator ARRAY MAP</title>
</head>
<body>
    <h2>Kalkulator dengan Array Map</h2>
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

        $ops = [
            "+" => fn($x, $y) => $x + $y,
            "-" => fn($x, $y) => $x - $y,
            "*" => fn($x, $y) => $x * $y,
            "/" => fn($x, $y) => ($y != 0) ? $x / $y : "Error (bagi nol)"
        ];

        $hasil = $ops[$op]($a, $b);
        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
