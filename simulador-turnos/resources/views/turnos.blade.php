<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Turnos Bancarios</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(120deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #333;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1e3c72;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #16325c;
        }

        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Turno Bancario</h1>

    <form method="POST" action="/generar-turno">
        @csrf

        <label>Nombre del cliente</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>

        <label>Tipo de trámite</label>
        <select name="tramite" required>
            <option value="">Seleccione...</option>
            <option value="Caja">Caja</option>
            <option value="Servicio al Cliente">Servicio al Cliente</option>
            <option value="Créditos">Créditos</option>
        </select>

        <button type="submit">Generar Turno</button>
    </form>

    <div class="footer">
        Simulador Bancario © {{ date('Y') }}
    </div>
</div>

</body>
</html>