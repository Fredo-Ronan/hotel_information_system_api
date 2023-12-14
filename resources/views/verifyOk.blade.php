<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="{{ $delay }};url={{ $url }}">
    <title>Verifikasi Email | OK</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Selamat! Email anda terverifikasi dan Akun anda sudah aktif!</h2>
        <h4>Anda akan diarahkan ke halaman login dalam {{ $delay }} detik...</h4>
    </div>
</body>
</html>