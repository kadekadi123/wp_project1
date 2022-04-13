<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Konversi Suhu</title>
</head>
<body>
    <div class="container">
        <form action="tugas2.php" method="post">
        <div class="atas">
            <h1>Konversi Suhu</h1>
            <p>Konversi:</p>
        </div> 
        <div class="radio">
            <input type="radio" id="celcius" name="konversi" value="celcius">
            <label for="celcius">Celcius ke Fahrenheit</label>
            <input type="radio" id="fahrenheit" name="konversi" value="fahrenheit">
            <label for="fahrenheit">Fahrenheit ke Celcius</label>
            <br><br>
            <input class="nilai" type="text" name="suhu" placeholder="Nilai Suhu"><br><br>
            <input class="btn" type="submit" name="submit" value="Konversi"><br><br>
        </form>
        </div>
    </div>
</body>
</html>