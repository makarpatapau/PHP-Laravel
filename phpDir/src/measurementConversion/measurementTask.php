<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Measurement Converter</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2>Measurement Converter</h2>

    <form method="post">
        <h3>A. Temperature (Celsius)</h3>
        <input type="number" name="celsius" placeholder="Enter °C">

        <h3>B. Speed (km/h)</h3>
        <input type="number" name="speed" placeholder="Enter km/h">

        <h3>C. Mass</h3>
        <input type="number" name="kg" placeholder="Enter kg">
        <input type="number" name="grams" placeholder="Enter grams">

        <br>
        <button type="submit" name="convert">Convert</button>
    </form>

    <?php
    if (isset($_POST['convert'])) {
        // Temperature
        $celsius = $_POST['celsius'];
        if ($celsius !== "") {
            $fahrenheit = ($celsius * 9 / 5) + 32;
            $kelvin = $celsius + 273.15;
            echo "<p><strong>Temperature:</strong> $celsius °C = $fahrenheit °F, $kelvin K</p>";
        }

        // Speed
        $speed = $_POST['speed'];
        if ($speed !== "") {
            $metersPerSecond = $speed * (1000 / 3600); // or $speed / 3.6
            $knots = $speed * 0.539957;
            echo "<p><strong>Speed:</strong> $speed km/h = $metersPerSecond m/s, $knots knots</p>";
        }

        // Mass
        $kg = $_POST['kg'];
        if ($kg !== "") {
            $gramsFromKg = $kg * 1000;
            echo "<p><strong>Mass:</strong> $kg kg = $gramsFromKg g</p>";
        }

        $grams = $_POST['grams'];
        if ($grams !== "") {
            $kgFromGrams = $grams / 1000;
            echo "<p><strong>Mass:</strong> $grams g = $kgFromGrams kg</p>";
        }
    }
    ?>

</body>

</html>