<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body>
    <p>Új asztalfoglalás érkezett!</p>
    <p>
        <strong>Név:</strong> {{ $mail['name'] }}
    </p>
    <p>
        <strong>Email:</strong> {{ $mail['email'] }}
    </p>
    <p>
        <strong>Telefonszám:</strong> {{ $mail['phone'] }}
    </p>
    <p>
        <strong>Dátum:</strong> {{ $mail['checkin'] }}
    </p>
    <p>
    <strong>Időpont:</strong> {{ $mail['time'] }}
    </p>
    <p>
        <strong>Vendégek száma:</strong> {{ $mail['persons'] }}
    </p>
</body>
</html>
