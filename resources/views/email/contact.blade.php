<!DOCTYPE html>
<html>
<head>
    <title>Spaletta</title>
</head>
<body>
    <p>Új uzenet érkezett a spalettakecskemet.hu-ról!</p>
    <p>
        <strong>Név:</strong> {{ $mail['name'] }}
    </p>
    <p>
        <strong>Email:</strong> {{ $mail['email'] }}
    </p>
    <p>
        <strong>Üzenet:</strong> {{ $mail['message'] }}
    </p>
</body>
</html>
