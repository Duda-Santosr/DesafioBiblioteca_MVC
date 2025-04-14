<?php

require_once 'livroController.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca de Livros</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f5ff;
            color: #4a004e;
            margin: 0;
            padding: 40px;
        }

        h2 {
            color: #7f3fa0;
            border-bottom: 2px solid #d1a3ff;
            padding-bottom: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
            max-width: 800px;
            margin: 0 auto;
        }

        li {
            background: linear-gradient(135deg, #f3e8ff, #e9d8fd);
            margin-bottom: 15px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(128, 0, 128, 0.1);
            transition: transform 0.2s ease, background 0.3s ease;
        }

        li:hover {
            transform: scale(1.02);
            background: linear-gradient(135deg, #e6ccff, #dbc5f0);
        }

        li::before {
            content: "📖 ";
            font-size: 18px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background-color: #fff0ff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(128, 0, 128, 0.1);
        }
    </style>
</head>
<body>
</body>
</html>
