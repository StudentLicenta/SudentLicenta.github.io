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

        h1 {
            font-size: 2.5rem;
            margin-top: 0;
            color: #3366FF;
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

        .content {
            max-width: 600px;
            margin: 0 auto;
            background-color: #F7F9FC;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .history-item {
            text-align: left;
            margin-bottom: 20px;
            background-color: #FFFFFF;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .history-item .date {
            font-size: 1.2rem;
            color: #777;
        }

        .history-item .event {
            font-size: 1.4rem;
            color: #333;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="paginaPrincipala.php">Pagina principală</a></li>
            <li><a href="index.php">Stație meteo</a></li>
            <li><a href="istoric.php" class="active">Istoric</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1 style="color: #3366FF;">Istoric</h1>
        <div class="history-item">
            <div class="date" style="color: #777;">31 ianuarie 2023</div>
            <div class="event" style="color: #333;"> 
            <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/2209336/widgets/678339"></iframe>
        </div>
        </div>
        <div class="history-item">
            <div class="date" style="color: #777;">15 februarie 2023</div>
            <div class="event" style="color: #333;">Eveniment 2</div>
        </div>
        <!-- Add more history items as needed -->
    </div>
</body>
</html>
