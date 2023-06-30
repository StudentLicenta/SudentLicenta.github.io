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
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="paginaPrincipala.php" class="active">Pagina principală</a></li>
            <li><a href="index.php">Stație meteo</a></li>
            <li><a href="istoric.php">Istoric</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1 style="color: #3366FF;">Bun venit pe Pagina principală</h1>
        <!-- Content for the home page goes here -->
    </div>
</body>
</html>
