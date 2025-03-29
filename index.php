<?php
header('Content-Type: text/html; charset=utf-8');

echo "
<!DOCTYPE html>
<html>
<head>
    <title>Usar php pra retornar html, css e javascript para o navegador</title>
    <style>
        body { background: #f0f0f0; }
        .box { color: blue; }
    </style>
</head>
<body>
    <div class='box'>
        <h1>Olá!</h1>
        <p>Texto simples</p>
        <button onclick='alert(\"Olá!\")'>Clique Aqui</button>
    </div>
</body>
</html>
";
?>