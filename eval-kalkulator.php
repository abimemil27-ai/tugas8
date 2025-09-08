<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator EVAL</title>
</head>
<body>
    <h2>Kalkulator EVAL</h2>
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

        // bentuk ekspresi string
        $exp = "$a $op $b";
        // hati-hati penggunaan eval (dianggap tidak aman)
        $hasil = eval("return $exp;");

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
