<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #E1ECF4;
        }

        h2 {
            font-size: 2.5rem;
            margin-top: 0;
            color: #333;
        }

        nav {
            background-color: #333;
            padding: 10px;
            margin-bottom: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #FFF;
            text-decoration: none;
            padding: 10px;
        }

        nav ul li a:hover {
            background-color: #555;
        }

        .weather-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 600px;
            margin: 0 auto;
        }

        .weather-card {
            flex: 1 1 200px;
            margin: 10px;
            padding: 20px;
            background-color: #F7F9FC;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .weather-icon {
            font-size: 3rem;
            color: #3366FF;
            margin-bottom: 10px;
        }

        .weather-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        .weather-unit {
            font-size: 1.2rem;
            color: #777;
        }

        .weather-description {
            font-size: 1.2rem;
            color: #555;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="paginaPrincipala.php">Pagina principală</a></li>
            <li><a href="#" class="active">Stație meteo</a></li>
            <li><a href="istoric.php">Istoric</a></li>
        </ul>
    </nav>
    <h2>Staţie Meteo</h2>
    <div class="weather-container">
        <div class="weather-card">
            <i class="fas fa-tint weather-icon" style="color: #0099CC;"></i>
            <div class="weather-value" id="Umiditate"></div>
            <div class="weather-unit">%</div>
            <div class="weather-description">Umiditate</div>
        </div>
        <div class="weather-card">
            <i class="fas fa-thermometer-half weather-icon" style="color: #FF9933;"></i>
            <div class="weather-value" id="TemperaturaC"></div>
            <div class="weather-unit">&deg;C</div>
            <div class="weather-description">Temperatură (Celsius)</div>
        </div>
        <div class="weather-card">
            <i class="fas fa-thermometer-half weather-icon" style="color: #FF3366;"></i>
            <div class="weather-value" id="TemperaturaF"></div>
            <div class="weather-unit">&deg;F</div>
            <div class="weather-description">Temperatură (Fahrenheit)</div>
        </div>
        <div class="weather-card">
            <i class="fas fa-fire weather-icon" style="color: #FF6699;"></i>
            <div class="weather-value" id="IndiceCalduraC"></div>
            <div class="weather-unit">&deg;C</div>
            <div class="weather-description">Indice de Comfort (Celsius)</div>
        </div>
        <div class="weather-card">
            <i class="fas fa-fire weather-icon" style="color: #FF3399;"></i>
            <div class="weather-value" id="IndiceCalduraF"></div>
            <div class="weather-unit">&deg;F</div>
            <div class="weather-description">Indice de Comfort (Fahrenheit)</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#Umiditate").load("HumidityContainer.php");
                $("#TemperaturaC").load("TemperatureCelsiusContainer.php");
                $("#TemperaturaF").load("TemperatureFarenheitContainer.php");
                $("#IndiceCalduraC").load("HeatIndexCContainer.php");
                $("#IndiceCalduraF").load("HeatIndexFContainer.php");
            }, 500);
        });
    </script>
</body>
</html>
