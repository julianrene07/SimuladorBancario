<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Turno Asignado</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #2a5298, #1e3c72);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .ticket {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 {
            color: #1e3c72;
        }

        .turno {
            font-size: 48px;
            font-weight: bold;
            color: #2a5298;
            margin: 20px 0;
        }

        .info {
            font-size: 16px;
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 20px;
            background: #1e3c72;
            color: #fff;
            border-radius: 5px;
            transition: 0.3s;
        }

        a:hover {
            background: #16325c;
        }
    </style>
</head>
<body>

<div class="ticket">
    <h1>Turno Asignado</h1>

    <div class="turno">
        {{ $numeroTurno }}
    </div>

    <div class="info">
        <p>Personas antes que usted:</p>
        <strong>{{ $personasAntes }}</strong>
    </div>

    <a href="/">Solicitar otro turno</a>
</div>

</body>
</html>